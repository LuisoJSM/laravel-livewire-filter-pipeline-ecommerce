<div class="input-group">
    <input
    type="text"
    class="form-control"
    placeholder="Write your search"
    wire:model.debounce.500.live='filter.search'
    >
</div>
