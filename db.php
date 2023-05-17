<?php
$server= "localhost";
$user = "root";
$pass = "";
$nama_db = "InfoSidarjo";

$conn =  mysqli_connect($server , $user , $pass , $nama_db) or die(mysqli_error($conn));

function tampil($query) {
    global $conn;
    $result = mysqli_query($conn , $query);
    $rows = [];

    while($data = mysqli_fetch_assoc($result)) {
        $rows[] = $data;
    }

    return $rows;

}

function tambahDataM($data){
    global $conn;
    $nama = $data ["nama"];
    $alamat = $data ["alamat"];
    $deskripsi = $data ["deskripsi"];

    mysqli_query($conn, "INSERT INTO TK_makanan VALUES ('','$nama','$alamat','$deskripsi')");

    return mysqli_affected_rows($conn);
}