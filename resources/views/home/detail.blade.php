@extends('layouts.user')

@section('total', $totalProductsInCart);

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

                  <form action="{{ route('cart.add') }}" method="POST" class="form-inline w-50">
                    @csrf
                    <label for="product_id">Số lượng</label>
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <div class="input-group mb-3">
                        <input type="number" name="quantity" class="form-control" value="1" min="1">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-outline-danger">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </form>
                </div>
              </div>
            </div>
          </div>
          
          <div class="mt-3">
            <div class="row">
              <div class="col-md mx-auto">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Xem các đánh giá khác</h5>
                    <div class="d-flex align-items-center mb-3">
                      <span class="text-warning">&#9733;</span>
                      <span class="text-warning">&#9733;</span>
                      <span class="text-warning">&#9733;</span>
                      <span class="text-warning">&#9733;</span>
                      <span class="text-warning">&#9733;</span>
                    </div>
                    <p class="card-text">5/5 - 5 đánh giá</p>
                    <a href="#" class="btn btn-primary">Viết đánh giá</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          

          <hr>
          <h3 class="mt-3">Các sản phẩm khác</h3>
          <div class="list-product mt-3">
            <div class="row">
                    @foreach ($products as $product)
                  <div class="col-md-3 col-sm-4 col-6 mb-3">
                <div class="product-item border py-2">
                  <div class="product-thumb">
                    <a href="{{ route('home.detail', $product->id) }}">
                      <img
                        class="img-fluid rounded-start" style="width:640px; height:120px"
                        src="{{ $product->url }}"
                        alt=""
                      />
                    </a>
                  </div>
                  <div class="product-info p-2 text-center">
                    <a class="product-title" href=""
                      >{{ $product->name }}</a
                    >
                    <div class="price-box">
                      <span class="current-price text-danger"
                        >{{ $product->price }}đ</span
                      >
                      <span class="old-price text-muted">80.000.000đ</span>
                    </div>
                    <a
                      href="{{ route('home.detail', $product->id) }}"
                      class="btn btn-outline-danger btn-sm mt-3"
                      class="add-to-cart"
                      >Xem thêm thông tin</a
                    >
                  </div>
                </div>
              </div>
              @endforeach
              
            </div>
          </div>
          {{ $products->links() }}
    </div>

@endsection