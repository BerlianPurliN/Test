<?php
    require "db.php";

    if(isset($_POST["tambah"])){
        if(tambahDataPM($_POST) > 0 ){
            echo "<script>
                alert('Data berhasil ditambahkan');
                window.location.href='produkM.php';
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
        <title>Tambah data makanan</title>
        <link rel="stylesheet" href="tambah.css">
    </head>
    <body>
    <h1>Tambah data produk makanan</h1>
    <a href="produkM.php" class="button">Kembali</a>
    <form id="kotak"action="" method="post">
        <label for="TK_makanan">Id Toko / Nama Toko : </label>
            <select name="id_tk_mkan" id="">
                <?php
                $sql = "SELECT * FROM TK_makanan where 1";
                $result = mysqli_query($conn, $sql);
                while ($data = mysqli_fetch_array($result)): ?>
                    <option value="<?php echo $data['id_tk_mkan'] ?>"><?php echo $data['nama_tk_mkan'] ?></option>
                <?php endwhile; ?>
            </select><br>
        <label for="nama">Nama Produk : </label>
        <input type="text" id="nama" name="nama" autocomplete="off" placeholder="Masukkan Nama..."><br>
        <label for="harga">Masukkan Harga : </label>
        <input type="text" id="alamat" name="harga" autocomplete="off" placeholder="Masukkan Harga..."><br>
        <input type="submit" name="tambah" />
    </form>
</body>
</html>