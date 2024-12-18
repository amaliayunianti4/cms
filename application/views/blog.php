<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="utf-8" />
	<title><?= $judul; ?></title>

	<!--Meta For No Index-->
	<meta name="robots" content="noindex, Nofollow, Noimageindex">

	<!-- mobile responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Theme Stylesheet -->
	<link href="<?= base_url('assets/Blogge/') ?>/css/style.css" rel="stylesheet" />

	<!--Favicon-->
	<link rel="shortcut icon" href="<?= base_url('assets/Blogge/') ?>images/favicon.svg" type="image/x-icon" />
	<link rel="icon" href="<?= base_url('assets/Blogge/') ?>images/favicon.svg" type="image/x-icon" />
</head>

<body>

	<!-- Navbar Start -->
	<div class="container-fluid bg-light position-relative shadow">
		<nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
			<a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
				<i class="flaticon-043-teddy-bear"></i>
				<span class="text-primary"><?= $konfig->judul_website; ?></span>
			</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
				<div class="navbar-nav font-weight-bold mx-auto py-0">
					<a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
					<a href="<?= base_url('home/galeri') ?>" class="nav-item nav-link">Gallery</a>
					<?php foreach ($kategori as $kate) { ?>
					<a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>"
						class="nav-item nav-link"><?= $kate['nama_kategori'] ?></a>
					<?php } ?>
				</div>
				<a href="<?= base_url('auth') ?>" class="btn btn-primary px-4">Login</a>
			</div>
		</nav>
	</div>
	<!-- Navbar End -->

	<section class="featured">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<article class="featured-post">
						<div class="featured-post-content">
							<div class="featured-post-author">
								<img src="<?= base_url('assets/Blogge/') ?>images/about/logo_duor.jpeg" alt="author" />
								<p>Duor <span>Coffee</span></p>
							</div>
							<a href="single-blog.html" class="featured-post-title">
								Mau yang coffee aesthetic ???
							</a>
							<ul class="featured-post-meta">
								<li>
									<i class="fa fa-mapp"></i>
									Duor coffee dongs😋
								</li>
							</ul>
						</div>
						<div class="featured-post-thumb">
							<img src="<?= base_url('assets/Blogge/') ?>images/profil_duor.jpeg" alt="feature-post-thumb" />
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

	<!-- Blog Start -->
	<div class="container-fluid pt-5">
		<div class="container">
			<div class="text-center pb-2">
				<p class="section-title px-5">
					<span class="px-2">Welcom to Duor Coffee</span>
				</p>
				<h1 class="mb-4">Menu Duor Coffee</h1>
			</div>
			<div class="col-12 col-sm-2">
				<div class="top-social-area">
					<form action="<?= base_url('home/cari') ?>" method="post" class="form-inline my-2 my-lg-0">
						<input id="searchInput" type="text" name="judul" class="form-control mr-2" placeholder="Cari Artikel..."
							required>
					</form>
				</div>
			</div>
			<br>
			<div class="row pb-3">
			<?php 
						foreach ($konten as $uu) { ?>
				<div class="col-lg-4 mb-4">
					<div class="card border-0 shadow-sm mb-2">
						<img class="card-img-top mb-2" src="<?= base_url('assets/upload/konten/' . $uu['foto']) ?>" />
						<div class="card-body bg-light text-center p-4">
							<h4 class="searchable"><?= $uu['judul'] ?></h4>
							<div class="d-flex justify-content-center mb-3">
								<small class="mr-3"><i class="fa fa-user text-primary"></i> <?= $uu['nama'] ?></small>
								<small class="mr-3"><i class="fa fa-folder text-primary"></i> <?= $uu['nama_kategori'] ?></small>
							</div>
							<a href="<?= base_url('home/artikel/' . $uu['slug']) ?>" class="btn btn-primary px-4 mx-auto my-2">Baca
								Selengkapnya</a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="d-flex justify-content-center mb-10 mt-30">
	</div>
</div>

	<section class="instagram">
		<a href="<?= base_url()?>">
			<a href="<?= $konfig->instagram;?>"><i class="fa fa-instagram"></i></a>
		</a>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="instagram-item">
						<div class="instagram-item-thum">
							<img src="<?= base_url('assets/Blogge/') ?>images/blog/duor1.jpg" alt="image">
						</div>
						<div class="instagram-item-thum">
							<img src="<?= base_url('assets/Blogge/') ?>images/blog/duor7.jpeg" alt="image">
						</div>
						<div class="instagram-item-thum">
							<img src="<?= base_url('assets/Blogge/') ?>images/blog/karpet_duor.jpeg" alt="image">
						</div>
						<div class="instagram-item-thum">
							<img src="<?= base_url('assets/Blogge/') ?>images/blog/duor4.jpg" alt="image">
						</div>
						<div class="instagram-item-thum">
							<img src="<?= base_url('assets/Blogge/') ?>images/blog/duor10.jpeg" alt="image">
						</div>
						<div class="instagram-item-thum">
							<img src="<?= base_url('assets/Blogge/') ?>images/blog/duor5.jpg" alt="image">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 mx-auto text-center">
					<div class="footer-logo">
						<h3 class="text-primary mb-4">DUOR COFFEE</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 mx-auto">
					<div class="footer-nav">
						<ul class="navbar-nav">
							<div class="d-flex flex-column justify-content-start">
								<a class="text-black mb-2" href="<?= base_url() ?>"><i class="fa fa-angle-right mr-2"></i>Home</a>
								<?php foreach ($kategori as $kate) { ?>
								<a class="text-black mb-2" href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>">
									<i class="fa fa-angle-right mr-2"></i>
									<?= $kate['nama_kategori'] ?></a>
								<?php } ?>
							</div>
					</div>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 mx-auto">
				<div class="sociale-icon">
					<ul>
						<li>
							<a href="<?= $konfig->facebook;?>"><i class="fa fa-facebook"></i></a>
						</li>
						<li>
							<a href="<?= $konfig->instagram; ?>"><i class="fa fa-instagram"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
			<div class="row pt-5">
				<div class="col-lg-4 col-md-6 mb-5">
					<a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
						style="font-size: 40px; line-height: 40px">
						<i class="flaticon-043-teddy-bear"></i>
						<span class="text-primary"><?= $konfig->judul_website; ?></span>
					</a>
					<p class="text-white"> <?= $konfig->profil_website; ?>
					</p>
					<div class="d-flex justify-content-start mt-4">
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-5">
					<h3 class="text-primary mb-4">Contact us</h3>
					<div class="d-flex">
						<h4 class="fa text-primary"></h4>
						<div class="pl-3">
							<h5 class="text-white">Alamat</h5>
							<p class="text-white"><?= $konfig->alamat; ?></p>
						</div>
					</div>
					<div class="d-flex">
						<h4 class="fa fa-envelope text-primary"></h4>
						<div class="pl-3">
							<h5 class="text-white">Email</h5>
							<p class="text-white"> <?= $konfig->email; ?></p>
						</div>
					</div>
					<div class="d-flex">
						<h4 class="fa text-primary"></h4>
						<div class="pl-3">
							<h5 class="text-white">Phone</h5>
							<p class="text-white">+<?= $konfig->no_wa; ?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-5">
					<h3 class="text-primary mb-4">Quick Links</h3>
					<div class="d-flex flex-column justify-content-start">
						<a class="text-white mb-2" href="<?= base_url() ?>"><i class="fa fa-angle-right mr-2"></i>Home</a>
						<?php foreach ($kategori as $kate) { ?>
						<a class="text-white mb-2" href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>">
							<i class="fa fa-angle-right mr-2"></i>
							<?= $kate['nama_kategori'] ?></a>
						<?php } ?>
					</div>
				</div>
			</div>
			<div><a class="justify-center flex-1 text-sm btn outline-primary with-icon" title="Lokasi"
					href="https://maps.app.goo.gl/XvQCboefRUtMgYiYA?g_st=iw" target="_blank">
					<i class="mr-2 bx bx-map"></i>
					Lihat Lokasi
				</a></div>
        <br>
        <div><button class="justify-center flex-1 text-sm btn outline-primary with-icon" type="submit" class="boxed-btn" > <a href="https://wa.me/+6282329399940?text=Haloo,silahkan kirim pesan disini!!">PLACE ORDER</a></button>
			<div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;">
				<p class="m-0 text-center text-white">
					&copy;
					<a class="text-primary font-weight-bold" href="#"><?= $konfig->judul_website; ?></a>.
					All Rights Reserved.
				</p>
			</div>
		</div>
		<!-- Footer End -->

		<!-- Google Map -->
		<script
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9rV6yesIygoVKTD6QLf_iCa9eiIIHqZ0&libraries=geometry">
		</script>
		<!-- Vendor JS -->
		<script src="<?= base_url('assets/Blogge/') ?>vendor/jQuery/jquery.min.js"></script>
		<script src="<?= base_url('assets/Blogge/') ?>vendor/bootstrap/bootstrap.min.js"></script>
		<script src="<?= base_url('assets/Blogge/') ?>vendor/slick/slick.min.js"></script>
		<script src="<?= base_url('assets/Blogge/') ?>vendor/g-map/gmap.js"></script>
		<!-- Main JS -->
		<script src="js/script.js"></script>
		<script>
           // Ambil elemen input pencarian dan elemen-elemen yang dapat dicari
const searchInput = document.getElementById('searchInput');
const searchableItems = document.querySelectorAll('.searchable');
const rowContainer = document.querySelector('.row.pb-3'); // Container hasil pencarian

// Tambahkan elemen untuk pesan "Artikel tidak ditemukan"
let noResultsMessage = document.createElement('div');
noResultsMessage.textContent = 'Sorry Artikel Tidak Ditemukan.';
noResultsMessage.style.display = 'none';
noResultsMessage.style.color = 'black';
noResultsMessage.style.textAlign = 'center';
noResultsMessage.style.marginTop = '20px'; 
rowContainer.appendChild(noResultsMessage);

// Event listener untuk pencarian
searchInput.addEventListener('input', function() {
    const filter = searchInput.value.toLowerCase(); // Ubah teks input menjadi huruf kecil
    let hasResults = false; // Indikator untuk hasil pencarian

    searchableItems.forEach(item => {
        const text = item.textContent.toLowerCase(); // Ambil teks elemen dan ubah menjadi huruf kecil
        const parentBox = item.closest('.col-lg-4'); // Cari elemen container (col-lg-4)
        if (text.includes(filter)) {
            parentBox.style.display = ''; // Tampilkan jika cocok
            hasResults = true;
        } else {
            parentBox.style.display = 'none'; // Sembunyikan jika tidak cocok
        }
    });

    // Tampilkan atau sembunyikan pesan "Artikel tidak ditemukan."
    if (!hasResults) {
        noResultsMessage.style.display = 'block';
    } else {
        noResultsMessage.style.display = 'none';
    }
});
</script>
</body>
  
</html>
