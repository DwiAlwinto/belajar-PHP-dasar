<?php 
    //kebanykalan function me return hasilnya saja (agar dipakai berulang-ulang).
    function hitungPendapatan($gajih, $tunjangan){
        $hasil = $gajih + $tunjangan;
        return $hasil; //guna ya return bisa digunakan berkali-kali
    }

    function hitungPengeluaran($kontrakan, $konsumsi){
        $hasil = $kontrakan + $konsumsi;
        return $hasil;
    }

    function sisaUang($pendapatan, $pengeluaran){
        $hasil = $pendapatan - $pengeluaran;
            return $hasil;
    }
    $pendapatanYuli = hitungPendapatan(4000000, 1500000);
    $pengeluaranYuli = hitungPengeluaran(1000000, 1300000);
    $sisaUangYuli = sisaUang($pendapatanYuli, $pengeluaranYuli);
    echo "Sisa uang yuli dalam 1 bulan " . $sisaUangYuli;
