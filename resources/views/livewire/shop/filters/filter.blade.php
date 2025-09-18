<x-card-filter :title="$title">


    <ul class="list-group list-group-flush">
        @foreach ($models as $model)

        <li
        wire:key="{{ $alias }}--filter--{{ $model->id }}"
        class="list-group-item"
        >
        <input
        class="form-check-input me-1"
        type="checkbox"
        value="{{ $filter->id }}"
        id="{{ $alias }}--filter--{{ $model->id }}"
        wire:model.live="selectedModels"
        />


        <label
        class="form-check-label"
        for="{{ $alias }}--filter--{{ $model->id }}"
        >

        </label>

        <span class="badge bg-primary rounded-pill float-end">{{ $models->products_count }}</span>

        </li>

        @endforeach
    </ul>


</x-card-filter>
