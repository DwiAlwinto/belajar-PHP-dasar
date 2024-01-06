<?php 
    // ! Switch Case
    // switch ($variable) { //$variable untuk uji pembanding
    //     case 'value': //case itu jika 'value ya' 
    //         # ini hasil yang sistem berikan
    //         break;

    //     case 'value': //ini bisa tambahkan case lain
    //         # code...
    //         break;
        
    //     default:  //default ini nilai yang tidak terpenuhi mulai dari atas
    //         # hasil default = ini tidak terpenuhi yang diatas makan nilai ya ini
    //         break;
    // }

    // jika umur pengungjung kurang dari 6 tahun, maka dapat diskon 50%.
    //Jika umur pengunjung 7-15 Tahun, maka dapat diskon 30%.
    //Selain itu tidak dapat diskon.
    
    $umur = 22 ;
    switch ($umur) {
        case ($umur < 6): //ini bisa dipakai ( )
            echo "umur anda $umur tahun, Selamat anak anda mendapaykan diskon 50%";
            break;
        case ($umur >= 7 and $umur <= 15):
            echo "Umur Anda $umur Tahun, Selamat Anda medapatkan diskon 30%";
            break;

        default:
            echo "Umur anda $umur Tahun, Mohon Maaf Anda belum dapat DISKON";
            break;
    }