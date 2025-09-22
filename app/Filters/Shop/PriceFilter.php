<?php

namespace App\Filters\Shop;

use App\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

final class PriceFilter extends Filter
{
    public function handle(Builder $items, \Closure $next): Builder
    {


        $min = $this->filter['min'] ?? 0;
        $max = $this->filter['max'] ?? 0;

        if ($min && $max) {
            $items->whereBetween('price', [$min, $max]);
        } elseif ($min) {
            $items->where('price', '>=', $min);
        } elseif ($max) {
            $items->where('price', '<=', $max);
        }


        return $next($items);
    }
}
