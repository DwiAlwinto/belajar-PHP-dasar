<?php
//!tugas :
//makan di restoran all you can eat. Tiket masuk 100.000 rupiah, Tentukan tiket masuk yang harus dibayar.
//1. Anak umur 5 Tahun.
//2. Remaja umur 14 Tahun.
//3. Orang dewasa umur 27 Tahun.
//Dengan kententuan :
// jika umur pengungjung kurang dari 6 tahun, maka dapat diskon 50%.
//Jika umur pengunjung 7-15 Tahun, maka dapat diskon 30%.
//Selain itu tidak dapat diskon.

//! Soal 1
$umurAnak = 4;
$tikeMasuk = 100000;
if ($umurAnak < 6) {
    $tikeMasuk = $tikeMasuk * 0.5; //0.5 itu 50%
} else  if($umurAnak >= 7 and $umurAnak <= 15){
    $$tikeMasuk = $tikeMasuk * 0.7; //0.7 ini adalah 70% untuk rumus ya
}
echo "Anak kamu bayar $tikeMasuk ribu";

echo "<br>";
echo "<br>";
echo "<br>";

//! Soal 2
$umurRemaja = 8;
$tiketRemaja = 100000;
if($umurRemaja < 6){
    $tiketRemaja = $tiketRemaja * 0.5;
} else if ($umurRemaja >= 7 and $umurRemaja <= 15){
    $tiketRemaja = $tiketRemaja * 0.7;
}
echo "UMUR ANDA $umurRemaja tahun, anda mendapatan diskon $tiketRemaja ribu";

echo "<br>";
echo "<br>";
echo "<br>";

//! Soal 3
$umurDewasa = 16;
$tiketDewasa = 100000;
if ($umurDewasa < 6) {
    $tiketDewasa = $tiketDewasa * 0.5;
} else if( $umurDewasa >= 7 and $umurDewasa <= 15){
    $tiketDewasa = $tiketDewasa * 0.7;
} else{
    echo "Umur kamu $umurDewasa tahun, maaf belum dapat diskon";
}


//! link balajar
//https://id.percent-table.com/calculate/what-is-30-of-100/
//chat GPT https://chat.openai.com/c/dae092c5-80c8-4177-a83d-bb6fca931d0e


    