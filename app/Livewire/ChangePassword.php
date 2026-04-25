<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Component
{
    public $old_password, $new_password;

    public function updatePassword()
    {
        $user = auth()->user();

        if (!Hash::check($this->old_password, $user->password)) {
            $this->addError('old_password', 'Old password is incorrect');
            return;
        }

        $user->update([
            'password' => Hash::make($this->new_password)
        ]);

        session()->flash('message', 'Password changed successfully!');
    }

    public function render()
    {
        return view('livewire.change-password');
    }
}
