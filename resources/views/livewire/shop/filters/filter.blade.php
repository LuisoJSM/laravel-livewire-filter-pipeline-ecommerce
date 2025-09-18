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
        value="{{ $model->id }}"
        id="{{ $alias }}--filter--{{ $model->id }}"
        wire:model.live="selectedModels"
        />

            {{ $model->name }}


        <label
        class="form-check-label"
        for="{{ $alias }}--filter--{{ $model->id }}"
        >

        </label>

        <span class="badge bg-primary rounded-pill float-end">{{ $model->products_count }}</span>

        </li>

        @endforeach

        @json($selectedModels)
    </ul>


</x-card-filter>
