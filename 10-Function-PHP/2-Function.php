<?php
//! kita menggunakan Function menambahkan argument.
// ( . ) ini nama ya concet

    // function menyapa($nama){ //$nama ini yang dimaksud argument
    //     echo "Hello, Selamat pagi " . $nama;
    // }
    // menyapa("AlwinDev");
    // echo "<br>";
    // menyapa("Azhari");

    //! function argument bisa lebih dari satu.
    // aturana ya kalau argument ya ada 2, maka yang manggil harus 2 argument.
    function menyapa($nama, $umur=8){
        echo "Hello " . $nama . " Umur anda " . $umur . " Tahun, Selamat anda medapatkan diskon 50%";
    }
    menyapa(14);
    echo"<br>";
    menyapa("Bella", 13);
    echo"<br>";
    menyapa("Dinda", 15);
