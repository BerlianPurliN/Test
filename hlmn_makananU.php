<?php
require "db.php";

$tk_makan = tampil("SELECT * FROM TK_makanan ORDER BY id_tk_mkan DESC");


?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="site-header">
        <div class="site-identity">
            <h3 class="info">InfoSiDarjo</h3>
        </div>
        <nav class="site-navigation">
            <ul class="nav">
                <li><a href="hlmn_pakaianU.php" class="button hijau">Pakaian</a></li>
                <li><a href="cek_logout_logout.php" class="button merah">Logout</a></li>
            </ul>
        </nav>
    </header>
    <h1> Tabel Toko Makanan </h1>
    <div class="container">
    <form action="" method="post" hidden>
        <input type="text" name="keyword" autocomplete="off" autofocus size="50">
        <button type="submit" name="Cari">Cari</button>
    </form><br>
    <table border="1" cellspacing="0" cellpading="3">
        <tr>
            <th>No</th>
            <th>Nama Toko</th>
            <th>Alamat Toko</th>
            <th>Deskripsi Toko</th>
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
                    <a href="produkMU.php?id_tk_mkan=<?php echo $id ?>"><?= $tk_mkn["nama_tk_mkan"]; ?></a>
                </td>
                <td>
                    <?= $tk_mkn["alamat_tk_mkan"]; ?>
                </td>
                <td>
                    <?= $tk_mkn["desk_tk_mkan"]; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>