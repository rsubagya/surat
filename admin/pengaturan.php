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
			require '../sections/navbar.php';
		?>
		<!-- END NAVBAR -->

		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			 <div class="sidebar-scroll">
				<nav>
					
	<ul class="nav">
					<li><a href="index.php" class=""><i class="lnr lnr-home"></i> <span>Beranda</span></a></li>

					<li><a href="lihat-surat-masuk.php" class=""><i class="fa fa-envelope"></i> <span>Surat Masuk</span></a></li>

					<li><a href="lihat-surat-keluar.php" class=""><i class="fa fa-paper-plane-o"></i> <span>Surat Keluar</span></a></li>

			

			<li><a href="disposisi.php" class=""><i class="lnr lnr-location"></i> <span>Disposisi</span></a></li>

			<!-- <li><a href="grafik.php" class=""><i class="lnr lnr-chart-bars"></i> <span>Grafik</span></a></li> -->


			<li>
				<a href="#subPages3" data-toggle="collapse" class="collapsed"><i class="glyphicon glyphicon-list-alt"></i> <span>Laporan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
				<div id="subPages3" class="collapse ">
					<ul class="nav">
													<li><a href="lap-surat-masuk.php" class=""><i class="fa fa-envelope"></i> <span>Surat Masuk</span></a></li>
													<li><a href="lap-surat-keluar.php" class=""><i class="fa fa-paper-plane-o"></i> <span>Surat Keluar</span></a></li>
											</ul>
				</div>
			</li>

							<!-- <li><a href="pemberitahuan.php" class=""><i class="lnr lnr-alarm"></i> <span>Pemberitahuan</span></a></li> -->

							

			<li>
				<a href="#subPages4" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>Pengguna</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
				<div id="subPages4" class="collapse ">
					<ul class="nav">
													<li><a href="admin.php" class=""><i class="fa fa-user"></i> <span>Admin</span></a></li>
													<li><a href="pegawai.php" class=""><i class="fa fa-user"></i> <span>Pegawai</span></a></li>
													<li><a href="pimpinan.php" class=""><i class="fa fa-user"></i> <span>Pimpinan</span></a></li>
											</ul>
				</div>
			</li>

							<li><a href="pengaturan.php" class="active"><i class="lnr lnr-cog"></i> <span>Pengaturan</span></a></li>

							<li><a href="javascript:;" class="" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i> <span>Keluar</span></li></a>
	</ul>				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->

		<!-- MAIN -->
		<div class="main">

			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
<h3 class="page-title">Pengaturan</h3>

<div class="row">
	<div class="col-md-12">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Ubah Password</h3>
			</div>
			<div class="panel-body">
				<?php 
				if(isset($_GET['pesan'])){
					$pesan=mysql_real_escape_string($_GET['pesan']);
					if($pesan=="gagal"){
						echo "<div class='alert alert-danger'>Password gagal di ganti !!     Periksa Kembali Password yang anda masukkan !!</div>";
					}else if($pesan=="tdksama"){
						echo "<div class='alert alert-warning'>Password yang anda masukkan tidak sesuai  !!     silahkan ulangi !! </div>";
					}else if($pesan=="oke"){
						echo "<div class='alert alert-success'>Password yang anda masukkan tidak sesuai  !!     silahkan ulangi !! </div>";
					}
				}
				?>

				<br/>
				<div class="col-md-5 col-md-offset-3">
					<form action="ganti_pass_act.php" method="post">
						<div class="form-group">
							<input name="user" type="hidden" value="<?php echo $_SESSION['uname']; ?>">
						</div>
						<div class="form-group">
							<label>Password Lama</label>
							<input name="lama" type="password" class="form-control" placeholder="Password Lama ..">
						</div>
						<div class="form-group">
							<label>Password Baru</label>
							<input name="baru" type="password" class="form-control" placeholder="Password Baru ..">
						</div>
						<div class="form-group">
							<label>Ulangi Password</label>
							<input name="ulang" type="password" class="form-control" placeholder="Ulangi Password ..">
						</div>	
						<div class="form-group">
							<label></label>
							<input type="submit" class="btn btn-info" value="Simpan">
							<input type="reset" class="btn btn-danger" value="reset">
						</div>																	
					</form>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Ubah Foto</h3>
			</div>
			<div class="panel-body">
				<?php 
				if(isset($_GET['pesan'])){
					$pesan=mysql_real_escape_string($_GET['pesan']);
					if($pesan=="oke"){
						echo "<div class='alert alert-success'>Foto berhasil di ganti !! </div>";
					}
				}
				?>

				<br/>
				<div class="col-md-5 col-md-offset-3">
					<form action="ganti_foto_act.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<input name="user" type="hidden" value="<?php echo $_SESSION['username']; ?>">
						</div>
						<div class="form-group">
							<label>Foto</label>
							<input name="foto" type="file" class="form-control" placeholder="Password Lama ..">
						</div>		
						<div class="form-group">
							<label></label>
							<input type="submit" class="btn btn-info" value="Ganti">
							<input type="reset" class="btn btn-danger" value="reset">
						</div>																	
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		

<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Anda yakin mau keluar?</h4>
            </div>
            <div class="modal-footer">
              <a href="logout.php" class="btn btn-primary">Ya</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            </div>
          </div>
        </div>
      </div>


		
		<?php
			include '../sections/footer.php'; 
		?>