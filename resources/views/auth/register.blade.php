<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

	<title>Sign Up | AdminKit Demo</title>

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Bắt đầu</h1>
							<p class="lead">
								Hãy đăng ký tài khoản để có trải nghiệm tốt nhất
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form method="POST" action="{{ route('auth.register') }}">
                                        @csrf
										<div class="mb-3">
											<label class="form-label">Họ và tên</label>
											<input class="form-control form-control-lg" type="text" name="name" placeholder="Nhập tên của bạn" />
										</div>
                                        
                                        @error('name')
                                            <div class="alert alert-danger mb-3">{{ $message }}</div>
                                        @enderror
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Nhập email của bạn" />
										</div>
                                        
                                        @error('email')
                                            <div class="alert alert-danger mb-3">{{ $message }}</div>
                                        @enderror
										<div class="mb-3">
											<label class="form-label">Mật khẩu</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Nhập mật khẩu" />
										</div>
                                        
                                        @error('password')
                                            <div class="alert alert-danger mb-3">{{ $message }}</div>
                                        @enderror
                                        <div class="mb-3">
											<label class="form-label">Nhập lại mật khẩu</label>
											<input class="form-control form-control-lg" type="password" name="cpassword" placeholder="Nhập lại mật khẩu" />
										</div>
                                        
                                        @error('cpassword')
                                            <div class="alert alert-danger mb-3">{{ $message }}</div>
                                        @enderror
										<div class="d-grid gap-2 mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Đăng ký</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="text-center mb-3">
							Đã có tài khoản ? <a href="{{ route('auth.login') }}">Đăng nhập</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="{{ asset('js/app2.js') }}"></script>

</body>

</html>