<div class="row">
    @forelse ($products as $product)
        <div
            wire:key="product-{{ $product->id }}"
            class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3"
        >
            <x-product-card :product="$product" />
        </div>
    @empty
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Ups!</strong> There are no products with these filters.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforelse

    <div class="col-12">
        {{ $products->links() }}
    </div>
</div>
