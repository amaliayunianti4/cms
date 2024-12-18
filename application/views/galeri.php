<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?= $judul?></title>
	<meta charset="UTF-8">
	<meta name="description" content="Boto Photo Studio HTML Template">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?= base_url('assets/boto')?>/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?= base_url('assets/boto')?>/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?= base_url('assets/boto')?>/css/slicknav.min.css" />
	<link rel="stylesheet" href="<?= base_url('assets/boto')?>/css/fresco.css" />

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="<?= base_url('assets/boto')?>/css/style.css" />

	<!-- Custom Styles -->
	<style>
		.portfolio-item img {
			transition: transform 0.3s ease;
			cursor: pointer;
		}

		.portfolio-item img.animate {
			transform: scale(1.2);
		}
	</style>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4 col-md-3 order-2 order-sm-1">
					<div class="header__social">
						<a href="<?= $konfig->facebook;?>"><i class="fa fa-facebook"></i></a>
						<a href="<?= $konfig->instagram;?>"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
				<div class="col-sm-4 col-md-6 order-1  order-md-2 text-center">
					<a href="./index.html" class="site-logo">
						<h2 class="mb-4 ">PHOTO</h2>
					</a>
				</div>
				<div class="col-sm-4 col-md-3 order-3 order-sm-3">
				</div>
			</div>
			<nav class="main__menu">
				<ul class="nav__menu">
					<li><a href="<?= base_url() ?>">Home</a></li>
					<li><a href="<?= base_url('home/galeri') ?>">Gallery</a></li>
					<?php foreach ($kategori as $kate) { ?>
					<li><a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>">
							<?= $kate['nama_kategori'] ?>
						</a>
						<?php } ?>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header Section end -->

	<!-- About Page -->
	<div class="gallery__page">
		<div class="gallery__warp">
			<div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out"
				data-aos-duration="500">
				<?php $no=1; foreach ($galeri as $aa) {?>
				<div class="col-lg-4 col-md-6 filter-app">
					<div class="portfolio-item">
						<img src="<?= base_url('assets/upload/galeri/'.$aa['foto'])?>" class="img-fluid clickable" alt="">
					</div>
					<div class="portfolio-info">
						<h3><a href="<?= base_url('assets/upload/galeri/'.$aa['foto'])?>"
						data-gall="portfolioGallery" class="venobox" title="App 1" style=""></a></h3>
						<img class="img-fluid"
						src="<?= isset($kate['foto']) ? base_url('assets/upload/galeri/'.$kate['foto']) : base_url('assets/upload/default.jpg'); ?>"
						alt="">
					</div>
				</div>
				<?php $no++; } ?>
			</div>
		</div>
	</div>
	<!-- About Page end -->

	<!-- Footer Section end -->

	<!-- Search Begin -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search End -->

	<!--====== Javascripts & Jquery ======-->
	<script src="<?= base_url('assets/boto')?>/js/vendor/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url('assets/boto')?>/js/jquery.slicknav.min.js"></script>
	<script src="<?= base_url('assets/boto')?>/js/slick.min.js"></script>
	<script src="<?= base_url('assets/boto')?>/js/fresco.min.js"></script>
	<script src="<?= base_url('assets/boto')?>/js/main.js"></script>
	<script>
		// Add click animation effect to images
		document.querySelectorAll('.clickable').forEach(image => {
			image.addEventListener('click', () => {
				image.classList.add('animate');
				setTimeout(() => image.classList.remove('animate'), 300); // Remove class after animation
			});
		});
	</script>
	<script>
		// Zoom feature logic
		$(document).ready(function () {
			$(".zoomable").click(function () {
				const imgSrc = $(this).attr("src"); // Get the image source
				$(".fullscreen-overlay img").attr("src", imgSrc); // Set image in overlay
				$(".fullscreen-overlay").fadeIn(); // Show overlay
			});

			// Close overlay when clicked
			$(".fullscreen-overlay").click(function () {
				$(this).fadeOut();
			});
		});
	</script>
</body>

</html>
