<?php 
include 'config.php';
$id=$_GET['id_surat'];
mysql_query("delete from surat_keluar where id_surat='$id'");
header("location:lihat-surat-keluar.php");

?>