<?php
require "db.php";

if(isset($_POST["tambah"])) {
    $nama       = $_POST['nama'];
    $alamat     = $_POST['alamat'];
    $deskripsi  = $_POST['deskripsi'];

    if($nama && $alamat && $deskripsi) {
        $sql1 = "INSERT INTO TK_makanan (nama, alamat, deskripsi) VALUES ('$nama', '$alamat', '$deskripsi')";
        $q1 = mysqli_query($conn,$sql1);
        if($q1){
            $sukses     = "Tambah data berhasil";
        } else {
            $error      = "Gagal menambahkan data";
        }
    }
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah data M</title>
    </head>
    <body>
        <h1>Tambah data makanan</h1>
        <form action="" method="post">
            <label for="nama">Nama Toko : </label>
            <input type="text" name="nama" id="nama" autocomplete="off" placeholder="Masukkan Nama..."><br>
            <label for="alamat">Alamat Toko : </label>
            <input type="text" name="alamat" id="alamat" autocomplete="off" placeholder="Masukkan Alamat..."><br>
            <label for="deskripsi">Deskripsi Toko : </label>
            <input type="text" name="deskripsi" id="deskripsi" autocomplete="off" placeholder="Masukkan Deskripsi..."><br>
            <button type="submit" name="tambah">Submit</button>
        </form>
    </body>
</html>