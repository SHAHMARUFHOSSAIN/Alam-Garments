<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\History;

class ShowHistory extends Component
{
    public $histories;

    public function mount()
    {
        // Fetch all histories from the database
        $this->histories = History::all();
    }

    public function render()
    {
        return view('livewire.show-history');
    }
}
