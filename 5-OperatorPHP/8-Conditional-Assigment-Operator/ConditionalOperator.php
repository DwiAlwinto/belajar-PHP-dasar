<?php
    //! Conditional Operator : 
    //! 1. Ternary($x gettype(5) == "integer" ? "integer" : "bukan integer");
    //! 2. Null coalescing ($x = $namaLengkap ?? $namaAja) => x bernilai $namaLengkap jika variable $namaLengkap itu ada dan tidak null. Jika $namaLengkap tidak ada nilanya atau null, makan x bernilai $namaAja 
    // ini bisa digunakan if else

    // ! ini menggunakan Ternanry :
    // gettype() ini function bawaan php untuk mengetahui type;

    // $a = 'Alwin';
    // $x = gettype($a)== "string" ? "tipe string" : "bukan string";
    //     //string adalah kondisi ya. ? = jawab benar ya. : jawabanya jika salah.
    // echo $x;

    // echo "<br>";
    // //sama dengan else
    // if (gettype($a=="integer")) {
    //     echo "Tipe dollar a adalah Integer";
    // } else {
    //     echo "bukan integer";
    // }

    //! Null coalescing
    // $namaLengkap = "Alwin Programmer";
    // $namaPanggilan = "wiin";
    // $x = $namaLengkap ?? $namaPanggilan; // kalau namaLengkap itu ada nilainya, kalau tidak ada nilai ya makan namaPanggilan.
    // echo $x;
    
    // $nilaiA = null; //ini nya nilai ya ada akan muncul diutamakan
    // $nilaiB = 100; //
    // $hasilnya = $nilaiA ?? $nilaiB;
    // echo $hasilnya; //ini yang akan muncul yang ada nilainya. yang ada nilainya adalah $nilaiB.
    
    $nilaiA = 10;
    $nilaiB = 20;
    $hasil = $nilaiA + $nilaiB;
    $total = gettype($hasil) === "integer" ? "ini benar integer" : "salah bukan string";
    echo $total;

    





    

