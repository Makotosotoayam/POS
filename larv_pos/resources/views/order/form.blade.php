@foreach($categories as $category)
<h5 class="mb-2 mt-3 text-secondary">{{ $category->name }}</h5>
<div class="row g-2 item-product">
  @foreach ($category->product as $product)
  <div class="col-12 col-sm-6 col-md-4">
    <div class="card h-100 shadow-sm">
      <div class="card-body p-3 d-flex flex-column justify-content-between">
        <div class="d-flex justify-content-between align-items-start">
          <div class="product-info me-3">
            <h6 class="card-title mb-0" style="font-size: 0.95rem">{{ $product->name }}</h6>
          </div>
          <div class="product-price text-end">
            <h5 class="mb-0">Rp {{ number_format($product->price, 0, ',', '.') }}</h5>
          </div>
        </div>
        <input type="hidden" class="id_product" value="{{ $product->id }}" data-price="{{ $product->price }}">
        <div class="d-flex justify-content-end align-items-center mt-2">
          <button class="btn btn-sm btn-outline-primary btn-add" title="Tambah Ke Keranjang">
            <span class="small">Add</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endforeach
