<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giỏ hàng</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
        @foreach ($cartItems as $item)
        {{-- @dd($item) --}}
        <div class="col-md-6 offset-md-3 mt-5">
            <div class="card">
              <img style="" src="{{ asset('images/product-3.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{$item->quantity }}</h5>
                <p class="card-text">
                  @if($item->product)
                      {{ $item->product->name }}
                      {{ $item['product']['id'] }}
                  @else
                      Sản phẩm không tồn tại
                  @endif
              </p>
                <p class="card-text">Số lượng: 
                    <input value="{{$item->quantity }}" type="number" class="form-group">
                </p>
                <p class="card-text">Mã sản phẩm: Mã sản phẩm của bạn</p>
                <a href="#" class="btn btn-primary">Thanh toán</a>
              </div>
            </div>
          </div>
        @endforeach
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
