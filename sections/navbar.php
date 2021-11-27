<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.php"><img src="../assets/ico/aw.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<!-- <div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div> -->
				</form>
				

				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
					
 						<!-- Pemberitahuan surat keluar -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
									<?php
										$periksa = mysql_query("select * from surat_keluar where status='Belum Disetujui'");
										$jumlah = mysql_num_rows($periksa);
										while($q=mysql_fetch_array($periksa)){
												echo "<span class='badge bg-danger'>$jumlah</span>";
										}
									?>
							</a>
							<ul class="dropdown-menu notifications">
								<?php
									$periksa = mysql_query("select * from surat_keluar where status='Belum Disetujui'");
									$jumlah = mysql_num_rows($periksa);
									while($q=mysql_fetch_array($periksa)){
											echo"<li><a href=edit_srt_klr.php?id_surat=" .$q['id_surat']." class='notification-item'  target='_blank' ><span class='dot bg-danger'></span>Surat Nomor ".$q['no_surat']." Belum Disetujui</a></li>";
									}							
								?>
								<li><a href="pemberitahuan.php" class="more">See all notifications</a></li>
							</ul>
						</li>



						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Bantuan</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="basic-use.html">Basic Use</a></li>
								<li><a href="troubleshooting.html">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../assets/img/user.png" class="img-circle" alt="Avatar"> <span>Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="profile.php"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="pengaturan.php"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="javascript:;" class="" data-toggle="modal" data-target="#confirmModal"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->