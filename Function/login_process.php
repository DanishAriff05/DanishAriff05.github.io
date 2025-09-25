<?php
include "core.php";
$username = $_POST['username'];
$password = $_POST['password'];

//setting a cookie
setcookie("username", $username, time()+3600);
setcookie("password", $password, time()+3600);

//echo "<pre>Cookie";
//var_dump($_COOKIE);
//echo "</pre>";

//setting a session
$dummyUsername = "admin";
$dummyPassword = "password123";

if ($username == $dummyUsername && $password == $dummyPassword){ 
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
$_SESSION['fullname'] = "DANISH";
$_SESSION['isLoggedIn'] = true;

header('location: dashboard.php');
die;

} else {
    echo "Wrong username & password";
    $_SESSION['_msg'] = "Wrong Username & Password";
    header('location: login.php');
    die;
}



?>