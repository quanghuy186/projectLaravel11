<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Do quang huy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
              <a class="nav-link" href=""
                >Trang chủ <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Giới thiệu</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-expanded="false">
                Thể loại
              </a>
              <div class="dropdown-menu">
                {{-- @foreach ($categories as $category)
                  <form>
                    <input type="hidden"  value="{{ $category->id }}" name="search_category">
                    <button type="submit" class="dropdown-item">{{ $category->name }}</button>
                  </form>
                @endforeach --}}
              </div>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Sản phẩm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Liên hệ</a>
            </li>
          </ul>
          {{-- search product --}}
          <form class="form-inline my-2 my-lg-0">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Tìm kiếm"
              aria-label="Search"
              name="keyword"
            />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
              Tìm kiếm
            </button>
          </form>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link text-primary" href="#">Giỏ hàng
                <i class="bi bi-bag"></i>
                {{-- {{ $totalCart }} --}}
                @yield('total')
              </a>
              
            </li>

            <li class="nav-item">
                <a class="nav-link text-primary" href="#"><i class="bi bi-person-circle"></i> {{ Auth::user()->name }}</a>
              </li>

            <li class="nav-item">
              <a class="nav-link text-primary" href="{{ route('auth.logout') }}">Đăng xuất</a>
            </li>
            
          </ul>
        </div>
      </nav>
    </div>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
