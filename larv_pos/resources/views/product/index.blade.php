@extends('templates.layout')
@section('content')
@foreach($categories as $category)
<h2 class="mt-4 mb-4 text-primary">{{ $category->name }}</h2>
<div class="row g-4 item-product">
  @foreach ($category->product as $product)
  <div class="col-12 col-md-6">
    <div class="card shadow-sm mb-3">
      <div class="card-body py-4 px-4 d-flex justify-content-between align-items-center">
        <div class="product-info">
          <h5 class="card-title mb-0">{{ $product->name }}</h5>
        </div>
        <div class="product-price text-end">
          <input type="hidden" class="id_product" value="{{ $product->id }}">
          <h2 class="display-6 fw-normal mb-0">Rp. {{ number_format($product->price, 0, ',', '.')}}</h2>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endforeach
@endsection
