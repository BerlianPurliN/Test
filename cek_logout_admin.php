<?php
include "db.php";

session_start();

unset($_SESSION['id_admin']);
unset($_SESSION['nama_admin']);
unset($_SESSION['password_admin']);

session_destroy();

echo "<script>alert('Logout successfully');
document.location.href = 'login.php'</script>";
?>