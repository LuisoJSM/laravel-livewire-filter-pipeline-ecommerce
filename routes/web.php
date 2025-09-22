<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Shop\Pages\ShopPage;

Route::redirect('/', '/shop');

Route::get('/shop', ShopPage::class);
