<div class="row g-4">
    @forelse ($products as $product)
        <div wire:key="product-{{ $product->id }}" class="col-12 col-sm-6 col-md-4 col-lg-3">
            <x-product-card :product="$product" />
        </div>
    @empty
        <div class="col-12">
            <div class="alert alert-warning d-flex justify-content-between align-items-center" role="alert">
                <div>
                    <strong>Ups!</strong> There are not products availables with these filters. Try again!s
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        </div>
    @endforelse

    <div class="col-12">
        <div class="d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </div>
</div>
