<?php
require "db.php";

$prodk_pakaian = tampil("SELECT * FROM produk_pakaian ORDER BY id_prdk_pkan DESC");

?>

<html>
<head>
    <link rel="stylesheet" href="makan.css">
</head>

<body>
    <header class="site-header">
        <div class="site-identity">
            <h3 class="info">InfoSiDarjo</h3>
            <nav class="site-navigation">
            <ul class="nav">
            <a href="tambahPP.php">Tambah Data</a>
            </ul>
        </nav>
        </div>
    </header>
    <h1> Tabel Produk Pakaian </h1>
    <form action="" method="post" hidden>
        <input type="text" name="keyword" autocomplete="off" autofocus size="50">
        <button type="submit" name="Cari">Cari</button>
    </form><br>
    <table border="1" cellspacing="0" cellpading="3">
        <tr>
            <th>No</th>
            <th>Daftar Pakaian</th>
            <th>Harga</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($prodk_pakaian as $prduk_pkn):
            $id =  $prdk_pkn["id_prdk_pkan"];
            ?>
            <tr>
                <td>
                    <?= $no++; ?>
                </td>
                <td>
                    <?= $prdk_pkn["nama_prdk_pkan"]; ?></a>
                </td>
                <td>
                    <?= $prdk_pkn["harga_prdk_pkan"]; ?>
                </td>
                    <a href="delete_prdk_pkan.php?deleteid_prdk_pkan=<?= $id ?>"
                        onclick="return confirm('Apakah data ingin di hapus?')" class="delete-data">Hapus</a>
                    <a href="ubah_prdk_pakaian.php?ubahid_prdk_pkan=<?= $id ?>" class="update-data">Ubah</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>