<div class="container-fluid py-5">
    <div class="row g-4">

        {{-- Sidebar Filters --}}
        <aside class="col-12 col-md-4 col-lg-3 col-xl-2">
            <div class="sticky-top" style="top: 5rem; max-height: 85vh; overflow-y: auto;">
                <livewire:shop.filters.category-filter />
                <div class="my-3"></div>
                <livewire:shop.filters.price-filter />
                <div class="my-3"></div>
                <livewire:shop.filters.color-filter />
                <div class="my-3"></div>
                <livewire:shop.filters.size-filter />
                <div class="my-3"></div>
                <livewire:shop.filters.brand-filter />
                <div class="my-3"></div>
                <livewire:shop.filters.rating-filter />
            </div>
        </aside>

        {{-- Products --}}
        <section class="col-12 col-md-8 col-lg-9 col-xl-10">

            {{-- Toolbar --}}
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-4 gap-2">
                <div class="d-flex align-items-center gap-2">
                    <button class="btn btn-light border rounded-pill d-inline-flex align-items-center gap-2 btn-reset"
                            wire:click="resetFilters" title="Resetear filtros">
                        <i class="fa fa-rotate-left"></i>
                        <span class="d-none d-sm-inline">Reset filters</span>
                    </button>

                    <livewire:shop.filters.per-page-filter />
                </div>

                <div class="flex-grow-1" style="min-width: 240px;">
                    <livewire:shop.filters.search-filter />
                </div>
            </div>

            {{-- Products List --}}
            <livewire:shop.lists.products-list />
        </section>
    </div>
</div>
