<?php

namespace App\Livewire\Shop\Filters;

use App\Traits\Livewire\WithSingleFilter;

class SearchFilter extends Filter
{

    use WithSingleFilter;

    public $filter = [
        'search' => '',
    ];

    public function render()
    {
        return view('livewire.shop.filters.search-filter');
    }
}
