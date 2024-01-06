<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
</head>
<body>
    <h3>Login User Admin</h3>
        <form action="" method="post">
                <label for="">Username</label>
                <input type="text" name="username" autocomplete="off">
            <br>
                <label for="">Password</label>
                <input type="password" name="password">
            <br>
            <input type="submit" value="login" name="loginBtn">
        </form>
    <?php
        require "cekLogin.php"; 
        if (isset($_POST["loginBtn"])) {
            $userName = $_POST["username"];

            $_SESSION["username"] = $userName;
            $_SESSION["login"] = true;

            header("location: header.php");
        }
    ?>
</body>
</html>