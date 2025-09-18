<?php

namespace App\Livewire\Shop\Filters;

use App\Livewire\Shop\Lists\ProductsList;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;
use Livewire\Component;


class Filter extends Component
{

    public string $title;

    protected string $eloquentModel;

    public function filters(): Collection
    {
        return collect();
    }


    protected function applyFilters(array $filters): void
    {

        $this->dispatch('filters-updated', filters: $filters)->to(ProductsList::class);

    }

    public function render()
    {
        return view('livewire.shop.filters.filter',[
            'filters' => $this->filters(),
            'alias' => Str::of(class_basename($this->eloquentModel))->lower()
        ]);
    }
}
