<?php

namespace App\Livewire\Shop\Filters;

use App\Models\Color;
use App\Traits\Livewire\WithModelsFilter;
use App\Traits\Livewire\WithMultipleFilter;
use Livewire\Component;

class ColorFilter extends Filter
{
    use WithModelsFilter;

    use WithMultipleFilter;

    public string $title = 'Colors';

    protected string $eloquentModel = Color::class;


}
