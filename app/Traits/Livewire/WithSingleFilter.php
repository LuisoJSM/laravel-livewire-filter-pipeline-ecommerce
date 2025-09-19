<?php

namespace App\Traits\Livewire;

use App\Livewire\Shop\Filters\Filter;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;
use Livewire\Attributes\On;

// For selecter per page or ratings
// Para el selector por página o elegir el rating.


/**
 * @mixin Filter
 * @property array $filter
 */
trait WithSingleFilter
{


     #[On('shop-reset-filters')]

    public function onresetFilters()
    {
        $this->filter = [];
    }

    public function updatedFilter(): void
    {

        $this->applyFilters($this->filter);
    }

}
