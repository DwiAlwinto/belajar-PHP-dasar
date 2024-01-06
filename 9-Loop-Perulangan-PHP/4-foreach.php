<?php
 //! foreach ini hanya bisa membaca yang ada didalam array
//contoh ya ada warna di dalam array.

$warna = ["Merah", "Putih", "Hijau", "Biru", "Oren", "Ungu"]; //kita buat variable yang isi array
    foreach ($warna as $key => $value) {
        //echo $value;
        echo $key . " " . $value . " ";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // Bisa gini juga
    foreach ($warna as $value) {
        echo $value . "<br>";
    }

    //penjalasanya 
    //as key itu =  index ya dari 0, 1, 2
    //value = itu  nilai dari array tersebut.