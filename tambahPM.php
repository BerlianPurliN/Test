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
        <title>Tambah data produk makanan</title>
    </head>
    <body>
    <h1>Tambah data produk</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <label for="TK_makanan">id toko / Nama toko : </label>
            <select name="TK_makanan" id="TK_makanan">
                <?php
                $sql = "SELECT * FROM TK_makanan where 1";
                $result = mysqli_query($conn, $sql);
                while ($data = mysqli_fetch_array($result)): ?>
                    <option value="<?php echo $data['id_tk_mkan'] ?>"><?php echo $data['nama_tk_mkan'] ?></option>
                <?php endwhile; ?>
            </select><br>
        <label for="nama">Nama Menu : </label>
        <input type="text" name="nama" id="nama" autocomplete="off" placeholder="Masukkan Nama Menu..."><br>
        <label for="harga">Masukkan Harga : </label>
        <input type="text" name="harga" id="harga" autocomplete="off" placeholder="Masukkan Harga..."><br>
        <button type="submit" name="tambah">Submit</button>
    </form>
</body>
</html>