<?php

namespace App\Livewire\Shop\Filters;

use App\Models\Category;
use App\Traits\Livewire\WithModelsFilter;
use App\Traits\Livewire\WithMultipleFilter;
use Livewire\Component;

class CategoryFilter extends Filter
{
    use WithModelsFilter;

    use WithMultipleFilter;

    public string $title = 'Categories';

    protected string $eloquentModel = Category::class;


}
