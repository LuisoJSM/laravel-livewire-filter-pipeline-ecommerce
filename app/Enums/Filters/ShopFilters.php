<?php

namespace App\Enums\Filters;

use App\Filters\Filter;
use App\Filters\Shop\CategoryFilter;

/**
 * Enum that represents all available shop filters.
 *
 * Each case corresponds to a specific type of filter
 * (e.g. category, color, size...). The value of the case
 * is used as the filter's identifier.
 *
 * The enum also works as a factory: using the create() method
 * it returns the appropriate Filter instance depending on the case.
 */
enum ShopFilters: string
{
    /** Filter products by category */
    case Category = 'category';

    /**
     * Create a new filter instance based on the enum case.
     *
     * @param array|string|int|null $filter The filter value(s)
     *        (e.g. an array of category IDs, a single ID, or null).
     *
     * @return Filter The concrete filter object that will be applied
     *         to the Eloquent query inside a pipeline.
     */
    public function create(array|string|int|null $filter): Filter
    {
        return match($this) {
            self::Category => new CategoryFilter($filter),
        };
    }
}
