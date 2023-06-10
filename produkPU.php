<?php
require "db.php";

$prodk_pakan = tampil("SELECT * FROM produk_pakaian ORDER BY id_tk_pkan DESC");

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
            </tr>
        <?php endforeach;
        ?>
    </table>
</body>