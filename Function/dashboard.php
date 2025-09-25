<?php
include "core.php";
if(!isset($_SESSION['isLoggedIn'])){
    header('location: login.php');
    }
?>

<a href="logout.php">Log Keluar</a> <br>

<h3>Selamat Datang <?php echo $_SESSION['fullname']; ?>