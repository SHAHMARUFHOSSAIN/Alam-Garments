<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Career;
use App\Models\JobApplication;

class JobApply extends Component
{
    use WithFileUploads;

    public $career, $name, $email, $phone, $cv, $message;

    public function mount($id)
    {
        $this->career = Career::findOrFail($id);
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $path = $this->cv->store('cvs', 'public');

        JobApplication::create([
            'career_id' => $this->career->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'cv' => $path,
            'message' => $this->message,
        ]);

        session()->flash('success', 'Applied Successfully!');

        // reset form
        $this->reset(['name','email','phone','cv','message']);
    }

    public function render()
    {
        return view('livewire.job-apply');
    }
}
