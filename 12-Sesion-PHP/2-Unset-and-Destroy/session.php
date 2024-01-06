<?php
    session_start(); //ini cara pertama untuk start session diketik paling atas. (untuk minta izin dahulu);
    // $_SESSION["nama"] = "Alwin"; //ini cara membua nama sesion
    // echo $_SESSION["nama"];
    // session_unset();
    // echo $_SESSION["nama"]; //ini akan tidak akan dikenali karena suda di hapus.

    //!session destroy
    //$_SESSION["nama"] = "Alwin"; //ini cara membuat nama sesion
    //echo $_SESSION["nama"]; //untuk memanggil

    session_unset(); //perintah hapus sesion
    session_destroy();  //setalah unset kita harus destroy
    //echo $_SESSION["nama"]; //ini akan tidak akan dikenali karena suda di hapus.
   
?>
