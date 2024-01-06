<?php
//Scope variable ada : Global, Local dan Static.
//!ini Global Scope
echo "INI CONTOH GLOBAL VARIABLE";
echo "<br>";
$_Global_Panjang = "5";  //Global Variable diluar function
$_Global_Lebar = 10;
$tinggiJalan = "1 meter";  //ini global bisa dipanggil di local / didalam function

echo 'Panjang adalah : ' .$_Global_Panjang;  //simbol . titik untuk concet menyambung code (kalau di js pake simbol +)
echo "<br>";
echo 'Lebarnya adalah :' . $_Global_Lebar;

function functionVariable () {
    //kalau manggil global ya disini pasti akan error
    //echo 'ini dipanggil didalam function : ' . $_Global_Lebar; //ini akan error
}
functionVariable(); //ini panggil function

echo "<br>";
echo "<br>";




echo "INI CONTOH LOCAL VARIABLE DIDALAM FUNCTION";
echo "<br>";
//! ini local variable
function localVariable (){
    global $tinggiJalan; //cara panggil variable  global dengan menulisa global seblum variable nya (kalau ada perubahan lebih gampang di ubah ya diatas global variable)

    $panjangJalan = 10; //ini local variable
    $lebarJalan = 20;
    $hasil = $panjangJalan + $lebarJalan;
    echo 'Hasil dari luas jalan : ' .$hasil .' dan tinggi jalan : ' .$tinggiJalan;
}
localVariable();

echo "<br>";
echo "<br>";
echo "<br>";
echo "MATERI TENTANG STATIC VARIABLE MENGGUNAKAN : static";
echo "<br>";

//! ini static Variable (mempertahakn nilai variable tidak bisa di hapus)
 function staticVariable(){
    //$nilai = 1;
    static $nilai = 1;
    echo $nilai;
    $nilai++; // $x + 1 = 2,  noted : ini hasilnya akan 1 bukan 2 karena nilai aku ulang dari awal jika belum dikasih static.
 }
 staticVariable();
 echo "<br>";
 staticVariable(); //ini hasinya akan 2 karena sudah menggunakan static diatas staticVariable();
 echo "<br>";
 staticVariable();






