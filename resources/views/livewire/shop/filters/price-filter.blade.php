<x-card-filter :title="$title">
    <div>
        <div class="d-flex">
            <div class="w-50 pe-2">
                <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                        <span class="input-group-text">€</span>
                    </div>
                    <input
                        wire:model.debounce.1000.live="filter.price.min"
                        type="text"
                        class="form-control"
                        placeholder="Min"
                        aria-label="Min"
                    />
                </div>
            </div>
            <div class="w-50 ps-2">
                <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                        <span class="input-group-text">€</span>
                    </div>
                    <input
                        wire:model.debounce.1000.live="filter.price.max"
                        type="text"
                        class="form-control"
                        placeholder="Max"
                        aria-label="Max"
                    />
                </div>
            </div>
        </div>
    </div>
</x-card-filter>
