<?php
require "function.php";

if(isset($_POST["tambah"])){
    if(tambahData($_POST) > 0){
        echo "Tambah data berhasil";
    }else{
        echo "Gagal menambahkan";
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