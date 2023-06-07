<?php
$server = "localhost";
$user = "root";
$pass = "";
$nama_db = "InfoSiDarjo";

$conn = mysqli_connect($server, $user, $pass, $nama_db) or die(mysqli_error($conn));

function tampil($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($data = mysqli_fetch_assoc($result)) {
        $rows[] = $data;
    }

    return $rows;
}

function tambahDataM($data)
{
    global $conn;
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $desk = $data["deskripsi"];

    $query = "INSERT INTO TK_makanan (nama_tk_mkan, alamat_tk_mkan, desk_tk_mkan) VALUES ('$nama', '$alamat', '$desk')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubahDataTM($data, $id) {
    global $conn ;
    $nama = $data ["nama"];
    $alamat = $data ["alamat"];
    $desk = $data ["deskripsi"];

    mysqli_query($conn, " UPDATE TK_makanan SET nama_tk_mkan = '$nama', alamat_tk_mkan = '$alamat', desk_tk_mkan = '$desk' WHERE id_tk_mkan = '$id'");

    return mysqli_affected_rows($conn);
}
function tambahDataP($data)
{
    global $conn;
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $desk = $data["deskripsi"];

    $query = "INSERT INTO TK_pakaian (nama_tk_pkan, alamat_tk_pkan, desk_tk_pkan) VALUES ('$nama', '$alamat', '$desk')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function ubahDataTP($data, $id) {
    global $conn ;
    $nama = $data ["nama"];
    $alamat = $data ["alamat"];
    $desk = $data ["deskripsi"];

    mysqli_query($conn, " UPDATE TK_pakaian SET nama_tk_pkan = '$nama', alamat_tk_pkan = '$alamat', desk_tk_pkan = '$desk' WHERE id_tk_pkan = '$id'");

    return mysqli_affected_rows($conn);
}

?>