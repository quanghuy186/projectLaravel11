<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Giỏ hàng</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.3.2 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    />

    <!-- Bootstrap Icons CSS v1.11.3 -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />

    <style>
      /* CSS cho giao diện giỏ hàng */
      .main {
        padding: 20px;
      }
      .card {
        margin-bottom: 20px;
      }
      .card-img {
        width: 150px; /* Độ rộng hình ảnh */
        height: auto; /* Chiều cao tự động */
      }
      .card-body {
        display: flex; /* Hiển thị các phần tử con theo chiều ngang */
        align-items: center; /* Căn giữa các phần tử theo chiều dọc */
      }
    </style>
  </head>
  <body>
    <div class="main container">
      <div class="card w-100">
        <div class="card-body">
          <div class="col-md-4">
            <img src="{{ asset('images/product-2.jpg') }}" alt="..." class="img-fluid card-img" />
          </div>
          <div class="col-md-8">
              <input type="checkbox" name="" id="" />
            <h5 class="card-title">
              Tên: Laptop
            </h5>
            <p class="card-text">Mã: 001</p>
            <div class="input-group mb-3">
              <span class="input-group-text">Số lượng</span>
              <input type="number" class="form-control" min="1" value="10" />
            </div>
            <p class="card-text text-muted">Đơn giá: 500000đ</p>
            <!-- Nút xóa -->
            <button type="button" class="btn btn-danger">
              <i class="bi bi-trash"></i> Xóa khỏi giỏ hàng
            </button>
          </div>
        </div>
      </div>


      <h5>Tổng tiền: 1310349đ</h5>
    </div>

    <!-- Bootstrap JS và Popper.js -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
