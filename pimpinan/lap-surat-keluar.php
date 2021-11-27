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

			<!-- <li><a href="grafik.php" class=""><i class="lnr lnr-chart-bars"></i> <span>Grafik</span></a></li> -->


			<li>
				<a href="#subPages3" data-toggle="collapse" class="active"><i class="glyphicon glyphicon-list-alt"></i> <span>Laporan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
				<div id="subPages3" class="active">
					<ul class="nav">
													<li><a href="lap-surat-masuk.php" class=""><i class="fa fa-envelope"></i> <span>Surat Masuk</span></a></li>
													<li><a href="lap-surat-keluar.php" class="active"><i class="fa fa-paper-plane-o"></i> <span>Surat Keluar</span></a></li>
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
	<h3 class="page-title"><i class="fa fa-paper-plane-o"></i>  Surat Keluar</h3>
	<div class="panel panel-headline demo-icons">
		<div class="panel-body">
		<a style="margin-bottom:10px" href="lap-surat-keluar-ctk.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
		<br/>
		<br/>
		<br/>
		
        <div class="clearfix"></div>

        <div class="x_content">
        		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

        		<thead>
        			<tr>
        				<th>No</th>
        				<th>Nomor Surat</th>
        				<th>Tujuan Surat</th>
        				<th>Tgl Dikeluarkan</th>
        				<th>Jenis Surat</th>
        				<th>Perihal Surat</th>        			
        			</tr>

        		</thead>
        		<tbody>
        			<?php
        				$sql = "SELECT * FROM surat_keluar WHERE status = 'Disetujui'";
        				$result = mysql_query($sql);
        				$no = 1;

        				if (mysql_num_rows($result) > 0){
        					while ($row = mysql_fetch_assoc($result)) {
        						echo "<tr> ";
        						echo "<td>$no</td>";
								echo "<td>$row[no_surat]</td>";
								echo "<td>$row[tujuan_surat]</td>";
								echo "<td>$row[tanggal_dikeluarkan]</td>";
								echo "<td>$row[jenis_surat]</td>";
								echo "<td>$row[ringkasan_surat]</td>";
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