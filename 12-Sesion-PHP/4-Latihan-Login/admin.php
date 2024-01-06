<?php
    session_start();

    if (isset($_SESSION["login"]) == true) {
        echo "<h2>Selamant anda Masuk ke halaman ADMIN</h2>";
    } else {
        header("location:user.php");
    }