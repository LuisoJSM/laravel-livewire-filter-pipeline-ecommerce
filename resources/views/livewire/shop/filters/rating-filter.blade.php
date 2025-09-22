<x-card-filter :title="$title">
    <ul class="list-group list-group-flush">
        @foreach ($options as $rating => $text)

            <li
            wire:key='"rating-filter-{{ $rating }}'
            class="list-group-item"
            >

            <input
                class="form-check-input me-1"
                wire:model.live="filter.rating"
                type="radio"
                value="{{ $rating }}"
                id="rating-filter-{{ $rating }}"
            />

            <label class="form-check-label" for="rating-filter-{{ $rating }}">
                {{ $text }}
            </label>

            </li>

        @endforeach
    </ul>
</x-card-filter>
