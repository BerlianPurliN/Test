<?php
include 'db.php';
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
                <form action="cek_login.php" method="post">
                    <label for="nama">Nama</label><br>
                    <input type="text" id="nama" name="nama" placeholder="masukkan nama"><br>
                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password" placeholder="password"><br>
                    <button type="submit" name="btn-login">Login</button>
                </form>
        </div>
    </div>
</body>
</html>