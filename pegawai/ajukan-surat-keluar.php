<!doctype html>
<html lang="en">
<head>
	<?php
	session_start();
	require 'cek.php';
	require 'config.php';
	require '../sections/header.php';
	?>

	<title>Dashboard | Siasy</title>
</head>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">

		<!-- NAVBAR -->
			<?php
				require 'navbar.php';
			?>
		<!-- END NAVBAR -->

		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			 <div class="sidebar-scroll">
				<nav>
					
	<ul class="nav">
					<li><a href="index.php" class=""><i class="lnr lnr-home"></i> <span>Beranda</span></a></li>

					
			<li>
				<a href="ajukan-surat-keluar.php" class="active"><i class="fa fa-paper-plane-o"></i> <span>Ajukan Surat Keluar</span></a>
			</li>

							<!-- <li><a href="pemberitahuan.php" class=""><i class="lnr lnr-alarm"></i> <span>Pemberitahuan</span></a></li> -->

							<li><a href="pengaturan.php" class=""><i class="lnr lnr-cog"></i> <span>Pengaturan</span></a></li>

							<li><a href="javascript:;" class="" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i> <span>Sign Out</span></li></a>
	</ul>				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->

		<!-- MAIN -->
		<div class="main">

			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
	<h3 class="page-title"><i class="fa fa-paper-plane-o"></i>  Ajukan Surat</h3>
	<div class="panel panel-headline demo-icons">
		<div class="panel-heading">


		</div>
			
			<div class="modal-body">




				<form action="ajk_srt_klr.php" method="post">


					<div class="form-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
				<select type="submit" name="pilihan" class="form-control">
				<option>Pilih Jenis Surat....</option>
				<option>Surat Izin Penelitian</option>
				<option>Surat Tugas</option>
				<option>Surat Pengantar</option>
				</select>
				<br>
					<!-- <div class="form-group">
						<label>Nama</label>
						<input name="nama" id="disableInput" type="text" class="form-control" placeholder="Nama .." disabled>
					</div>
					<div class="form-group">
						<label>Nip</label>
						<input name="nip" id="disableInput" type="text" class="form-control" placeholder="Nip .." disabled>
					</div> -->
					<div class="form-group">
						<label>Tanggal</label>
						<input name="tanggal" type="date" class="form-control" placeholder="Tanggal Surat Dikeluarkan ..">
					</div>
					<div class="form-group">
						<label>Tujuan</label>
						<input name="tujuan" type="text" class="form-control" placeholder="Instansi yang Dituju ..">
					</div>
					<div class="form-group">
						<label>Ringkasan</label>
						<input name="ringkasan" type="text" class="form-control" placeholder="Ringkasan ..">
					</div>													

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>

				</form>


		</div>


	</div>



				</div>
			</div>



<?php
include 'footer.php'; 
?>		

