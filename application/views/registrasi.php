<!DOCTYPE html>
<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default"
	data-assets-path="<?= site_url('assets/sneat/') ?>/assets/" data-template="vertical-menu-template-free"
	data-style="light">

<head>
	<meta charset="utf-8" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
	<title> Registration </title>
	<meta name="description"
		content="Most Powerful &amp; Comprehensive Bootstrap 5 Admin Dashboard built for developers!" />
	<meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
	<link rel="canonical" href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/">
	<link rel="icon" type="image/x-icon" href="<?= site_url('assets/sneat/') ?>/assets/img/favicon/favicon.ico" />
	<link rel="stylesheet" href="<?= site_url('assets/sneat/') ?>/assets/vendor/fonts/boxicons.css" />
	<link rel="stylesheet" href="<?= site_url('assets/sneat/') ?>/assets/vendor/css/core.css"
		class="template-customizer-core-css" />
	<link rel="stylesheet" href="<?= site_url('assets/sneat/') ?>/assets/vendor/css/theme-default.css"
		class="template-customizer-theme-css" />
	<link rel="stylesheet" href="<?= site_url('assets/sneat/') ?>/assets/css/demo.css" />
	<link rel="stylesheet"
		href="<?= site_url('assets/sneat/') ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
	<link rel="stylesheet" href="<?= site_url('assets/sneat/') ?>/assets/vendor/css/pages/page-auth.css">
	<script src="<?= site_url('assets/sneat/') ?>/assets/vendor/js/helpers.js"></script>
	<script src="<?= site_url('assets/sneat/') ?>/assets/js/config.js"></script>
</head>

<body>
	<div class="container-xxl">
		<div class="authentication-wrapper authentication-basic container-p-y">
			<div class="authentication-inner">
				<!-- Register -->
				<div class="card px-sm-6 px-0">
					<div class="card-body">
						<h4 class="mb-2">Buat Akun Baru! 🚀</h4>
						<form class="mb-3" action="<?= base_url('Registrasi/registrasi') ?>" method="POST">
							<div class="mb-3 form-password-toggle">
								<label for="password" class="form-label">Name</label>
								<input type="name" class="form-control" name="nama" placeholder="Enter your name"
									required autofocus>
							</div>
							<div class="mb-3">
								<label for="username" class="form-label">Username</label>
								<input type="text" class="form-control" name="username"
									placeholder="Enter your username" required>
							</div>
							<div class="mb-3 form-password-toggle">
								<label for="confirm_password" class="form-label">Password</label>
								<input type="password" class="form-control" name="password"
									placeholder="Enter your password" required>
								<div class="modal-body">
								</div>
							</div>
							<div class="mb-3">
								<button class="btn btn-primary d-grid w-100">Registrasi</button>
							</div>
						</form>
						<p class="text-center">
							<span>Sudah punya akun?</span><br>
							<a href="<?= base_url('auth/login') ?>">
								<span>Klik di sini!</span>
							</a>
						</p>
					</div>
				</div>
				<!-- /Register -->
			</div>
		</div>
	</div>
	<script src="<?= site_url('assets/sneat/') ?>/assets/vendor/libs/jquery/jquery.js"></script>
	<script src="<?= site_url('assets/sneat/') ?>/assets/vendor/libs/popper/popper.js"></script>
	<script src="<?= site_url('assets/sneat/') ?>/assets/vendor/js/bootstrap.js"></script>
	<script src="<?= site_url('assets/sneat/') ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="<?= site_url('assets/sneat/') ?>/assets/vendor/js/menu.js"></script>
	<script src="<?= site_url('assets/sneat/') ?>/assets/js/main.js"></script>
</body>

</html>
