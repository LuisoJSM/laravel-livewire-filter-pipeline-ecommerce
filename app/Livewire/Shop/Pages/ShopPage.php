<?php

namespace App\Livewire\Shop\Pages;

use App\Livewire\Shop\Lists\ProductsList;
use Livewire\Component;

class ShopPage extends Component
{




    public function resetFilters()
    {

        $this->dispatch('reset-filters')->to(ProductsList::class);

    }


    public function render()
    {
        return view('livewire.shop.pages.shop-page');
    }
}
