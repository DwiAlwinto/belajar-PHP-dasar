<?php
    session_start(); //! untuk izin dlu kita akan menggunakan session.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Session Login</title>
</head>
<body>
    <h2>Login Admin</h2>
    <form action="" method="post">
            <label for="">Username</label>
            <input type="text" name="username"  autocomplete="off">
     <br>    
            <label for="">Password</label>
            <input type="password" name="password">
    <br>
        <input type="submit" value="login" name="loginBtn">
    </form>

    <!-- setting form login -->
    <?php
     if (isset($_POST["loginBtn"])){
       $userName = $_POST["username"];

       $_SESSION["username"] = $userName;
       $_SESSION["login"] = true; //login benar semua

       header("location: profil.php"); //untuk mendirect ke halaman profil.php
     }
    ?>
</body>
</html>
    
