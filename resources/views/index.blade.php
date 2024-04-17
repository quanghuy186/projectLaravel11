<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Do quang huy</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      .logo img {
        width: 120px;
      }
    </style>
  </head>
  <body>
    <div class="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo">
          <img src="{{ asset('images/elephpant.png') }}" alt="loi" />
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"
                >Trang chủ <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Giới thiệu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Danh mục</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sản phẩm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Liên hệ</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Tìm kiếm"
              aria-label="Search"
            />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
              Tìm kiếm
            </button>
          </form>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link text-primary" href="{{ route('auth.login') }}">Đăng nhập</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="{{ route('auth.register') }}">Đăng ký</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- end header -->

    <div class="content">
      <div id="wraper">
        <div id="wp-content">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <h2 class="mt-3">Sản phẩm dành cho bạn</h2>
                <div class="list-product mt-3">
                  <div class="row">
                    <div class="col-md-3 col-sm-4 col-6 mb-3">
                      <div class="product-item border py-2">
                        <div class="product-thumb">
                          <a href="">
                            <img
                              class="img-fluid"
                              src="images/product-1.jpg"
                              alt=""
                            />
                          </a>
                        </div>
                        <div class="product-info p-2 text-center">
                          <a class="product-title" href=""
                            >Lorem ipsum dolor sit amet</a
                          >
                          <div class="price-box">
                            <span class="current-price text-danger"
                              >500.000đ</span
                            >
                            <span class="old-price text-muted">800.000đ</span>
                          </div>
                          <a
                            href=""
                            class="btn btn-outline-danger btn-sm mt-3"
                            class="add-to-cart"
                            >Xem chi tiết</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6 mb-3">
                      <div class="product-item border py-2">
                        <div class="product-thumb">
                          <a href="">
                            <img
                              class="img-fluid"
                              src="images/product-2.jpg"
                              alt=""
                            />
                          </a>
                        </div>
                        <div class="product-info p-2 text-center">
                          <a class="product-title" href=""
                            >Lorem ipsum dolor sit amet</a
                          >
                          <div class="price-box">
                            <span class="current-price text-danger"
                              >600.000đ</span
                            >
                            <span class="old-price text-muted">980.000đ</span>
                          </div>
                          <a
                            href=""
                            class="btn btn-outline-danger btn-sm mt-3"
                            class="add-to-cart"
                            >Xem chi tiết</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6 mb-3">
                      <div class="product-item border py-2">
                        <div class="product-thumb">
                          <a href="">
                            <img
                              class="img-fluid"
                              src="images/product-3.jpg"
                              alt=""
                            />
                          </a>
                        </div>
                        <div class="product-info p-2 text-center">
                          <a class="product-title" href=""
                            >Lorem ipsum dolor sit amet</a
                          >
                          <div class="price-box">
                            <span class="current-price text-danger"
                              >499.000đ</span
                            >
                            <span class="old-price text-muted">680.000đ</span>
                          </div>
                          <a
                            href=""
                            class="btn btn-outline-danger btn-sm mt-3"
                            class="add-to-cart"
                            >Xem chi tiết</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6 mb-3">
                      <div class="product-item border py-2">
                        <div class="product-thumb">
                          <a href="">
                            <img
                              class="img-fluid"
                              src="images/product-4.jpg"
                              alt=""
                            />
                          </a>
                        </div>
                        <div class="product-info p-2 text-center">
                          <a class="product-title" href=""
                            >Lorem ipsum dolor sit amet</a
                          >
                          <div class="price-box">
                            <span class="current-price text-danger"
                              >589.000đ</span
                            >
                            <span class="old-price text-muted">880.000đ</span>
                          </div>
                          <a
                            href=""
                            class="btn btn-outline-danger btn-sm mt-3"
                            class="add-to-cart"
                            >Xem chi tiết</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6 mb-3">
                      <div class="product-item border py-2">
                        <div class="product-thumb">
                          <a href="">
                            <img
                              class="img-fluid"
                              src="images/product-3.jpg"
                              alt=""
                            />
                          </a>
                        </div>
                        <div class="product-info p-2 text-center">
                          <a class="product-title" href=""
                            >Lorem ipsum dolor sit amet</a
                          >
                          <div class="price-box">
                            <span class="current-price text-danger"
                              >399.000đ</span
                            >
                            <span class="old-price text-muted">800.000đ</span>
                          </div>
                          <a
                            href=""
                            class="btn btn-outline-danger btn-sm mt-3"
                            class="add-to-cart"
                            >Xem chi tiết</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6 mb-3">
                      <div class="product-item border py-2">
                        <div class="product-thumb">
                          <a href="">
                            <img
                              class="img-fluid"
                              src="images/product-4.jpg"
                              alt=""
                            />
                          </a>
                        </div>
                        <div class="product-info p-2 text-center">
                          <a class="product-title" href=""
                            >Lorem ipsum dolor sit amet</a
                          >
                          <div class="price-box">
                            <span class="current-price text-danger"
                              >500.000đ</span
                            >
                            <span class="old-price text-muted">800.000đ</span>
                          </div>
                          <a
                            href=""
                            class="btn btn-outline-danger btn-sm mt-3"
                            class="add-to-cart"
                            >Xem chi tiết</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6 mb-3">
                      <div class="product-item border py-2">
                        <div class="product-thumb">
                          <a href="">
                            <img
                              class="img-fluid"
                              src="images/product-1.jpg"
                              alt=""
                            />
                          </a>
                        </div>
                        <div class="product-info p-2 text-center">
                          <a class="product-title" href=""
                            >Lorem ipsum dolor sit amet</a
                          >
                          <div class="price-box">
                            <span class="current-price text-danger"
                              >500.000đ</span
                            >
                            <span class="old-price text-muted">800.000đ</span>
                          </div>
                          <a
                            href=""
                            class="btn btn-outline-danger btn-sm mt-3"
                            class="add-to-cart"
                            >Xem chi tiết</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6 mb-3">
                      <div class="product-item border py-2">
                        <div class="product-thumb">
                          <a href="">
                            <img
                              class="img-fluid"
                              src="images/product-2.jpg"
                              alt=""
                            />
                          </a>
                        </div>
                        <div class="product-info p-2 text-center">
                          <a class="product-title" href=""
                            >Lorem ipsum dolor sit amet</a
                          >
                          <div class="price-box">
                            <span class="current-price text-danger"
                              >500.000đ</span
                            >
                            <span class="old-price text-muted">800.000đ</span>
                          </div>
                          <a
                            href=""
                            class="btn btn-outline-danger btn-sm mt-3"
                            class="add-to-cart"
                            >Xem chi tiết</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
