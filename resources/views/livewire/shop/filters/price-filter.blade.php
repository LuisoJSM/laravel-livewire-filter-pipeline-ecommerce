<x-card-filter :title="$title">
    <div class="d-flex gap-2 px-3 py-2">
        <div class="input-group input-group-sm">
            <span class="input-group-text">€</span>
            <input
                        wire:model.debounce.1000.live="filter.price.min"
                        type="text"
                        class="form-control"
                        placeholder="Min"
                        aria-label="Min"
                    />
        </div>
        <div class="input-group input-group-sm">
            <span class="input-group-text">€</span>
            <input
                        wire:model.debounce.1000.live="filter.price.max"
                        type="text"
                        class="form-control"
                        placeholder="Max"
                        aria-label="Max"
                    />
        </div>
    </div>
</x-card-filter>
