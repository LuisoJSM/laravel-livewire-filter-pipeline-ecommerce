<?php

namespace App\Livewire\Shop\Filters;

use App\Models\Material;
use App\Traits\Livewire\WithModelsFilter;
use App\Traits\Livewire\WithMultipleFilter;
use Livewire\Component;

class MaterialFilter extends Filter
{
    use WithModelsFilter;

    use WithMultipleFilter;

    public string $title = 'Materials';

    protected string $eloquentModel = Material::class;


}
