<?php

namespace App\Livewire\Shop\Lists;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

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
            ->each(fn($filter, $key) => session()->forget('shop' . $key));

        session()->forget('shop:perPage');

        $this->gotoPage(1);
    }


    private function filters()
    {
        return collect($this->filters)
            ->map(fn($filter, $key) => session(key: 'shop' . $key, default: $filter))
            ->toArray();
    }



    private function getProducts()
    {
        return Product::query()
        ->with([
            'brand:id,name',
            'category:id,name',
            'color:id,name',
            'size:id,name',
            'reviews:id,product_id,rating',
        ])
        ->paginate(session(key:'shop:perPage', default:4));


    }

    public function render()
    {
        return view('livewire.shop.lists.products-list', [
            'products' => $this->getProducts(),
        ]);
    }
}
