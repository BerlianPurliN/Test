<?php
include 'db.php' ;
if(isset($_POST["btn-login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $login = tampil("SELECT * FROM tabel_admin WHERE email = '$email' and Password_admin = '$password'");
    $cek = mysql_num_rows($login);

    if($cek > 0){
        echo "<script>alert('Selamat datang ');
        document.location.href = 'hlmn_pengguna.php'</script>";
    }else{
        echo "<script>alert('login gagal');
        document.location.href = 'login.php'</script>";
    }
}
?>

<html>
    <head>
    <style>
        body {
            background-color: white;
        }
    </style>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="kotak">
            <h3 class="info">InfoSiDarjo</h3>
            <h1 class="selamat">SELAMAT DATANG</h1>
            <div class="login">
                <form action="" method="post">
                    <label for="email">Email</label><br>
                    <input type="text" id="email" name="email" placeholder="example@gmail.com"><br>
                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password" placeholder="password"><br>
                    <button type="submit" name="btn-login">Login</button>
                </form>
        </div>
    </div>
</body>
</html>