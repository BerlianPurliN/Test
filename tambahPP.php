<?php
    require "db.php";

    if(isset($_POST["tambah"])){
        if(tambahDataPP($_POST) > 0 ){
            echo "<script>
                alert('Data berhasil ditambahkan');
                window.location.href='produkP.php';
            </script>";
        }else{
            echo '<script>alert("Gagal menambahkan")</script>';
        }
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah data pakaian</title>
    </head>
    <body>
    <h1>Tambah data produk</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nama">Nama Produk : </label>
        <input type="text" name="nama" id="nama" autocomplete="off" placeholder="Masukkan Nama..."><br>
        <label for="harga">Masukkan Harga : </label>
        <input type="text" name="harga" id="harga" autocomplete="off" placeholder="Masukkan Harga..."><br>
        <button type="submit" name="tambah">Submit</button>
    </form>
</body>
</html>