@extends('layouts.home')

@section('content')
    <div class="content">
      <div id="wraper">
        <div id="wp-content">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <h2 class="mt-3">Sản phẩm dành cho bạn</h2>
                <div class="list-product mt-3">
                  <div class="row">
                    @if ($products->total() > 0)
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
                    @else
                      <div class="container">
                        <p>Không tìm thây sản phẩm nào phù hợp</p>
                      </div>
                    @endif
                    
                  </div>
                </div>
              </div>
            </div>
            {{ $products->links() }}

          </div>
        </div>
        <!-- end wp-content -->
        <div id="footer" class="bg-secondary text-center text-warning mt-3">
          <div class="container">
            <div class="row">
              <div class="col-md-12">Do Quang Huy</div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection