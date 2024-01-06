<?php
    session_start(); //ini cara pertama untuk start session diketik paling atas. (untuk minta izin dahulu);
    $_SESSION["nama"] = "Alwin"; //ini cara membuat nama sesion
    $_SESSION["NIS"] = 117161976;
    $_SESSION["jurusan"] = "IPA";

    //!cara ubah data session dengan yang baru.
    $_SESSION["nama"] = "Delia";
    $_SESSION["NIS"] = 100030596;
    $_SESSION["jurusan"] = "Ekonomi dan Bisnis";
    echo "<br>";

    echo "Nama saya : " . $_SESSION["nama"]; //ini cara manggilnya
    echo "<br>";
    echo "<br>";
    echo "NIS : " . $_SESSION["NIS"];
    echo "<br>";
    echo "<br>";
    echo "Jurusan saya : ". $_SESSION["jurusan"];
    echo "<br>";
    echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coba session</title>
</head>
<body>
    <div>
       <h3>klik link dibawah ini</h3>
        <a href="profil.php">Masuk ke halam proil</a>
    </div>
</body>
</html>
