<?php

namespace App\Traits\Livewire;
use App\Livewire\Shop\Filters\Filter;

use Illuminate\Database\Eloquent\Collection;



// Filters with models like Brands, Sizes...

// Para los filtros que usen modelos como marcas, tamaño...

/**
 * @mixin Filter
 */

trait WithModelsFilter
{
    public function models(): Collection
    {
        return app($this->eloquentModel)->query()
        ->withCount('products')
        ->get();
    }
}
