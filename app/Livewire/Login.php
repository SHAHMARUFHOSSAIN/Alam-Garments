<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email = '';
    public $password = '';

    public function login()
{
    if (Auth::attempt([
        'email' => $this->email,
        'password' => $this->password
    ])) {

        session()->regenerate();

        $role = auth()->user()->role;

        return match ($role) {
            'superadmin' => redirect('/admin'),
            'admin'      => redirect('/admin/dashboard'),
            'hr'         => redirect('/jobs/manage'),
            default      => redirect('/careers'),
        };
    }

    $this->addError('email', 'Invalid credentials');
}

    public function render()
    {
        return view('livewire.login');
    }
}