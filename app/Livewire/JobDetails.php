<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Career;

class JobDetails extends Component
{
    public $career;

    public function mount($id)
    {
        $this->career = Career::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.job-details');
    }
}