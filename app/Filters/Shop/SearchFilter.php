<?php

namespace App\Filters\Shop;

use App\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

final class SearchFilter extends Filter
{
    public function handle(Builder $items, \Closure $next): Builder
    {
        // 1. If there is no filter value, just continue the pipeline.
        if (! $this->filter) {
            return $next($items);
        }

        // 2. If a filter exists, apply it to the query:
        //    "WHERE name LIKE %search%"
        $items->where('name', 'like', '%' . $this->filter . '%');

        // 3. Pass the modified query to the next filter in the pipeline.
        return $next($items);
    }
}
