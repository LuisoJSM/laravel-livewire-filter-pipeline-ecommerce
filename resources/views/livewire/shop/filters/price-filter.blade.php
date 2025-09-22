<x-card-filter :title="$title">
    <div class="d-flex gap-2 px-2 py-1">
        <div class="input-group input-group-sm">
            <span class="input-group-text">€</span>
            <input
                wire:model.debounce.1000ms="filter.price.min"
                type="text"
                class="form-control form-control-sm"
                placeholder="Min"
                aria-label="Min"
            />
        </div>
        <div class="input-group input-group-sm">
            <span class="input-group-text">€</span>
            <input
                wire:model.debounce.1000ms="filter.price.max"
                type="text"
                class="form-control form-control-sm"
                placeholder="Max"
                aria-label="Max"
            />
        </div>
    </div>
</x-card-filter>
