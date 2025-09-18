<?php

namespace App\Traits\Livewire;

use App\Livewire\Shop\Filters\Filter;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;



// For checkbox or multiples choices Filters

// Para filtros de tipo checkbox o con múltiples opciones


/**
 * @mixin Filter
 */
trait WithMultipleFilter
{
    public array $selectedModels = [];

    public function updatedSelectedModels(): void
    {
        $filters = [
            Str::of(class_basename($this->eloquentModel))->lower()->toString() => $this->selectedModels,
        ];

        $this->applyFilters($filters);
    }
}
