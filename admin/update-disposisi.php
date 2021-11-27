<?php 
include 'config.php';
$id = $_POST['id'];
$tanggal_disposisi = $_POST['tanggal_disposisi'];
$disposisi_ke = $_POST['disposisi_ke'];
$keterangan=$_POST['keterangan'];

mysql_query("update disposisi set tanggal_disposisi='$tanggal_disposisi', disposisi_ke='$disposisi_ke', keterangan='$keterangan' where id_surat_masuk='$id'");
header("location:disposisi.php");

 ?>