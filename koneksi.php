<?php
// -1 koneksi web browser ke mySQL
$host= 'localhost';
$user= 'root';
$pass= '';
$db='db_siswa';
$conn = mySQLi_connect($host, $user, $pass, $db);
 if($conn){
//   echo"Koneksi Berhasil!";
 }

// -2 memilih database

mySQLi_select_db($conn, $db);
?>