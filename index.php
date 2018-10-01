<?php session_start(); ?>

<html lang="en">
<head>
    <title>Desain Form Login Dengan Css</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">Sign In</h2>
        </div>

        <?php
        if(!empty($_SESSION["user"]) && !empty($_SESSION["pass"])) {
            header("location:time.php");
        }
        ?>

        <div class="artikel">
            <form action="verification.php" method="post">
                <div class="grup">
                    <label for="email">E-mail Address</label>
                    <input type="text" placeholder="Masukkan Alamat Email Anda" name="user">
                </div>
                <div class="grup">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Masukkan password Anda" name="pass">
                </div>
                <div class="grup">
                    <input type="submit" value="Sign In">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
