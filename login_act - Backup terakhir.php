<?php 
session_start(); // agar tab yang di sebelah juga log out apabila ditutup yang utama.
include 'admin/config.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];
// enkripsi password belum digunakan
//$pas=md5($pass); 
$query=mysql_query("select * from user where username='$uname' and password='$pass'")or die(mysql_error());
if(mysql_num_rows($query)==1){
	$_SESSION['uname']=$uname;
	header("location:admin/index.php");
}else{
	header("location:index.php?pesan=gagal")or die(mysql_error());
	// mysql_error();
}
// echo $pas;
 ?>