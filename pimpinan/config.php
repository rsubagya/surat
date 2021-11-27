<?php

 $host = 'localhost';
  $user = 'root';
  $password = '';
  $db = 'dbsurat';
  error_reporting(0);
  mysql_connect($host, $user, $password) or die ('Gagal Koneksi Ke MySQL Server');
  
  mysql_select_db($db) or die ('Gagal Koneksi Ke Database futsal');
?>