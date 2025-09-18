<x-card-filter :title="$title">


    <ul class="list-group list-group-flush">
        @foreach ($filters as $filter)

        <li
        wire:key="{{ $alias }}--filter--{{ $filter->id }}"
        class="list-group-item"
        >
        <input
        class="form-check-input me-1"
        type="checkbox"
        value="{{ $filter->id }}"
        id="{{ $alias }}--filter--{{ $filter->id }}"
        wire:model.live="selectedFilters"
        />


        <label
        class="form-check-label"
        for="{{ $alias }}--filter--{{ $filter->id }}"
        >

        </label>

        <span class="badge bg-primary rounded-pill float-end">{{ $filters->products_count }}</span>

        </li>

        @endforeach
    </ul>


</x-card-filter>
