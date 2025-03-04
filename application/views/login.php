<!DOCTYPE html>
<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default"
	data-assets-path="<?= site_url('assets/sneat/') ?>/assets/" data-template="vertical-menu-template-free"
	data-style="light">

<head>
	<meta charset="utf-8" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

	<title> Login</title>


	<meta name="description"
		content="Most Powerful &amp; Comprehensive Bootstrap 5 Admin Dashboard built for developers!" />
	<meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
	<!-- Canonical SEO -->
	<link rel="canonical" href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/">


	<!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
	<script>
		(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');

	</script>
	<!-- End Google Tag Manager -->

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="<?= site_url('assets/sneat/') ?>/assets/img/favicon/favicon.ico" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
		rel="stylesheet">


	<link rel="stylesheet" href="<?= site_url('assets/sneat/') ?>/assets/vendor/fonts/boxicons.css" />


	<!-- Core CSS -->
	<link rel="stylesheet" href="<?= site_url('assets/sneat/') ?>/assets/vendor/css/core.css"
		class="template-customizer-core-css" />
	<link rel="stylesheet" href="<?= site_url('assets/sneat/') ?>/assets/vendor/css/theme-default.css"
		class="template-customizer-theme-css" />
	<link rel="stylesheet" href="<?= site_url('assets/sneat/') ?>/assets/css/demo.css" />

	<!-- Vendors CSS -->
	<link rel="stylesheet"
		href="<?= site_url('assets/sneat/') ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />


	<!-- Page CSS -->
	<!-- Page -->
	<link rel="stylesheet" href="<?= site_url('assets/sneat/') ?>/assets/vendor/css/pages/page-auth.css">

	<!-- Helpers -->
	<script src="<?= site_url('assets/sneat/') ?>/assets/vendor/js/helpers.js"></script>
	<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
	<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
	<script src="<?= site_url('assets/sneat/') ?>/assets/js/config.js"></script>

</head>

<body>


	<!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
			style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<!-- Content -->

	<div class="container-xxl">
		<div class="authentication-wrapper authentication-basic container-p-y">
			<div class="authentication-inner">
				<!-- Register -->
				<div class="card px-sm-6 px-0">
					<div class="card-body">
						<h4 class="mb-1">Selamat Datang Di CMS! 👋</h4>
						<form class="mb-3" action="<?= base_url('auth/login')?>" method="POST">
							<div class="mb-3">
								<label for="email" class="form-label">Username</label>
								<input type="text" class="form-control" name="username"
									placeholder="Enter your username" autofocus>
							</div>
							<div class="mb-3 form-password-toggle">
								<label class="form-label" for="password">Password</label>
								<div class="input-group input-group-merge">
									<input type="password" class="form-control" name="password"
										placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
										aria-describedby="password" />
								</div>
							</div>
							<div class="mb-3">
								<button class="btn btn-primary d-grid w-100" type="submit">Login</button>
							</div>
							<div id="ngilang">
								<?= $this->session->flashdata('alert')?>
							</div>
							<p class="text-center">
								<span>Belum punya akun?</span>
								<a href="<?= base_url() ?>registrasi"><br>
									<span>Klik disini !</span>
								</a>
						</form>
					</div>
				</div>
				<!-- /Register -->
			</div>
		</div>
	</div>

	<!-- / Content -->


	<!-- Core JS -->
	<!-- build:js assets/vendor/js/core.js -->

	<script src="<?= site_url('assets/sneat/') ?>/assets/vendor/libs/jquery/jquery.js"></script>
	<script src="<?= site_url('assets/sneat/') ?>/assets/vendor/libs/popper/popper.js"></script>
	<script src="<?= site_url('assets/sneat/') ?>/assets/vendor/js/bootstrap.js"></script>
	<script src="<?= site_url('assets/sneat/') ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="<?= site_url('assets/sneat/') ?>/assets/vendor/js/menu.js"></script>

	<!-- endbuild -->

	<!-- Vendors JS -->



	<!-- Main JS -->
	<script src="<?= site_url('assets/sneat/') ?>/assets/js/main.js"></script>


	<!-- Page JS -->



	<!-- Place this tag before closing body tag for github widget button. -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>

</body>

</html>

<!-- beautify ignore:end -->
