<x-card-filter :title="$title">
    <ul class="list-group list-group-flush">
        @foreach ($models as $model)
            <li wire:key="{{ $alias }}--filter--{{ $model->id }}"
                class="list-group-item d-flex justify-content-between align-items-center py-2 filter-item">

                <div class="form-check d-flex align-items-center">
                    <input class="form-check-input me-2" type="checkbox" value="{{ $model->id }}"
                        id="{{ $alias }}--filter--{{ $model->id }}" wire:model.live="selectedModels">
                    <label class="form-check-label" for="{{ $alias }}--filter--{{ $model->id }}">
                        {{ $model->name }}
                    </label>
                </div>

                <span class="badge bg-light text-dark border rounded-pill">
                    {{ $model->products_count }}
                </span>

            </li>
        @endforeach
    </ul>
</x-card-filter>
