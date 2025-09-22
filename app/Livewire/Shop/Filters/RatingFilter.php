<?php

namespace App\Livewire\Shop\Filters;

use App\Traits\Livewire\WithSingleFilter;
use Livewire\Component;

class RatingFilter extends Filter
{


    use WithSingleFilter;

    public string $title = 'Rating';
    public array $filter = [
        'rating' => null,
    ];

    public function render()
    {
        return view('livewire.shop.filters.rating-filter', [
            'options' => [
                '5' => '5 stars',
                '4' => '4 stars or more',
                '3' => '3 stars or more',
                '2' => '2 stars or more',
                '1' => '1 star or more',
            ]
        ]);
    }
}
