<?php

namespace App\Livewire;

use Livewire\Component;

class CareerPage extends Component
{

    public $careers;

    public function mount()
    {
    $this->careers = \App\Models\Career::where('status','Active')->latest()->get();
    }       
    public function render()
    {
        return view('livewire.career-page');
    }
}
