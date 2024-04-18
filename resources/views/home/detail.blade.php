@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ $product->url }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Tên sản phẩm : {{ $product->name }}</h5>
                  <p class="card-text" class="text-body-secondary">Giá tiền : {{ $product->price }}đ</p>
                  <p class="card-text" class="text-body-secondary">Mô tả : {{ $product->description }}</p>
                  <p class="card-text" class="text-body-secondary">Số lượng còn lại : {{ $product->quantity }}</p>
                </div>
              </div>
            </div>
          </div>
          <h3 class="mt-3">Các sản phẩm khác</h3>
          <hr>
    </div>

@endsection