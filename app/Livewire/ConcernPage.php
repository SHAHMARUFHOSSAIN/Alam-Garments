<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Concern;

class ConcernPage extends Component
{
    public $concern;

    public function mount($slug)
    {
        $this->concern = Concern::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.concern-page');
    }
}