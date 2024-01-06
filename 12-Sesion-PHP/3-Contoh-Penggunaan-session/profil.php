<?php 
    session_start();
        if(isset($_SESSION["login"]) == true ) { //isset untuk tidak langsung echo,setting dulu
            echo "<h1>Anda berhak mengakses halaman ini.</h1>";
        } else{
            header("location:login.php");
        }
       