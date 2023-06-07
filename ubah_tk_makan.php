<?php
require 'db.php';
 
$id = $_GET["ubahid_tk_mkan"];
$query = tampil("SELECT * FROM TK_makanan WHERE id_tk_mkan ='$id'")[0];
//var_dump($query)
if(isset($_POST["ubah"])){
    if(ubahDataTM($_POST, $id) >0 ){
        echo "Ubah data berhasil";
        echo '<script>window.location="hlmn_makanan.php"</script>';
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
        <label for="nama">Nama Toko : </label>
        <input type="text" name="nama" id="nama" autocomplete="off" placeholder="Masukan Nama ..." value="<?= $query["nama_tk_mkan"];?>"><br>
        <label for="alamat">Alamat Toko : </label>
        <input type="text" name="alamat" id="alamat" autocomplete="off" placeholder="Masukan alamat ..." value="<?= $query["alamat_tk_mkan"];?>"><br>
        <label for="telp">deskripsi Toko: </label>
        <input type="text" name="deskripsi" id="deskripsi" autocomplete="off" placeholder="Masukan deskripsi ..." value="<?= $query["desk_tk_mkan"];?>"><br>
        <button type="submit" name="ubah"> Ubah Data</button>
    </form>
</body>
</html>