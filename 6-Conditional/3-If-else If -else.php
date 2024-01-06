<?php
//! Conditional if else if else
// => digunakan jika lebih dari 2 Kondisi

//! contoh :
    // Makan restoran all you can eat, Jika umur kurang dari 6 tahun, maka dapat diskon 50%, Jika umur kurang dari 6-15 tahun, makan dapat diskon 30%, selain itu tidak dapat diskon.
    $umurKamu = 15;
    if($umurKamu < 6){
        echo "Selamat Anda dapat diskon 50%";
    }else if($umurKamu >= 6 and $umurKamu <= 15){
        echo "Selamat Anda dapat diskon 30%";
    }
    else{
        echo "Mohon maaf Anda belum dapat Diskon";
    }