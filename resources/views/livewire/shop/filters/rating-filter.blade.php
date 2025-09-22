<x-card-filter :title="$title">
    <ul class="list-group list-group-flush">
        @foreach ($options as $rating => $text)
            <li wire:key="rating-filter-{{ $rating }}"
                class="list-group-item border-0 py-2 px-3 d-flex align-items-center hover-bg">

                <input
                    class="form-check-input me-2"
                    wire:model.live="filter.rating"
                    type="radio"
                    value="{{ $rating }}"
                    id="rating-filter-{{ $rating }}"
                />

                <label class="form-check-label mb-0" for="rating-filter-{{ $rating }}">
                    {!! str_repeat('⭐', $rating) !!} <span class="text-muted small">{{ $text }}</span>
                </label>
            </li>
        @endforeach
    </ul>
</x-card-filter>
