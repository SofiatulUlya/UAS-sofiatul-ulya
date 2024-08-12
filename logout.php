<?php
     
    /**
    * NIM   : 2257401057
    * Nama  : Sofiatul Ulya
    * Kelas : MI22B
    */

    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>