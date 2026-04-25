<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Mission;

class ShowMission extends Component
{
    public function render()
    {
        $missions = Mission::with('points')
            ->where('is_active', true)
            ->get();

        return view('livewire.show-mission', compact('missions'));
    }
}