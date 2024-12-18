<h1>Selamat datang di halaman, Dashboard</h1>
<?= $this->session->userdata('nama'); ?>
<br> <br>
<div class="card">
	<div class="d-flex align-items-start row">
		<div class="col-sm-7">
			<div class="card-body">
				<h5 class="card-title text-primary mb-3">Haloo Selamat Datang! 🎉</h5>
				<p class="mb-6">Dihalaman Dashboard<br>yang bisa mengakses apa sajaa</p>
			</div>
		</div>
		<div class="col-sm-5 text-center text-sm-left">
			<div class="card-body pb-0 px-0 px-md-6">
				<img src="../assets/sneat/man-with-laptop.png" height="175" class="scaleX-n1-rtl" alt="View Badge User">
			</div>
		</div>
	</div>
</div>
<br>
<div class="col-md-6 grid-margin transparent">
	<div class="row">
		<div class="col-md-6 mb-4 stretch-card transparent">
			<div class="card card-tale">
				<div class="card-body">
					<p class="btn btn-sm ">Total User</p>
					<p class="fs-30 mb-2"><?= $jumlah_user ?></p>
				</div>
			</div>
		</div>
		<div class="col-md-6 mb-4 stretch-card transparent">
			<div class="card card-dark-blue">
				<div class="card-body">
					<p class="btn btn-sm ">Total Konten</p>
					<p class="fs-30 mb-2"><?= $jumlah_konten ?></p>
				</div>
			</div>
  </div> 
