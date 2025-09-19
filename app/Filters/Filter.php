<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

/**
 * Base abstract class for all filters in the system.
 *
 * Each concrete filter must extend this class and implement
 * the handle() method to define how the filter modifies
 * the Eloquent query inside a Pipeline.
 */
abstract class Filter
{
    /**
     * The filter value (e.g. a color ID, an array of sizes, a price range).
     * It is readonly: once passed to the constructor, it cannot be modified.
     */
    public function __construct(protected readonly array|string|int|null $filter) {}

    /**
     * Each filter must implement this method.
     *
     * @param Builder $items The current Eloquent query builder instance.
     * @param \Closure $next The next filter in the pipeline.
     *
     * @return Builder The modified query builder after applying this filter.
     */
    abstract public function handle(Builder $items, \Closure $next): Builder;
}
