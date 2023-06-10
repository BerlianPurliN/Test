<html>
<body>
<?php
$server = "localhost";
$port = 3307;
$user = "root";
$pass = "";
$nama_db = "InfoSiDarjo";

$connection = mysqli_connect($server, $user, $pass, $nama_db, $port) or die(mysqli_error($conn));
$id_tk_mkan = $_POST['id_tk_mkan'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$input_query = "INSERT INTO produk_makanan (id_tk_mkan, nama_prdk_mkan, harga_prdk_mkan) VALUES ($id_tk_mkan, $nama, $harga)";
mysqli_query($connection, $input_query);
?>

id_tk_makan : <?php echo $_POST["id_tk_mkan"]; ?><br>
nama_prdk_makan : <?php echo $_POST["nama"]; ?><br>
harga_prdk_makan : <?php echo $_POST["harga"]; ?><br>
</body>
</html>