<?php
    session_start(); //! untuk izin dlu kita akan menggunakan session.
    echo "Nama saya adalah : " . $_SESSION["nama"];
    echo "<br>";
    echo "<br>";
    echo "Nomer Induk Siswa : " . $_SESSION["NIS"];
    echo "<br>";
    echo "<br>";
    echo "Jurusan yang saya ambil adalah : " . $_SESSION["jurusan"];
    
