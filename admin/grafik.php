<!doctype html>
<html lang="en">

<head>
    <?php
    session_start();
    require 'cek.php';
    require 'config.php';
    require '../sections/header.php';
    ?>
    <script src="../assets/Chart.js/Chart.bundle.js"></script>
    <style type="text/css">
    .container {
        width: 100%;
        margin: 15px auto;
    }
    </style>

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

                        <li><a href="lihat-surat-masuk.php" class=""><i class="fa fa-envelope"></i> <span>Surat
                                    Masuk</span></a></li>

                        <li><a href="lihat-surat-keluar.php" class=""><i class="fa fa-paper-plane-o"></i> <span>Surat
                                    Keluar</span></a></li>



                        <li><a href="disposisi.php" class=""><i class="lnr lnr-location"></i> <span>Disposisi</span></a>
                        </li>

                        <!-- <li><a href="charts.php" class="active"><i class="lnr lnr-chart-bars"></i> <span>Grafik</span></a></li> -->


                        <li>
                            <a href="#subPages3" data-toggle="collapse" class="collapsed"><i
                                    class="glyphicon glyphicon-list-alt"></i> <span>Laporan</span> <i
                                    class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPages3" class="collapse ">
                                <ul class="nav">
                                    <li><a href="lap-surat-masuk.php" class=""><i class="fa fa-envelope"></i>
                                            <span>Surat Masuk</span></a></li>
                                    <li><a href="lap-surat-keluar.php" class=""><i class="fa fa-paper-plane-o"></i>
                                            <span>Surat Keluar</span></a></li>
                                </ul>
                            </div>
                        </li>

                        <!-- <li><a href="pemberitahuan.php" class=""><i class="lnr lnr-alarm"></i> <span>Pemberitahuan</span></a></li>
 -->


                        <li>
                            <a href="#subPages4" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i>
                                <span>Pengguna</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPages4" class="collapse ">
                                <ul class="nav">
                                    <li><a href="admin.php" class=""><i class="fa fa-user"></i> <span>Admin</span></a>
                                    </li>
                                    <li><a href="pegawai.php" class=""><i class="fa fa-user"></i>
                                            <span>Pegawai</span></a></li>
                                    <li><a href="pimpinan.php" class=""><i class="fa fa-user"></i>
                                            <span>Pimpinan</span></a></li>
                                </ul>
                            </div>
                        </li>

                        <li><a href="pengaturan.php" class=""><i class="lnr lnr-cog"></i> <span>Pengaturan</span></a>
                        </li>

                        <li><a href="javascript:;" class="" data-toggle="modal" data-target="#confirmModal"><i
                                    class="fa fa-sign-out"></i> <span>Keluar</span></li></a>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        <div class="main">

            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                    <h3 class="page-title">Grafik</h3>

                    <?php
                    //$bulan = mysql_query("SELECT ")
                    $surat = mysql_query("SELECT * FROM surat_masuk WHERE tanggal_terima BETWEEN '2020-06-01' AND '2021-06-31'");
                    $surat2 = mysql_query("SELECT * FROM surat_masuk WHERE tanggal_terima BETWEEN '2020-07-01' AND '2021-07-30'");
                    $surat3 = mysql_query("SELECT * FROM surat_masuk WHERE tanggal_terima BETWEEN '2020-08-01' AND '2021-08-31'");
                    $surat4 = mysql_query("SELECT * FROM surat_masuk WHERE tanggal_terima BETWEEN '2020-09-01' AND '2021-09-30'");
                    $surat5 = mysql_query("SELECT * FROM surat_masuk WHERE tanggal_terima BETWEEN '2020-010-01' AND '2021-10-31'");
                    $surat6 = mysql_query("SELECT * FROM surat_masuk WHERE tanggal_terima BETWEEN '2020-11-01' AND '2021-11-30'");

                    $surat7 = mysql_query("SELECT * FROM surat_keluar WHERE tanggal_dikeluarkan BETWEEN '2017-01-01' AND '2017-01-31'");
                    $surat8 = mysql_query("SELECT * FROM surat_keluar WHERE tanggal_dikeluarkan BETWEEN '2017-02-01' AND '2017-02-30'");
                    $surat9 = mysql_query("SELECT * FROM surat_keluar WHERE tanggal_dikeluarkan BETWEEN '2017-03-01' AND '2017-03-31'");
                    $surat10 = mysql_query("SELECT * FROM surat_keluar WHERE tanggal_dikeluarkan BETWEEN '2017-04-01' AND '2017-04-30'");
                    $surat11 = mysql_query("SELECT * FROM surat_keluar WHERE tanggal_dikeluarkan BETWEEN '2017-05-01' AND '2017-05-31'");
                    $surat12 = mysql_query("SELECT * FROM surat_keluar WHERE tanggal_dikeluarkan BETWEEN '2017-06-01' AND '2017-06-30'");

                    $surat13 = mysql_query("SELECT * FROM disposisi WHERE tanggal_disposisi BETWEEN '2017-01-01' AND '2017-01-31'");
                    $surat14 = mysql_query("SELECT * FROM disposisi WHERE tanggal_disposisi BETWEEN '2017-02-01' AND '2017-02-30'");
                    $surat15 = mysql_query("SELECT * FROM disposisi WHERE tanggal_disposisi BETWEEN '2017-03-01' AND '2017-03-31'");
                    $surat16 = mysql_query("SELECT * FROM disposisi WHERE tanggal_disposisi BETWEEN '2017-04-01' AND '2017-04-30'");
                    $surat17 = mysql_query("SELECT * FROM disposisi WHERE tanggal_disposisi BETWEEN '2017-05-01' AND '2017-05-31'");
                    $surat18 = mysql_query("SELECT * FROM disposisi WHERE tanggal_disposisi BETWEEN '2017-06-01' AND '2017-06-30'");

                    $jlh = mysql_num_rows($surat);
                    $jlh2 = mysql_num_rows($surat2);
                    $jlh3 = mysql_num_rows($surat3);
                    $jlh4 = mysql_num_rows($surat4);
                    $jlh5 = mysql_num_rows($surat5);
                    $jlh6 = mysql_num_rows($surat6);

                    $jlh7 = mysql_num_rows($surat7);
                    $jlh8 = mysql_num_rows($surat8);
                    $jlh9 = mysql_num_rows($surat9);
                    $jlh10 = mysql_num_rows($surat10);
                    $jlh11 = mysql_num_rows($surat11);
                    $jlh12 = mysql_num_rows($surat12);

                    $jlh13 = mysql_num_rows($surat13);
                    $jlh14 = mysql_num_rows($surat14);
                    $jlh15 = mysql_num_rows($surat15);
                    $jlh16 = mysql_num_rows($surat16);
                    $jlh17 = mysql_num_rows($surat17);
                    $jlh18 = mysql_num_rows($surat18);


                    ?>

                    <!-- Grafik Surat Masuk -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Grafik Surat Masuk 2017</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="container">
                                        <canvas id="myChart" width="100" height="100"></canvas>
                                    </div>
                                    <script>
                                    var ctx = document.getElementById("myChart");
                                    var myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: ["Juni", "Juli", "Agustus", "September", "Oktober",
                                                "November"
                                            ],
                                            datasets: [{
                                                label: 'Data Surat Masuk',
                                                data: [<?php echo "$jlh"; ?>, <?php echo "$jlh2"; ?>,
                                                    <?php echo "$jlh3"; ?>, <?php echo "$jlh4"; ?>,
                                                    <?php echo "$jlh5"; ?>, <?php echo "$jlh6"; ?>
                                                ],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255,99,132,1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                    </script>
                                </div>
                            </div>
                        </div>

                        <!-- Grafik Surat Keluar -->
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Grafik Surat Keluar 2017</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="container">
                                        <canvas id="myChart2" width="100" height="100"></canvas>
                                    </div>
                                    <script>
                                    var ctx = document.getElementById("myChart2");
                                    var myChart2 = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: ["Juni", "Juli", "Agustus", "September", "Oktober",
                                                "November"
                                            ],
                                            datasets: [{
                                                label: 'Data Surat Keluar',
                                                data: [<?php echo "$jlh7"; ?>, <?php echo "$jlh8"; ?>,
                                                    <?php echo "$jlh9"; ?>, <?php echo "$jlh10"; ?>,
                                                    <?php echo "$jlh11"; ?>, <?php echo "$jlh12"; ?>
                                                ],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255,99,132,1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Grafik Disposisi Surat 2017</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="container">
                                        <canvas id="myChart3" width="100" height="100"></canvas>
                                    </div>
                                    <script>
                                    var ctx = document.getElementById("myChart3");
                                    var myChart3 = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: ["Juni", "Juli", "Agustus", "September", "Oktober",
                                                "November"
                                            ],
                                            datasets: [{
                                                label: 'Data Disposisi Surat',
                                                data: [<?php echo "$jlh13"; ?>, <?php echo "$jlh14"; ?>,
                                                    <?php echo "$jlh15"; ?>,
                                                    <?php echo "$jlh16"; ?>,
                                                    <?php echo "$jlh17"; ?>, <?php echo "$jlh18"; ?>
                                                ],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255,99,132,1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 	<div class="col-md-6">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Multiple Chart</h3>
			</div>
			<div class="panel-body">
				<div id="multiple-chart" class="ct-chart"></div>
			</div>
		</div>
	</div>
</div>

 -->

                </div>
            </div>
            <!-- END MAIN CONTENT -->
        </div>
        <!-- END MAIN -->



        <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
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
                <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Puskesmas Harapan
                        Raya</a>. All Rights Reserved.</p>
            </div>
        </footer>
    </div>
    <!-- END WRAPPER -->

    <?php
    include '../sections/footer.php';
    ?>