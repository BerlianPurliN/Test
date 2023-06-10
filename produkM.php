<?php
require "db.php";

$prodk_makan = tampil("SELECT produk_makanan.id_prdk_mkan, TK_makanan.id_tk_mkan, produk_makanan.nama_prdk_mkan, produk_makanan.harga_prdk_mkan FROM produk_makanan INNER JOIN TK_makanan ON TK_makanan.id_tk_mkan = produk_makanan.id_tk_mkan ORDER BY produk_makanan.id_prdk_mkan DESC");
// $id_tk_mkan = $_GET['id_tk_mkan'];
// $prodk_makan = tampil("SELECT * FROM produk_makanan WHERE id_tk_mkan = $id_tk_mkan");
?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="site-header">
        <div class="site-identity">
        <ul class="nav">
            <h3 class="info">InfoSiDarjo</h3>
            <nav class="site-navigation">
            <li><a href="hlmn_makanan.php" class="button biru">Kembali</a></li>
        </ul>
        </div>
    </header>
    <h1> Tabel Produk Makanan </h1>
    <h3> Nama toko </h3>
    <a href="tambahPM.php" class="button biru">Tambah Data</a><br>
    <table border="1" cellspacing="0" cellpading="3">
        <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Harga</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($prodk_makan as $prdk_mkn):
            $id = $prdk_mkn["id_prdk_mkan"];
            ?>
            <tr>
                <td>
                    <?= $no++; ?>
                </td>
                <td>
                    <?= $prdk_mkn["nama_prdk_mkan"]; ?>
                </td>
                <td>
                    <?= $prdk_mkn["harga_prdk_mkan"]; ?>
                </td>
                <td>
                    <a href="delete_prdk_mkan.php?deleteid_prdk_mkan=<?= $id ?>" onclick="return confirm('Apakah data ingin dihapus?')" class="delete-data">Hapus</a>
                    <a href="ubah_prdk_makan.php?ubahid_prdk_mkan=<?= $id ?>" class="update-data">Ubah</a>
                </td>
            </tr>
        <?php endforeach;
        ?>
    </table>
</body>
</html>