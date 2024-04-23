@extends('layouts.user')

@section('total', $totalProductsInCart)

@section('content')

  {{-- slibar --}}
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <style>
            .carousel-item img {
                height: 600px; /* Điều chỉnh chiều cao của ảnh ở đây */
                object-fit: cover; /* Đảm bảo ảnh sẽ được căn chỉnh sao cho không bị biến dạng */
                width: auto; /* Đảm bảo ảnh chiếm hết chiều rộng của carousel */
                /* height: auto; */
            }


        .carousel-item img {
            filter: brightness(70%) contrast(120%);
        }
    </style>
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://laptopdell.com.vn/wp-content/uploads/2022/07/laptop_lenovo_legion_s7_8.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://vcdn-sohoa.vnecdn.net/2021/01/21/HP-Elite-Folio-Front-Left-Forw-6107-5267-1611217952.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://cdn.tgdd.vn/Files/2022/09/24/1471744/thumb.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>


  {{-- end slibar --}}
<div class="container">
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
                >Chi tiết</a
              >
              <form action="{{ route('cart.add') }}" method="POST" class="">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="quantity-input">
                    <input type="hidden" name="quantity" value="1" min="1">
                </div>
                <button type="submit" class="btn btn-outline-danger btn-sm mt-3">Thêm vào giỏ hàng</button>
            </form>
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
  
  <div class="content">
      <div id="wraper">
        <div id="wp-content">
          <div class="container">
            <div class="row">
              <div class="col-12">
            
            </div>
            {{ $products->links() }}
          </div>
        </div>
        <!-- end wp-content -->
       
          <footer class="mt-5">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-4 text-white pt-3"  style="background-color:#B92424">
                        <h4>Liên kết</h4>
                        <ul class="text-white">
                            <li><a  class="text-white" href="#">Trang chủ</a></li>
                            <li><a  class="text-white" href="#">Sản phẩm</a></li>
                            <li><a  class="text-white" href="#">Dịch vụ</a></li>
                            <li><a  class="text-white" href="#">Giới thiệu</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-white pt-3" style="background-color:#B92424">
                        <h4>Thông tin liên hệ</h4>
                        <p>Địa chỉ: Số nhà 123, Đường ABC, Thành phố XYZ</p>
                        <p>Email: contact@example.com</p>
                        <p>Điện thoại: +123456789</p>
                    </div>
                    <div class="col-md-4 text-white pt-3" style="background-color:#B92424">
                        <h4>Theo dõi chúng tôi</h4>
                        <ul class="social-icons">
                            <li><a class="text-white" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="text-white" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="text-white" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="text-white" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        
      </div>
    </div>
</div>
@endsection