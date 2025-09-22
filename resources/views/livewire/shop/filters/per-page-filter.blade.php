<div>
    <select wire:model.live="filter.perPage" class="form-select">
        @foreach ($options as $option )

        <option value="{{ $option }}">{{ $option }}</option>

        @endforeach
    </select>
</div>
