<?php
include "db.php";
session_start();

if (isset($_POST['btn-login'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $sqlu = "SELECT * FROM tabel_user where nama_pengguna = '$nama' AND password_pengguna = '$password' ";
    $sqla = "SELECT * FROM tabel_admin where nama_admin = '$nama' AND password_admin = '$password' ";
    $result_user = mysqli_query($conn, $sqlu);
    $result_admin = mysqli_query($conn, $sqla);
    $return_user = mysqli_fetch_array($result_user);
    $return_admin = mysqli_fetch_array($result_admin);

    if ($return_user) {
        $_SESSION['id_pengguna'] = $return['id_pengguna'];
        $_SESSION['nama_pengguna'] = $return['nama_pengguna'];
        $_SESSION['password_pengguna'] = $return['password_pengguna'];
        
        echo "<script>alert('Selamat datang $nama');
                document.location.href = 'hlmn_makananU.php'</script>";
    }
    elseif ($return_admin) {
        $_SESSION['id_admin'] = $return['id_admin'];
        $_SESSION['nama_admin'] = $return['nama_admin'];
        $_SESSION['password_admin'] = $return['password_admin'];

        echo "<script>alert('Selamat datang $nama');
                document.location.href = 'hlmn_makanan.php'</script>";
    } else {
        echo "<script>alert('Username / Password tidak teradaftar');
            document.location.href = 'login.php'</script>";
    }

}

?>