<?php
$server= "localhost";
$user = "root";
$pass = "";
$nama_db = "InfoSidarjo";

$conn =  mysqli_connect($server , $user , $pass , $nama_db);
if(!$conn){
    die("Tidak bisa terkoneksi ke database");
}else{
    echo "koneksi berhasil";
}

?>