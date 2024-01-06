<?php 
//! Comparison Operator atau perbandingan (untuk kondisional perulangan)
//hasilnya bollen gunakan var_dump()

//1. Equal       (==) ini nilai ya sama aja
//2. Identical   (===) ini nilai dan type ya semuaya harus sama
//3. Not Equal (!= atau < >) tidak sama dengan atau bisa gunakan tanda < > ini nilai ya harus ada yang true 1 
//4. Not Identical (a!==b) ini sama dengan ya dua
//5. Grater than (a > b) a lebih besar b
//6. Grater than Equal (a >= b)
//7. Less than (a < b)
//8. Less or Equal ( a <= b)

// ! 1. Equal
    // $a = 4;
    // $b = 9;
    // var_dump($a==$b); //ini hasilnya akan false karena nilai ya beda
    // $a = 9;
    // $b = 9;
    // var_dump($a==$b); //ini hasilnya akan true karena nilai ya sama


//! 2. Identical : 
    // $a = 100; //! equal (sama dengan) 
    // $b = "100";
    // var_dump($a==$b); //!ini nilai ya akan true karena nila ya sama.

    // $a = 100;
    // $b = "100";
    // var_dump($a===$b); //!ini nilai ya akan false karena harus nila ya sama tapi type beda yang 1 integer yang 1 lagi string

    //! Not Equal ini kebalikan equal
    // $a = 5;
    // $b = "5";
    // var_dump($a != $b); //ini akan false hasilnya karena nilai ya sama.

    // $a = 5;
    // $b = "5";
    // var_dump($a !== $b); //ini akan true hasilnya karena nilai ya sama tapi type ya beda inget kalau === itu type dan nilai harus sama


    //! Grater than lebih besar 
    // $a = 7;
    // $b = 7;
    // var_dump($b > $a); //ini akan false karena nilai ya sama tidak termasuk.


    //! Grater than Equal (lebih besar sama dengan)
    // $a = 6;
    // $b = 6;
    // var_dump($b >= $a); //ini true karena nilai ya sama.



    //! Less than (a < b)
    // $a = 3;
    // $b = 3;
    // var_dump($a < $b); //nilai yang akan false karena nilai yang sama tidak termasuk
    // echo "<br>";

    // //! Less or Equal ( a <= b)
    // $a = 3;
    // $b = 3;
    // var_dump($a <= $b); //nilai yang akan true karen di ambil nilai ya sama termasuk beda dengan less than
    echo "<br>";
    
