@extends('templates.layout')
@section('content')
<div class="col-12">
  <div class="card shadow-sm mt-4">
    <div class="card-body text-center py-5">
      <h1 class="mb-3">Welcome</h1>
      <p class="lead mb-4">Quickly create a new order or browse products.</p>
      <a href="{{ url('order') }}" class="btn btn-success btn-lg">
        Go to Order
      </a>
    </div>
  </div>
</div>
@endsection

@push('script')

@endpush
