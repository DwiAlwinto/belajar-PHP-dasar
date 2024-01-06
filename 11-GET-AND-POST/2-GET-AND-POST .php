<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Get&Post</title>
</head>
<style>
  
    label{
        display: block;
    }
</style>

<body>
    <h3>Input Siswa Baru</h3>
    <!-- action itu = tujuan ya mau kemana. kalau kosong akan di proses di halaman ini saja -->
    <!-- method itu = dimana kita akan menulis get and post -->
    <!-- get = fokus di url browser kalau dimasukan get akan berbeda : http://localhost:3000/11-GET-AND-POST/1-GET-AND-POST.php?nama=Alwin&jurusan=Teknik+Kendaran+Ringan&submit=Kirim ( ini nama ya query string)-->
    <!-- get itu cara kerja ya akan menggirimkan query string ya ke url -->

    <!-- kalau post -->
    <!-- kalau post tidak akan mengirm query string(adanya didalam hati tpi value ya ada, kalau get itu bisa diomongkan langsung) -->

    <!-- <form action="" method="get">  -->
    <form action="" method="post"> 
        <div>
            <label for="">Nama</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div>
            <label for="jurusan">jurusan</label>
            <input type="text" name="jurusan" id="jurusan">
        </div>
        <div>
            <input type="submit" name="buttonKirim" value="Kirim">
        </div>
    </form>

    
    
    <!-- kita bisa menampung get and post di variable -->
    <!-- <?php
        $nama = $_POST["nama"];
        $jurusan = $_POST["jurusan"];

        echo $nama;
        echo "<br>";
        echo $jurusan;
    ?> -->


    <!-- kalau pesan warning seperti dibawah ini  -->
    <!-- PHP Warning:  Undefined array key "nama" in /opt/lampp/htdocs/belajarphp/11-GET-AND-POST/1-GET-AND-POST.php on line 50 -->
    <!-- PHP Warning:  Undefined array key "jurusan" in /opt/lampp/htdocs/belajarphp/11-GET-AND-POST/1-GET-AND-POST.php on line 52 -->
    <!-- Penjelasan nya :
                engga kenala nama ini dan jurusan ini. karena kita belum bisa mengisi nam and jurusan tapi sudah di echo aja nama dan jurasan ya kaya sok kenal gitu.
                kalau  diketik ulang lagi tidak ada warning lagi.
                cara menagatasi nya menggunakan method warning ini :
                menggunakan method bawaan php isset()
                isset() = apakah sudah ke set atau belum
    -->
    <!-- method GET-->
    <!-- <?php
        if (isset($_GET["buttonKirim"])) {
            $nama = $_GET["nama"];
            $jurusan = $_GET["jurusan"];

            echo $nama;
            echo "<br>";
            echo $jurusan;
        }
    ?> -->

    <?php
        if (isset($_POST["buttonKirim"])) {
            $nama = $_POST["nama"];
            $jurusan = $_POST["jurusan"];

            echo $nama;
            echo "<br>";
            echo $jurusan;
        }
    ?>
    


    


</body>
</html>