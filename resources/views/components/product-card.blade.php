
<div class="card h-100">

<img src="{{ asset($product->image) }}" alt="{{ $product->name }}">

    <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
    </div>

    <!-- category, color, size, price, brand -->
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <div class="d-flex justify-content-between">
                <div class="fw-bold">{{ __("Categoría") }}</div>
                <div>{{ $product->category->name }}</div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between">
                <div class="fw-bold">{{ __("Color") }}</div>
                <div>{{ $product->color->name }}</div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between">
                <div class="fw-bold">{{ __("Tamaño") }}</div>
                <div>{{ $product->size->name }}</div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between">
                <div class="fw-bold">{{ __("Precio") }}</div>
                <div>{{ $product->price }} €</div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between">
                <div class="fw-bold">{{ __("Marca") }}</div>
                <div>{{ $product->brand->name }}</div>
            </div>
        </li>
    </ul>

    <!-- rating -->
    <div class="card-footer">
        <div class="d-flex justify-content-between">
            <div class="fw-bold">{{ __("Valoración") }}</div>
            <div>
                @for($i = 1; $i <= 5; $i++)
                    <i class="fas fa-star {{ $i <= $product->reviews->avg('rating') ? 'text-warning' : 'text-gray-300' }}"></i>
                @endfor
            </div>
        </div>
    </div>
</div>
