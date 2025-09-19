<div class="card border-0 shadow-sm h-100 position-relative product-card rounded-4">

    {{-- Imagen --}}
    <div class="position-relative overflow-hidden rounded-top">
        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}"
             class="img-fluid w-100 product-img">
    </div>

    {{-- Body --}}
    <div class="card-body">
        <small class="text-muted d-block mb-1">
            {{ $product->category->name }} · {{ $product->brand->name }}
        </small>

        <h6 class="fw-bold text-truncate">{{ $product->name }}</h6>

        {{-- Precio --}}
        <div class="d-flex align-items-center gap-2 mt-2">
            @if($product->discount_price ?? false)
                <span class="text-muted text-decoration-line-through small">
                    {{ $product->price }} €
                </span>
                <span class="fw-bold text-danger h5 mb-0">
                    {{ $product->discount_price }} €
                </span>
            @else
                <span class="fw-bold text-success h5 mb-0">
                    {{ $product->price }} €
                </span>
            @endif
        </div>

        {{-- Stock --}}

    </div>

    {{-- Footer con rating --}}
    <div class="card-footer bg-white border-0 pb-3 text-center">
        @for ($i = 1; $i <= 5; $i++)
            <i class="fas fa-star {{ $i <= $product->reviews->avg('rating') ? 'text-warning' : 'text-muted' }}"></i>
        @endfor
    </div>
</div>
