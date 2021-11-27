<?php 
include 'config.php';
$id=$_GET['id'];
mysql_query("delete from user where id='$id'");
header("location:pegawai.php");

?>