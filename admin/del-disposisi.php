<?php 
include 'config.php';
$id=$_GET['id_surat'];
mysql_query("delete from disposisi where id_surat_masuk='$id'");
header("location:disposisi.php");

?>