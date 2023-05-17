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
        <link rel="stylesheet" href="pakaian.css">
        </head>
    <body>
        <header class="site-header">
            <div class="site-identity">
                <h3 class="info">InfoSiDarjo</h3>
            </div>
            <nav class="site-navigation">
                    <ul class="nav">
                        <li><a href="hlmn_pakaian.php">Pakaian</a></li>
                        <li><a href="profil.php">Profil</a></li>
                    </ul>
            </nav>
        </header>
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