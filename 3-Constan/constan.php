<?php
    //!Perbadaan Consatan dan Variable :
        //constan tidak bisa dirubah nilai ya, sudah tetap beda dengan variable.
        //constan area scope ya tidak terbatas bisa dipanggil didalam function atau diluar function tanpa perlu deklrasi ulang.
    
    // Cara declare Variable :
    $nilai = 3.14;
    
    //Cara declare Constan :
    define('nilai', 3.14);
    
    // Variable bisa dirubah
    $nilai = 4;
    // kalau Constan tidak bisa dirubah
    //'phi' = 3.15; //!ini akan error karena tidak bisa diubah

    // panggil variable
    echo($nilai);
    echo "<br>";
    //panggil constan 
    echo nilai;

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<h1>Contoh di area scope function</h1>";

    $nilai_A = 200;
    define("Nilai_B", 400);

    function variableNilai () {
        global $nilai_A;
        echo $nilai_A; //ini tidak muncul karena tidak terdeteksi harus menggunakan global
    }
    variableNilai();
    echo "<br>";


    function constan (){
        echo Nilai_B;
    }
    constan(); //ini cassensitive nama ya harus sama dengan constan induk ya
    




