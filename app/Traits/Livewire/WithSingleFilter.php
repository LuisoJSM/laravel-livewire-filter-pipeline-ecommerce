<?php

namespace App\Traits\Livewire;

use App\Livewire\Shop\Filters\Filter;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;



// For selecter per page or ratings
// Para el selector por página o elegir el rating.


/**
 * @mixin Filter
 * @property array $filter
 */
trait WithSingleFilter
{

    public function updatedFilter(): void
    {

        $this->applyFilters($this->filter);
    }

}
