<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Post</title>
</head>
<style>
  
    label{
        display: block;
    }
</style>

<body>
    <h3>Input Siswa Baru</h3>

    <form action="proses.php" method="post"> 
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

</body>
</html>