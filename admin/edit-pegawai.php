<!doctype html>
<html lang="en">
<head>
	<?php
	session_start();
	include 'cek.php';
	include 'config.php';
	include '../sections/header.php';
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

			<li><a href="grafik.php" class=""><i class="lnr lnr-chart-bars"></i> <span>Grafik</span></a></li>


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
				<a href="#subPages4" data-toggle="collapse" class="active"><i class="lnr lnr-user"></i> <span>Pengguna</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
				<div id="subPages4" class="active">
					<ul class="nav">
													<li><a href="admin.php" class=""><i class="fa fa-user"></i> <span>Admin</span></a></li>
													<li><a href="pegawai.php" class="active"><i class="fa fa-user"></i> <span>Pegawai</span></a></li>
													<li><a href="pimpinan.php" class=""><i class="fa fa-user"></i> <span>Pimpinan</span></a></li>
											</ul>
				</div>
			</li>

							<li><a href="pengaturan.php" class=""><i class="lnr lnr-cog"></i> <span>Pengaturan</span></a></li>

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
	<h3 class="page-title"><i class="fa fa-envelope"></i>  Pegawai</h3>

<a class="btn" href="pegawai.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id_adm=mysql_real_escape_string($_GET['id']);
$det=mysql_query("select * from user where id='$id_adm'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
?>					
	<form action="update-pegawai.php" method="post">
		<table class="table">
			<tr>
				<td><input type="hidden" class="form-control" name="id" value="<?php echo $d['id'] ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" class="form-control" name="nama" value="<?php echo $d['nama'] ?>"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" class="form-control" name="username" value="<?php echo $d['username'] ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" class="form-control" name="password" value="<?php echo $d['password'] ?>"></td>
			</tr>
			<tr>
				<td>Nip</td>
				<td><input type="text" class="form-control" name="nip" value="<?php echo $d['nip'] ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin'] ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" class="form-control" name="email" value="<?php echo $d['email'] ?>"></td>
			</tr>
			<tr>
				<td>Hp</td>
				<td><input type="text" class="form-control" name="hp" value="<?php echo $d['hp'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php 
}
?>
	

	
				</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->

<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
            <div class="modal-footer">
              <a href="logout.php" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>


		
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Puskesmas Harapan Raya</a>. All Rights Reserved.</p>
			</div>
	

	<?php
			include '../sections/footer.php'; 
		?>