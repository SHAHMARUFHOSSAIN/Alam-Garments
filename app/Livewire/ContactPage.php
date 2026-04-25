<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactPage extends Component
{
    public $name, $email, $subject, $message;

    public function submit()
{
    $this->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    // 1️⃣ Save to database
    Contact::create([
        'name' => $this->name,
        'email' => $this->email,
        'subject' => $this->subject,
        'message' => $this->message,
    ]);

    // 2️⃣ Send email
    Mail::raw(
        "You received a new contact message.\n\n".
        "Name: {$this->name}\n".
        "Email: {$this->email}\n".
        "Subject: {$this->subject}\n".
        "Message:\n{$this->message}",
        function ($message) {
            $message->to('shahmarufhossain638@gmail.com') // ✅ এখানে তোমার nirdishto mail
                    ->subject('New Contact Message');
        }
    );

    // 3️⃣ Flash success message
    session()->flash('success', 'Message sent successfully!');

    // 4️⃣ Reset form
    $this->reset();
}

    public function render()
    {
        return view('livewire.contact-page');
    }
}