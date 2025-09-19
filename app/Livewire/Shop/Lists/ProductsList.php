<?php

namespace App\Livewire\Shop\Lists;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pipeline\Pipeline;
use App\Enums\Filters\ShopFilters;
use Livewire\Attributes\On;

class ProductsList extends Component
{
    use WithPagination;

    protected string $paginationTheme = 'bootstrap';

    // Available filters and their default values
    private array $filters = [
        'category' => [],
    ];

    /**
     * Lifecycle hook: executed when the component is mounted.
     * It ensures all filters and pagination are reset on load.
     */
    public function mount()
    {
        $this->resetFilters();
    }

    /**
     * Event listener: reacts to the "filters-updated" event
     * dispatched from filter components (e.g. CategoryFilter).
     *
     * Stores the updated filter values in session and
     * resets pagination to page 1.
     */
    #[On('filters-updated')]
    public function refreshProductList(mixed $filters)
    {
        $key = key($filters);           // e.g. "category"
        $value = $filters[$key];        // e.g. [1, 3]

        session()->put('shop:' . $key, $value);

        // Go back to page 1 after applying new filters
        $this->gotoPage(1);
    }

    /**
     * Clears all filters and pagination settings.
     *
     * Communication:
     * - Called in mount() on first load.
     * - Also ensures any session values from past visits are removed.
     */
    private function resetFilters()
    {
        collect($this->filters)
            ->each(fn ($filter, $key) => session()->forget('shop:' . $key));

        session()->forget('shop:perPage');

        $this->gotoPage(1);
    }

    /**
     * Reads filters from session (if present) or defaults.
     *
     * Communication:
     * - Called inside getProducts() to know which filters to apply.
     */
    private function filters(): array
    {
        return collect($this->filters)
            ->map(fn ($filter, $key) => session('shop:' . $key, $filter))
            ->toArray();
    }

    /**
     * Builds the base Product query, applies active filters
     * through a Pipeline, and paginates the results.
     *
     * Communication:
     * - Uses filters() to fetch current session filters.
     * - Applies each filter using ShopFilters enum and
     *   its corresponding Filter class.
     * - Called directly in render().
     */
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

    /**
     * Renders the component view.
     *
     * Communication:
     * - Calls getProducts() to pass filtered, paginated products
     *   to the Blade view.
     */
    public function render()
    {
        return view('livewire.shop.lists.products-list', [
            'products' => $this->getProducts(),
        ]);
    }
}
