<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 4 meta tags must come first in the head; any other head content must come after these tags -->

	<!-- Title -->
	<title> DUOR </title>

	<!-- Favicon -->
	<link rel="icon" href="<?= Base_url('assets/original')?>/img/core-img/favicon.ico">

	<!-- Style CSS -->
	<link rel="stylesheet" href="<?= Base_url('assets/original')?>/style.css">

</head>

<body>
	<!-- Preloader -->
	<div id="preloader">
		<div class="preload-content">
			<div id="original-load"></div>
		</div>
	</div>

	<!-- ##### Header Area Start ##### -->
	<header class="header-area">

		<!-- Top Header Area -->
		<div class="container ">
			<div class="row h-100 align-items-center">
				<!-- Breaking News Area -->
				<div class="col-12 col-sm-8">
					<div class="breaking-news-area">
						<div id="breakingNewsTicker" class="ticker">
							<ul>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>

		<!-- Logo Area -->
		<div class="logo-area text-center">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col-12">
						<a href="index.html" class="original-logo"><img
								src="<?= Base_url('assets/Blogge')?>/img/bg-img/duor1.jpg" alt=""></a>
					</div>
				</div>
			</div>
		</div>

		<!-- Nav Area -->
		<div class="original-nav-area" id="stickyNav">
			<div class="classy-nav-container breakpoint-off">
				<div class="container">
					<!-- Classy Menu -->
					<nav class="classy-navbar justify-content-between">
				</div>
				</nav>
			</div>
		</div>
		</div>
	</header>
	<!-- ##### Header Area End ##### -->

	<!-- ##### Breadcumb Area Start ##### -->

	<div class="container ">
		<div class="d-flex">
			<p class="mr-2"><i class="fa fa-user text-primary"></i><?= $duor->judul; ?> </p>
			<p class="mr-2">
				<i class="fa fa-user text-primary"></i><?= $duor->id_kategori; ?> </p>
				
		</div>
	</div>

	<!-- ##### Breadcumb Area End ##### -->

	<!-- ##### Blog Wrapper Start ##### -->
	<div class="blog-wrapper  clearfix">
		<div class="container">
			<div class="row ">
				<!-- Single Blog Area -->
				<div class="col-12 col-lg-4">
					<div class="single-blog-area clearfix mb-100">
						<!-- Blog Content -->
						
						<div class="single-blog-content">
							<div class="line"></div>
							<h5><?= $duor->judul; ?> </h5>
							<p> <?= $duor->keterangan; ?> </p>
							<p class="mb-3">
						</div>
						
					</div>
				</div>
				<!-- Single Blog Area -->
				<div class="col-12 col-lg-4">
					<div class="single-blog-area clearfix mb-100">
						<!-- Blog Content -->
						<div class="single-blog-content">
							<p class="mb-3">
						</div>
					</div>
				</div>
				<!-- Single Blog Area -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="single-catagory-area clearfix mb-100">
						<img src="<?= Base_url('assets/upload/konten/'.$duor->foto)?>">
						<div>
							<br>
							<a href="<?= base_url('home')?>" type="button" class="btn btn-outline-secondary">BACK
								HOME</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ##### Blog Wrapper End ##### -->

	
			<div class="instagram-feed-area">
				<div class="container">
					<div class="row">
						<div style="color: white;">
							<div class="insta-title">
								<h5>Follow us @Duor.Coffee</h5>
							</div>
						</div>
					</div>
				</div>


				<!-- jQuery (Necessary for All JavaScript Plugins) -->
				<script src="<?= Base_url('assets/original')?>/js/jquery/jquery-2.2.4.min.js"></script>
				<!-- Popper js -->
				<script src="<?= Base_url('assets/original')?>/js/popper.min.js"></script>
				<!-- Bootstrap js -->
				<script src="<?= Base_url('assets/original')?>/js/bootstrap.min.js"></script>
				<!-- Plugins js -->
				<script src="<?= Base_url('assets/original')?>/js/plugins.js"></script>
				<!-- Active js -->
				<script src="<?= Base_url('assets/original')?>/js/active.js"></script>

</body>

</html>