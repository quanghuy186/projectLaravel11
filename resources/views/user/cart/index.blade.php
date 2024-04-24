<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giỏ hàng</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <table class="table container">
    <thead>
      <tr class="text-center">
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Ảnh</th>
        <th scope="col">Giá</th>
        <th scope="col">Số lượng trong kho</th>
        <th scope="col">Số lượng đặt hàng</th>
        <th scope="col">Thực hiện</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cartItems as $cartItem)
        <tr class="text-center">
        <th  scope="row">{{ $cartItem->product->name }}</th>
        <td style="padding: 5px;">
            <img src="{{ $cartItem->product->url }}" alt="" style="width: 100px; height: 100px; object-fit: cover; border-radius: 5px;">
        </td>
        <td>{{ $cartItem->product->price }}đ</td>
        <td>{{ $cartItem->product->quantity }}</td>
        <td>
          <input class="w-25" type="number" value="{{ $cartItem->quantity }}">
        </td>
        <td>
          <a class="btn btn-success" href="">Đặt hàng</a>
          <a class="btn btn-primary" href="">Xem đánh giá</a>
          <a class="btn btn-danger" href="">Xóa</a>
        </td>
      </tr>
      @endforeach
      </tbody>
  </table>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
