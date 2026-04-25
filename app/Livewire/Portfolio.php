<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Portfolio as PortfolioModel;

class Portfolio extends Component
{
    public $filter = '*'; // default filter

    // Set category filter
    public function setFilter($category)
    {
        $this->filter = $category;
    }

    // Get filtered portfolios
    public function getPortfoliosProperty()
    {
        return PortfolioModel::when($this->filter !== '*', function($query) {
                $query->where('category', $this->filter);
            })
            ->latest()
            ->get();
    }

    public function render()
    {
        return view('livewire.portfolio');
    }
}