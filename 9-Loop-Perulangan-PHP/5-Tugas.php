<?php 

$siswa = [ //ini contoh dari database
    ["nama"=>"Andi", "kelas"=>"11", "jurusan"=>"IPA"],
    ["nama"=>"Rico", "kelas"=>"11", "jurusan"=>"IPS"],
    ["nama"=>"Bella", "kelas"=>"11", "jurusan"=>"TEKNIK"],
    ["nama"=>"Dinda", "kelas"=>"11", "jurusan"=>"Bahassa"],
    ["nama"=>"Alwin", "kelas"=>"11", "jurusan"=>"Programmer"],

    
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar loop</title>
</head>
<style>
    h1{
        margin: auto;
        align-items: center;
    }
    table{
        margin: auto;
        border-collapse: collapse;
    }
</style>
<body>
    <h1>List Siswa Karanggayam</h1>
    <table border=1 >
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
        </tr>
        <!-- <tr>
            <td><?php echo $siswa[0]["nama"]; ?></td>
            <td><?php echo $siswa[0]["kelas"]; ?></td>
            <td><?php echo $siswa[0]["jurusan"]; ?></td>
    
        </tr> -->
<!-- 
        <?php 
            $a = 0;
            while ($a < count($siswa)) {
                    echo "<tr>";
                        echo "<td>". $siswa[$a]["nama"] ."</td>";
                        echo "<td>". $siswa[$a]["kelas"] ."</td>" ;
                        echo "<td>".$siswa[$a]["jurusan"]."</td>";
                    echo "</tr>";
                $a++;
            }
        ?> -->

        <?php
           for ($i=0; $i <  count($siswa); $i++) { 
            echo "<tr>";
                echo "<td>". $siswa[$i]["nama"] . "</td>";
                echo "<td>". $siswa[$i]["kelas"] . "</td>";
                echo "<td>". $siswa[$i]["jurusan"] . "</td>";

            echo "</tr>";
           }
        ?>

    </table>
</body>
</html>
