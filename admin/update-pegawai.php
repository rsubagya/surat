<?php 
include 'config.php';
$id = $_POST['id'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$level='pegawai';
$nip=$_POST['nip'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$hp=$_POST['hp'];

mysql_query("update user set username='$username', password='$password', level='$level', nama='$nama', nip='$nip', jenis_kelamin='$jenis_kelamin', alamat='$alamat', email='$email', hp='$hp' where id='$id'");
header("location:pegawai.php");

 ?>