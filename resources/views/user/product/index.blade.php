<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div id="wraper">
        <div id="header" class="bg-dark mb-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4  text-white text-bold py-2">
                        <a href=""><img src="images/logo.png" height="26px" alt=""></a>
                    </div>
                    <div class="col-md-8">
                        <a href="cart.html" class="py-2 d-block float-right text-danger">Giỏ hàng<span class="text-success">(5)</span></a>
                        <a href="{{ route('auth.login') }}" class="py-2 mx-3 d-block float-right text-danger">Đăng nhập</a>
                        <div class="btn-groups">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
        
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('auth.logout') }}">Log out</a>
                            </div>
                        </div>
                    </div>

                    
                </div>

                
            </div>
            
        </div>
        
        <!-- end header -->
        <div id="wp-content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Shop</h1>
                        <div class="list-product mt-3">
                            <div class="row">
                                <div class="col-md-3 col-sm-4 col-6 mb-3">
                                    <div class="product-item border py-2">
                                        <div class="product-thumb">
                                            <a href="">
                                                <img class="img-fluid" src="images/product-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-info p-2 text-center">
                                            <a class="product-title" href="">Lorem ipsum dolor sit amet</a>
                                            <div class="price-box">
                                                <span class="current-price text-danger">500.000đ</span>
                                                <span class="old-price text-muted">800.000đ</span>
                                            </div>
                                            <a href="" class="btn btn-outline-danger btn-sm mt-3" class="add-to-cart">Đặt Mua</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6 mb-3">
                                    <div class="product-item border py-2">
                                        <div class="product-thumb">
                                            <a href="">
                                                <img class="img-fluid" src="images/product-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-info p-2 text-center">
                                            <a class="product-title" href="">Lorem ipsum dolor sit amet</a>
                                            <div class="price-box">
                                                <span class="current-price text-danger">600.000đ</span>
                                                <span class="old-price text-muted">980.000đ</span>
                                            </div>
                                            <a href="" class="btn btn-outline-danger btn-sm mt-3" class="add-to-cart">Đặt Mua</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6 mb-3">
                                    <div class="product-item border py-2">
                                        <div class="product-thumb">
                                            <a href="">
                                                <img class="img-fluid" src="images/product-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-info p-2 text-center">
                                            <a class="product-title" href="">Lorem ipsum dolor sit amet</a>
                                            <div class="price-box">
                                                <span class="current-price text-danger">499.000đ</span>
                                                <span class="old-price text-muted">680.000đ</span>
                                            </div>
                                            <form action="{{ route('cart.add') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="cart_id" value="{{ $cart->id }}">
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="number" name="quantity" value="1"> <!-- Số lượng sản phẩm -->
                                                <button type="submit">Thêm vào giỏ hàng</button>
                                            </form>
                                            {{-- <a href="" class="btn btn-outline-danger btn-sm mt-3" class="add-to-cart">Đặt Mua</a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6 mb-3">
                                    <div class="product-item border py-2">
                                        <div class="product-thumb">
                                            <a href="">
                                                <img class="img-fluid" src="images/product-4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-info p-2 text-center">
                                            <a class="product-title" href="">Lorem ipsum dolor sit amet</a>
                                            <div class="price-box">
                                                <span class="current-price text-danger">589.000đ</span>
                                                <span class="old-price text-muted">880.000đ</span>
                                            </div>
                                            <a href="" class="btn btn-outline-danger btn-sm mt-3" class="add-to-cart">Đặt Mua</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6 mb-3">
                                    <div class="product-item border py-2">
                                        <div class="product-thumb">
                                            <a href="">
                                                <img class="img-fluid" src="images/product-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-info p-2 text-center">
                                            <a class="product-title" href="">Lorem ipsum dolor sit amet</a>
                                            <div class="price-box">
                                                <span class="current-price text-danger">399.000đ</span>
                                                <span class="old-price text-muted">800.000đ</span>
                                            </div>
                                            <a href="" class="btn btn-outline-danger btn-sm mt-3" class="add-to-cart">Đặt Mua</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6 mb-3">
                                    <div class="product-item border py-2">
                                        <div class="product-thumb">
                                            <a href="">
                                                <img class="img-fluid" src="images/product-4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-info p-2 text-center">
                                            <a class="product-title" href="">Lorem ipsum dolor sit amet</a>
                                            <div class="price-box">
                                                <span class="current-price text-danger">500.000đ</span>
                                                <span class="old-price text-muted">800.000đ</span>
                                            </div>
                                            <a href="" class="btn btn-outline-danger btn-sm mt-3" class="add-to-cart">Đặt Mua</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6 mb-3">
                                    <div class="product-item border py-2">
                                        <div class="product-thumb">
                                            <a href="">
                                                <img class="img-fluid" src="images/product-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-info p-2 text-center">
                                            <a class="product-title" href="">Lorem ipsum dolor sit amet</a>
                                            <div class="price-box">
                                                <span class="current-price text-danger">500.000đ</span>
                                                <span class="old-price text-muted">800.000đ</span>
                                            </div>
                                            <a href="" class="btn btn-outline-danger btn-sm mt-3" class="add-to-cart">Đặt Mua</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6 mb-3">
                                    <div class="product-item border py-2">
                                        <div class="product-thumb">
                                            <a href="">
                                                <img class="img-fluid" src="images/product-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-info p-2 text-center">
                                            <a class="product-title" href="">Lorem ipsum dolor sit amet</a>
                                            <div class="price-box">
                                                <span class="current-price text-danger">500.000đ</span>
                                                <span class="old-price text-muted">800.000đ</span>
                                            </div>
                                            <a href="" class="btn btn-outline-danger btn-sm mt-3" class="add-to-cart">Đặt Mua</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6 mb-3">
                                    <div class="product-item border py-2">
                                        <div class="product-thumb">
                                            <a href="">
                                                <img class="img-fluid" src="images/product-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-info p-2 text-center">
                                            <a class="product-title" href="">Lorem ipsum dolor sit amet</a>
                                            <div class="price-box">
                                                <span class="current-price text-danger">500.000đ</span>
                                                <span class="old-price text-muted">800.000đ</span>
                                            </div>
                                            <a href="" class="btn btn-outline-danger btn-sm mt-3" class="add-to-cart">Đặt Mua</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6 mb-3">
                                    <div class="product-item border py-2">
                                        <div class="product-thumb">
                                            <a href="">
                                                <img class="img-fluid" src="images/product-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-info p-2 text-center">
                                            <a class="product-title" href="">Lorem ipsum dolor sit amet</a>
                                            <div class="price-box">
                                                <span class="current-price text-danger">600.000đ</span>
                                                <span class="old-price text-muted">980.000đ</span>
                                            </div>
                                            <a href="" class="btn btn-outline-danger btn-sm mt-3" class="add-to-cart">Đặt Mua</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6 mb-3">
                                    <div class="product-item border py-2">
                                        <div class="product-thumb">
                                            <a href="">
                                                <img class="img-fluid" src="images/product-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-info p-2 text-center">
                                            <a class="product-title" href="">Lorem ipsum dolor sit amet</a>
                                            <div class="price-box">
                                                <span class="current-price text-danger">499.000đ</span>
                                                <span class="old-price text-muted">680.000đ</span>
                                            </div>
                                            <a href="" class="btn btn-outline-danger btn-sm mt-3" class="add-to-cart">Đặt Mua</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6 mb-3">
                                    <div class="product-item border py-2">
                                        <div class="product-thumb">
                                            <a href="">
                                                <img class="img-fluid" src="images/product-4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-info p-2 text-center">
                                            <a class="product-title" href="">Lorem ipsum dolor sit amet</a>
                                            <div class="price-box">
                                                <span class="current-price text-danger">589.000đ</span>
                                                <span class="old-price text-muted">880.000đ</span>
                                            </div>
                                            <a href="" class="btn btn-outline-danger btn-sm mt-3" class="add-to-cart">Đặt Mua</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6 mb-3">
                                    <div class="product-item border py-2">
                                        <div class="product-thumb">
                                            <a href="">
                                                <img class="img-fluid" src="images/product-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-info p-2 text-center">
                                            <a class="product-title" href="">Lorem ipsum dolor sit amet</a>
                                            <div class="price-box">
                                                <span class="current-price text-danger">399.000đ</span>
                                                <span class="old-price text-muted">800.000đ</span>
                                            </div>
                                            <a href="" class="btn btn-outline-danger btn-sm mt-3" class="add-to-cart">Đặt Mua</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6 mb-3">
                                    <div class="product-item border py-2">
                                        <div class="product-thumb">
                                            <a href="">
                                                <img class="img-fluid" src="images/product-4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-info p-2 text-center">
                                            <a class="product-title" href="">Lorem ipsum dolor sit amet</a>
                                            <div class="price-box">
                                                <span class="current-price text-danger">500.000đ</span>
                                                <span class="old-price text-muted">800.000đ</span>
                                            </div>
                                            <a href="" class="btn btn-outline-danger btn-sm mt-3" class="add-to-cart">Đặt Mua</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6 mb-3">
                                    <div class="product-item border py-2">
                                        <div class="product-thumb">
                                            <a href="">
                                                <img class="img-fluid" src="images/product-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-info p-2 text-center">
                                            <a class="product-title" href="">Lorem ipsum dolor sit amet</a>
                                            <div class="price-box">
                                                <span class="current-price text-danger">500.000đ</span>
                                                <span class="old-price text-muted">800.000đ</span>
                                            </div>
                                            <a href="" class="btn btn-outline-danger btn-sm mt-3" class="add-to-cart">Đặt Mua</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6 mb-3">
                                    <div class="product-item border py-2">
                                        <div class="product-thumb">
                                            <a href="">
                                                <img class="img-fluid" src="images/product-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-info p-2 text-center">
                                            <a class="product-title" href="">Lorem ipsum dolor sit amet</a>
                                            <div class="price-box">
                                                <span class="current-price text-danger">500.000đ</span>
                                                <span class="old-price text-muted">800.000đ</span>
                                            </div>
                                            <a href="" class="btn btn-outline-danger btn-sm mt-3" class="add-to-cart">Đặt Mua</a>
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
                    <div class="col-md-12">
                        UNITOP.VN - HỌC ĐỂ DẪN ĐẦU
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>