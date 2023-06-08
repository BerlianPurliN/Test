<?php
require "db.php";

$prodk_makan = tampil("SELECT * FROM produk_pakaian ORDER BY id_tk_pkan DESC");

?>

<html>
<head>
    <link rel="stylesheet" href="makan.css">
</head>

<body>
    <header class="site-header">
    <nav class="site-navigation">
            <ul class="nav">
                <li><a href="hlmn_pakaian.php">Kembali</a></li>
            </ul>
    </nav>
        <div class="site-identity">
            <h3 class="info">InfoSiDarjo</h3>
            <nav class="site-navigation">
            <ul class="nav">
            </ul>
        </div>
    </header>
    <h1> Tabel Produk Pakaian </h1>
    <a href="tambahPM.php">Tambah Data</a>
    <table border="1" cellspacing="0" cellpading="3">
        <tr>
            <th>No</th>
            <th>Menu Makanan</th>
            <th>Harga</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($prodk_makan as $prduk_mkn):
            $id =  $prdk_mkn["id_prdk_mkan"];
            ?>
            <tr>
                <td>
                    <?= $no++; ?>
                </td>
                <td>
                    <?= $prdk_mkn["nama_prdk_mkan"]; ?></a>
                </td>
                <td>
                    <?= $prdk_mkn["id_tk_mkan"]; ?></a>
                </td>
                <td>
                    <?= $prdk_mkn["harga_prdk_mkan"]; ?>
                </td>
                    <a href="delete_prdk_mkan.php?deleteid_prdk_mkan=<?= $id ?>"
                        onclick="return confirm('Apakah data ingin di hapus?')" class="delete-data">Hapus</a>
                    <a href="ubah_prdk_makan.php?ubahid_prdk_mkan=<?= $id ?>" class="update-data">Ubah</a>
                </td>
            </tr>
        <?php endforeach;
        ?>
    </table>
</body>