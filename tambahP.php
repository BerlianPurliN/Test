<?php
    require "db.php";

    if(isset($_POST["tambah"])){
        if(tambahDataP($_POST) > 0 ){
            echo "<script>
                alert('Data berhasil ditambahkan');
                window.location.href='hlmn_pakaian.php';
            </script>";
        }else{
            echo '<script>alert("Gagal menambahkan")</script>';
        }
    }
?>

<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah data pakaian</title>
    </head>
    <body>
    <h1>Tambah data pakaian</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nama">Nama Toko : </label>
        <input type="text" name="nama" id="nama" autocomplete="off" placeholder="Masukkan Nama..."><br>
        <label for="alamat">Alamat Toko : </label>
        <input type="text" name="alamat" id="alamat" autocomplete="off" placeholder="Masukkan Alamat..."><br>
        <label for="deskripsi">Deskripsi Toko : </label>
        <textarea id="deskripsi" name="deskripsi" rows="4" cols="50" placeholder="Masukkan Deskripsi..."></textarea><br>
        <button type="submit" name="tambah">Submit</button>
    </form>
</body>
</html>