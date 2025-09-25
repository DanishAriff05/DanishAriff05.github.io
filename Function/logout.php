<?php
include "core.php";

session_destroy();

$_SESSION['_msg'] = "Logout Succesful";

header('location: login.php');
?>