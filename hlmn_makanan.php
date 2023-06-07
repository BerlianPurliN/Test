<?php
require "db.php";

$tk_makan = tampil("SELECT * FROM TK_makanan ORDER BY id_tk_mkan DESC");


?>

<html>
<head>
    <link rel="stylesheet" href="makan.css">
</head>
<body>
    <header class="site-header">
        <div class="site-identity">
            <h3 class="info">InfoSiDarjo</h3>
        </div>
        <nav class="site-navigation">
            <ul class="nav">
                <li><a href="hlmn_pakaian.php">Pakaian</a></li>
            </ul>
        </nav>
    </header>
    <h1> Tabel Toko Makanan </h1>
    <div class="container">
    <form action="" method="post" hidden>
        <input type="text" name="keyword" autocomplete="off" autofocus size="50">
        <button type="submit" name="Cari">Cari</button>
    </form><br>
    <a href="tambahM.php">Tambah Data</a>
    <table border="1" cellspacing="0" cellpading="3">
        <tr>
            <th>No</th>
            <th>Nama Toko</th>
            <th>Alamat Toko</th>
            <th>Deskripsi Toko</th>
            <th>Hapus/Ubah</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($tk_makan as $tk_mkn):
            $id = $tk_mkn["id_tk_mkan"];
            ?>
            <tr>
                <td>
                    <?= $no++; ?>
                </td>
                <td>
                    <a href="produkM.php"><?= $tk_mkn["nama_tk_mkan"]; ?></a>
                </td>
                <td>
                    <?= $tk_mkn["alamat_tk_mkan"]; ?>
                </td>
                <td>
                    <?= $tk_mkn["desk_tk_mkan"]; ?>
                </td>
                <td>
                    <a href="delete_tk_mkan.php?deleteid_tk_mkan=<?= $id ?>"
                        onclick="return confirm('Apakah data ingin di hapus?')" class="delete-data">Hapus</a><br>
                    <a href="ubah_tk_makan.php?ubahid_tk_mkan=<?= $id ?>" class="update-data">Ubah</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>