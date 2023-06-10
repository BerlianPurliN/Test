<?php
require "db.php";

$prodk_makan = tampil("SELECT * FROM produk_makanan ORDER BY id_tk_mkan DESC");

?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="site-header">
    <nav class="site-navigation">
            <ul class="nav">
                <li><a href="hlmn_pakaianU.php" class="button biru">Kembali</a></li>
            </ul>
    </nav>
        <div class="site-identity">
            <h3 class="info">InfoSiDarjo</h3>
            <nav class="site-navigation">
            <ul class="nav">
            </ul>
        </div>
    </header>
    <h1 class"tabel"> Tabel Produk Pakaian </h1>
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
            </tr>
        <?php endforeach;
        ?>
    </table>
</body>