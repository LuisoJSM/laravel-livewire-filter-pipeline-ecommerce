<?php

namespace App\Filters\Shop;

use App\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

final class SizeFilter extends Filter
{
    public function handle(Builder $items, \Closure $next): Builder
    {

        if (! $this->filter) {
            return $next($items);
        }


        $items->whereIn('size_id', $this->filter);


        return $next($items);
    }
}
