<?php

namespace App\Filters\Shop;

use App\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

final class MaterialFilter extends Filter
{
    public function handle(Builder $items, \Closure $next): Builder
    {

        if (! $this->filter) {
            return $next($items);
        }


        $items->whereIn('material_id', $this->filter);


        return $next($items);
    }
}
