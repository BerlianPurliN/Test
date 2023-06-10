<?php
include "db.php";

session_start();

unset($_SESSION['id_pengguna']);
unset($_SESSION['nama_pengguna']);
unset($_SESSION['password_pengguna']);

session_destroy();

echo "<script>alert('Logout successfully');
document.location.href = 'login.php'</script>";
?>