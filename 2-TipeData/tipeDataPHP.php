<?php
//! 1. tipe data string ini menggunakan tanda petik ' ' atau " "
    //mengecek type data menggunakan fungsi : var_dump()
    var_dump("Hello World");
    echo "<br>";
    var_dump("100");
    echo "<br>";
    $bebek = 10; 
    echo "ada $bebek berenang  di kolam samping rumah ";  //!wajib menggunakan petik dua " " agar variable ke baca
    // echo 'ada $bebek berenang  di kolam samping rumah';  //ini variable tidak kebaca
    echo "<br>";
    echo "<br>";

//! 2. Tipe data Integer :
    //syarat ya : 1. Angka bulat (bukan berkoma) 2. tidak ada diantara petik dua;
    $Integer = 10; //- atau + masih integer
    $String = "10";
    $bukanInteger = 10.5; //ini float
    var_dump($Integer);
    echo "<br>";
    var_dump($bukanInteger); //ini string
    echo "<br>";
    var_dump($String);

    echo "<br>";
    echo "<br>";

//!  3. Float atau double lawan dari integer.
    //1. angka desimal (angka berkomah).
    //2. tidak di antara tanda petik.
    $typeDataFloat = -10.5;
    var_dump($typeDataFloat);

    echo "<br>";
    echo "<br>";


//! 4. Boolean
    //false / true. //ini akan pas ya dipelajari pas kondisional.
    //kebanyakan dipakai kebutuh di kondisional 
    //$cekNilai_ya = "cek nilai";
    $cekNilai_ya = -1000;

    var_dump(is_int($cekNilai_ya)); //is_int artinya ini untuk cek nilai integer ya bener atau bukan;
    echo "<br>";
    echo "<br>";

//! 5.Type Data Array 
    //Array sering digunakan, karana data yang dikembalikan dari database type data ya array
    //! belajar fungsi2 array win.
    //! contoh array di php :
    $ArrayType_1 = array("Ayam", "Sapi", "Onta", "Kerbau", "Buaya"); //bisa menggunakan ini
    $ArrayType_2 = ["Sate", "Bakso", "Steak", "Balado Kerbau", "Mulut Buaya"];
    var_dump($ArrayType_1);
   echo "<br>";
    var_dump($ArrayType_2);

    echo "<br>";
    echo "<br>";

//! 6. Type Data NULL
      //Null tidak punya nilai:
      $typeDataNull = "Hello World";
      $typeDataNull = null; //matikan ini string akan mati dan nilai ya Null
      var_dump($typeDataNull);





