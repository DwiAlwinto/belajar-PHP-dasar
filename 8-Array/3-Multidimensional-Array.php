<?php
// ! Multidimensional Array (ada array didalam array lebih dari satu).

//! contoh database :
//1. Nama : Budi
//     kelas = 11
//      Jurusan = IPA
//2. Nama : Sinta
//     kelas = 11
//      Jurusan = IPS
//3. Nama : Dinda
//     kelas = 11
//      Jurusan = IPS

// !Associative Array
//  $siswa = [ //ini kalau database di terjemahkan jenis ya array
//     ["nama" => "Budi", "kelas" => 11, "Jurusan" => "IPA"], //index ke 0 (nama itu key ya dan budi itu value key ya)
//     ["nama" => "Sinta", "kelas" => 11, "Jurusan" => "IPS"], //index ke 1
//     ["nama" => "Dinda", "kelas" => 11, "Jurusan" => "IPS"], //index ke 2
//  ];

// //echo count($siswa); //count ini untuk hitung jumlah array
// echo $siswa[0]["nama"];
// echo "<br>";
// echo $siswa[0]["kelas"];
// echo "<br>";
// echo $siswa[0]["Jurusan"];



 $siswa = [ //contoh  Multidimensional Array 
    [ "Budi", 11,  "IPA"], //index ke 0 (nama itu key ya dan budi itu value key ya)
    [ "Sinta", 11,  "IPS"], //index ke 1
    [ "Dinda", 11,  "IPS"], //index ke 2
 ];

echo "Jumlah array ada : " . count($siswa); //count ini untuk hitung jumlah array
echo "<br>";
echo $siswa[0][0];
echo "<br>";
echo $siswa[0][1];
echo "<br>";
echo $siswa[0][2];