<div class="container-fluid p-5">
    <div class="row">
        <!-- Sidebar Filters -->
        <div
            style="height: 90vh !important;"
            class="col-sm-12 col-md-4 col-lg-4 col-xl-3 col-xxl-2 overflow-auto"
        >
            <livewire:shop.filters.category-filter />

            <div class="my-4"></div>

            <livewire:shop.filters.price-filter />

            <div class="my-4"></div>

            <livewire:shop.filters.color-filter />

            <div class="my-4"></div>

            <livewire:shop.filters.size-filter />

            <div class="my-4"></div>

            <livewire:shop.filters.brand-filter />

            <div class="my-4"></div>

            <livewire:shop.filters.rating-filter />
        </div>
        <!-- ./Sidebar Filters -->

        <!-- Products -->
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-9 col-xxl-10">
            <div class="row mb-3">
                <div class="col-auto">
                    <button class="btn btn-danger" wire:click="resetFilters">
                        <i class="fas fa-undo"></i>
                    </button>
                </div>
                <div class="col-auto">
                    <livewire:shop.filters.per-page-filter />
                </div>
                <div class="col">
                    <livewire:shop.filters.search-filter />
                </div>
            </div>

            <div class="row">

                <div class="col-3">
                    <x-product-card :product="$product" />
                </div>

                <div class="col-12">
                    <livewire:shop.lists.products-list />
                </div>
            </div>
        </div>
        <!-- ./Products -->
    </div>
</div>
