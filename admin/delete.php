<?php 
include 'config.php';
$id=$_GET['id_surat'];
mysql_query("delete from surat_masuk where id_surat='$id'");
header("location:lihat-surat-masuk.php");

?>