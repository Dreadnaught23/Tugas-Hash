<?php
// Connect to the database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'registrasi_md5';

$Get_pw = $_POST['password'];
$Get_user = $_POST['username'];

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error){
  die("Tidak ada koneksi!");
}

if($Get_user != null && $Get_pw != null){
  echo'Berhasil Login!';
}else{
  echo 'Gagal Login!';
}

?>