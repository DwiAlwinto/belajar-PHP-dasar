<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<style>
  
    label{
        display: block;
    }
</style>

<body>
    <h3>Login Siswa Baru</h3>
    <!-- kalau buat pake get query string ya terlihat di url link ini berbahaya -->
    <!-- <form action="proses.php" method="get">   -->
    
    <!-- kalau menggunakan method post lebih aman karena tidak terlihat query string ya di url -->
    <form action="proses.php" method="post"> 
        <div>
            <label for="username">Username</label>
            <input type="username" name="username" id="username">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <input type="submit" name="buttonKirim" value="Kirim">
        </div>
    </form>

</body>
</html>