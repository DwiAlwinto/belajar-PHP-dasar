<?php
  session_start();
  if (isset($_SESSION["login"]) == false) {
    header("location:login.php");
  }

  // session_unset();
  // session_destroy();
