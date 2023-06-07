<?php
require "db.php";

$tk_pakaian = tampil("SELECT * FROM TK_pakaian ORDER BY id_tk_pkan DESC");


?>

<html>
<head>
    <link rel="stylesheet" href="makan.css">
</head>

<body>
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
                <li><a href="hlmn_makanan.php">Makanan</a></li>
            </ul>
        </nav>
    </header>
    <h1> Tabel Toko Pakaian </h1>
    <div class="container">
    <form action="" method="post" hidden>
        <input type="text" name="keyword" autocomplete="off" autofocus size="50">
        <button type="submit" name="Cari">Cari</button>
    </form><br>
    <a href="tambahP.php">Tambah Data</a>
    <table border="1" cellspacing="0" cellpading="3">
        <tr>
            <th>No</th>
            <th>Nama Toko</th>
            <th>Alamat Toko</th>
            <th>Deskripsi Toko</th>
            <th>Hapus/Ubah</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($tk_pakaian as $tk_pkn):
            $id = $tk_pkn["id_tk_pkan"];
            ?>
            <tr>
                <td>
                    <?= $no++; ?>
                </td>
                <td>
                    <a href="produkP.php"><?= $tk_pkn["nama_tk_pkan"]; ?></a>
                </td>
                <td>
                    <?= $tk_pkn["alamat_tk_pkan"]; ?>
                </td>
                <td>
                    <?= $tk_pkn["desk_tk_pkan"]; ?>
                </td>
                <td>
                    <a href="delete_tk_pkan.php?deleteid_tk_pkan=<?= $id ?>"
                        onclick="return confirm('Apakah data ingin di hapus?')" class="delete-data">Hapus</a>
                    <a href="ubah_tk_pakaian.php?ubahid_tk_pkan=<?= $id ?>" class="update-data">Ubah</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>