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
            <input type="submit" name="submit" value="Kirim">
        </div>
    </form>
    
    <!-- cara melihat get and post yang kita kirimkan (value) -->
    <!-- kalau get $_GET -->
    <!-- <?php 
        echo $_GET["nama"];
        echo "<br>";
        echo $_GET["jurusan"];
    ?> -->

    <!-- kalau post : $_POST  -->
    <!-- tidak ada query string(tapi didalam hatinya ada value di dalam post ini) -->
    <?php 
        echo $_POST["nama"];
        echo "<br>";
        echo $_POST["jurusan"];
    ?>
    


</body>
</html>