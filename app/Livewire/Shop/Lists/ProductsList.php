<?php

namespace App\Livewire\Shop\Lists;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pipeline\Pipeline;
use App\Enums\Filters\ShopFilters;

class ProductsList extends Component
{
    use WithPagination;

    protected string $paginationTheme = 'bootstrap';

    private array $filters = [
        'category' => [],
    ];

    public function mount()
    {
        $this->resetFilters();
    }

    private function resetFilters()
    {
        /**
         * Iterate through all filters defined in $this->filters
         * and remove their corresponding session keys (e.g. "shopcategory").
         *
         * Also remove the "shop:perPage" key to reset pagination settings.
         *
         * Finally, call $this->gotoPage(1) so that when filters are reset,
         * the user is always taken back to the first page of results.
         *
         * This ensures filters are cleared both in memory and session,
         * and pagination is properly reset after updates or reloads.
         */
        collect($this->filters)
            ->each(fn ($filter, $key) => session()->forget('shop' . $key));

        session()->forget('shop:perPage');

        $this->gotoPage(1);
    }

    private function filters(): array
    {
        return collect($this->filters)
            ->map(fn ($filter, $key) => session('shop' . $key, $filter))
            ->toArray();
    }

    private function getProducts()
    {
        return app(Pipeline::class)
            ->send(
                Product::query()->with([
                    'brand:id,name',
                    'category:id,name',
                    'color:id,name',
                    'size:id,name',
                    'reviews:id,product_id,rating',
                ])
            )
            ->through(
                collect($this->filters())
                    ->map(fn ($filter, $key) => ShopFilters::from($key)->create($filter))
                    ->values()
                    ->all()
            )
            ->thenReturn()
            ->paginate(session('shop:perPage', 4));
    }

    public function render()
    {
        return view('livewire.shop.lists.products-list', [
            'products' => $this->getProducts(),
        ]);
    }
}
