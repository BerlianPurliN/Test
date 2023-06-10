<?php
$server = "localhost";
$port = 3306;
$user = "root";
$pass = "";
$nama_db = "InfoSiDarjo";

$conn = mysqli_connect($server, $user, $pass, $nama_db, $port) or die(mysqli_error($conn));
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
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
function ubahDataPP($data, $id) {
    global $conn ;
    $nama = $data ["nama"];
    $harga = $data ["harga"];

    mysqli_query($conn, "UPDATE produk_pakaian SET nama_prdk_pkan = '$nama', harga_prdk_pkan = '$harga' WHERE id_prdk_pkan = '$id'");

    return mysqli_affected_rows($conn);
}

function ubahDataPM($data, $id) {
    global $conn ;
    $nama = $data ["nama"];
    $harga = $data ["harga"];

    mysqli_query($conn, "UPDATE produk_makanan SET nama_prdk_mkan = '$nama', harga_prdk_mkan = '$harga' WHERE id_prdk_mkan = '$id'");

    return mysqli_affected_rows($conn);
}

function tambahDataPM($data)
{
    global $conn;
    $nama = $data["nama"];
    $harga = $data["harga"];
    $id_tk_mkan = $data["id_tk_mkan"];

    mysqli_query($conn, "INSERT INTO produk_makanan VALUES ('', '$id_tk_mkan', '$nama', '$harga')");

    return mysqli_affected_rows($conn);
}

?>