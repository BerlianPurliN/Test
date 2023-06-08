<?php
require "db.php";

$prodk_pakan = tampil("SELECT * FROM produk_makanan ORDER BY id_tk_mkan DESC");

?>

<html>
<head>
    <link rel="stylesheet" href="makan.css">
</head>

<body>
    <header class="site-header">
    <nav class="site-navigation">
            <ul class="nav">
                <li><a href="hlmn_makanan.php">Kembali</a></li>
            </ul>
    </nav>
        <div class="site-identity">
            <h3 class="info">InfoSiDarjo</h3>
            <nav class="site-navigation">
            <ul class="nav">
            </ul>
        </div>
    </header>
    <h1> Tabel Produk Makanan </h1>
    <a href="tambahPP.php">Tambah Data</a>
    <table border="1" cellspacing="0" cellpading="3">
        <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Harga</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($prodk_pakan as $prduk_pkn):
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
                    <?= $prdk_pkn["id_tk_pkan"]; ?></a>
                </td>
                <td>
                    <?= $prdk_pkn["harga_prdk_pkan"]; ?>
                </td>
                    <a href="delete_prdk_pkan.php?deleteid_prdk_pkan=<?= $id ?>"
                        onclick="return confirm('Apakah data ingin di hapus?')" class="delete-data">Hapus</a>
                    <a href="ubah_prdk_pakaian.php?ubahid_prdk_pkan=<?= $id ?>" class="update-data">Ubah</a>
                </td>
            </tr>
        <?php endforeach;
        ?>
    </table>
</body>