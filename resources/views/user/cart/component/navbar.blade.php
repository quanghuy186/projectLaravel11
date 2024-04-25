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
              <a class="nav-link" href="{{ route('user.index') }}"
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
            {{-- <li class="nav-item">
              <a class="nav-link text-primary" href="{{ route('cart.index') }}">Giỏ hàng
                <i class="bi bi-bag"></i>
              
                @yield('total')
              </a>
              
            </li> --}}

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