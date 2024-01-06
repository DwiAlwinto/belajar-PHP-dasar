<?php
//! Conditional if-else.
   // => Digunakan jika ada 2 kondisi
   
   
   //Makan direstoran All You Can Eat, jika umur pengunjung kurang dari 6 tahun, maka dapat diskon 50%, Selain itu tidak dapat diskon.
   
   $umurPengunjung = 15;
   if ($umurPengunjung < 6) {
        echo "Selamat Anda mendapatkan diskon 50%";
   } else {
    echo "Maaf Anda belum dapat DISKON";
   }
   
