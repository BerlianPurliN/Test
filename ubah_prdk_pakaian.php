<?php
require 'db.php';
 
$id = $_GET["ubahid_tk_pkan"];
$query = tampil("SELECT * FROM TK_pakaian WHERE id_tk_pkan ='$id'")[0];
//var_dump($query)
if(isset($_POST["ubah"])){
    if(ubahDataPP($_POST, $id) >0 ){
        echo "Ubah data berhasil";
        echo '<script>window.location="produkP.php"</script>';
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
    <title>Ubah Data Pakaian</title>
</head>
<body>
    <h1>Ubah Data Toko Pakaian</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nama">Nama Produk : </label>
        <input type="text" name="nama" id="nama" autocomplete="off" placeholder="Masukkan Nama..." value="<?= $query["nama_prdk_pkan"];?>"><br>
        <label for="harga">Masukkan Harga : </label>
        <input type="text" name="harga" id="harga" autocomplete="off" placeholder="Masukkan Harga..."> value="<?= $query["harga_prdk_pkan"];?>"><br>
        <button type="submit" name="ubah"> Ubah Data</button>
    </form>
</body>
</html>