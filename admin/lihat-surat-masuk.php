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

					<li><a href="lihat-surat-masuk.php" class="active"><i class="fa fa-envelope"></i> <span>Surat Masuk</span></a></li>

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
	<h3 class="page-title"><i class="fa fa-envelope"></i>  Surat Masuk</h3>
	<div class="panel panel-headline demo-icons">
		<div class="panel-heading">


		</div>
		<div class="panel-body">
		<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Surat</button>
		<br/>
		<br/>
		<br/>

		<div class="clearfix"></div>
		

		<div class="x_content">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

		<thead>
		<tr>
			<th>No</th>
			<th>ID</th>
			<th>Nomor Surat</th>
			<th>Asal Surat</th>
			<th>Tujuan Surat</th>
			<th>Tgl Diterima</th>
			<th>Perihal</th>
			<th>Opsi</th>
		</tr>
		</thead>
		<tbody>
			<?php
        		$sql = "SELECT * FROM surat_masuk";
       			$result = mysql_query($sql);
       			$no = 1;

       			if (mysql_num_rows($result) > 0){
       				while($row = mysql_fetch_assoc($result)){

       					echo "<tr> ";
       					echo "<td>$no</td>";
       					echo "<td><a href=\"det-srt-msk.php?id_surat=" .$row['id_surat']." \">".$row['id_surat']."</a></td>";
						echo "<td><a href=\"det-srt-msk.php?id_surat=" .$row['id_surat']." \">".$row['no_surat']."</a></td>";
						echo "<td>$row[asal_surat]</td>";
						echo "<td>$row[tujuan_surat]</td>";
						echo "<td>$row[tanggal_terima]</td>";
						echo "<td>$row[perihal_surat]</td>";
						echo "<td><a href='edit.php?id_surat=$row[id_surat]'><button type=\"button\" class=\"btn btn-warning btn-xs\"><i class=\"fa fa-edit\"></i> Edit</button></a>";
						echo "<a href='delete.php?id_surat=$row[id_surat]'><button type=\"button\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Hapus</button></a></td></tr>";

						$no++;

       				}

       			} else {
       				echo "0 results";
       			}

       			mysql_close();
			?>

			</tbody>
			</table>

		</div>
		</div>
	</div>

	

				</div>
			</div>
			<!-- END MAIN CONTENT -->

			<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Surat Masuk</h4>
			</div>
			<div class="modal-body">
				<form action="tmb_srt_msk_act.php" method="post">
					<div class="form-group">
						<label>Nomor</label>
						<input name="nomor" type="text" class="form-control" placeholder="Nomor Surat ..">
					</div>
					<div class="form-group">
						<label>Asal</label>
						<input name="asal" type="text" class="form-control" placeholder="Asal Surat ..">
					</div>
					<div class="form-group">
						<label>Tujuan</label>
						<input name="tujuan" type="text" class="form-control" placeholder="Tujuan Surat ..">
					</div>
					<div class="form-group">
						<label>Tanggal</label>
						<input name="tanggal" type="date" class="form-control" placeholder="Tanggal Diterima">
					</div>	
					<div class="form-group">
						<label>Perihal</label>
						<input name="perihal" type="text" class="form-control" placeholder="Perihal Surat">
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
		<!-- END MAIN -->
		<div class="clearfix"></div>
		

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

		
<?php
include '../sections/footer.php'; 
?>