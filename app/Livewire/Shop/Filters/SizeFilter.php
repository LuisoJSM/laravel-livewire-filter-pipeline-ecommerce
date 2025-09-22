<?php

namespace App\Livewire\Shop\Filters;

use App\Models\Size;
use App\Traits\Livewire\WithModelsFilter;
use App\Traits\Livewire\WithMultipleFilter;
use Livewire\Component;

class SizeFilter extends Filter
{
    use WithModelsFilter;

    use WithMultipleFilter;

    public string $title = 'Sizes';

    protected string $eloquentModel = Size::class;


}
