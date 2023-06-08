<?php
require 'db.php';
 
$id = $_GET["ubahid_tk_mkan"];
$query = tampil("SELECT * FROM TK_makanan WHERE id_tk_mkan ='$id'")[0];
//var_dump($query)
if(isset($_POST["ubah"])){
    if(ubahDataPM($_POST, $id) >0 ){
        echo "Ubah data berhasil";
        echo '<script>window.location="produkM.php"</script>';
    }else{
        echo '<script>alert("Gagal mengubah")</script>';
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Makanan</title>
</head>
<body>
    <h1>Ubah Data Toko makanan</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nama">Nama Produk : </label>
        <input type="text" name="nama" id="nama" autocomplete="off" placeholder="Masukkan Nama..." value="<?= $query["nama_prdk_mkan"];?>"><br>
        <label for="harga">Masukkan Harga : </label>
        <input type="text" name="harga" id="harga" autocomplete="off" placeholder="Masukkan Harga..."> value="<?= $query["harga_prdk_mkan"];?>"><br>
        <button type="submit" name="ubah"> Ubah Data</button>
    </form>
</body>
</html>