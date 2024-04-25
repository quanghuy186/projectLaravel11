@extends('user.cart.component.header')

@section('title', 'Giỏ hàng')

@extends('user.cart.component.navbar')

@section('content')

<body>
  <table class="table container mt-5">
    <thead>
      <tr class="text-center">
        <th scope="col">#</th>
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
        <th  scope="row">
          <input type="checkbox" name="" id="">
        </th>
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
          <a href="{{ route('cart.delete', $cartItem->id) }}" class="btn btn-danger" href="">Xóa</a>
        </td>
      </tr>
      @endforeach
      </tbody>
  </table>

@endsection

@extends('user.cart.component.footer')