<?php
 
     /**
    * NIM   : 2257401057
    * Nama  : Sofiatul Ulya
    * Kelas : MI22B
    */

    session_start();
    if (!isset($_SESSION['tbl_user'])){
        $_SESSION['error'] = "Login dulu dongg!!!";
        header('location: login.php');
    }

?>