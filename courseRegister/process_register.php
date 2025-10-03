<?php
include_once "db_connect.php";

if(isset($_POST['submit'])) {
$username = $_POST['username'];
$fullname = $_POST['fullname'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$isActive = 1;

$sql = "INSERT INTO tblUser (username, fullname, password, dob, isActive) 
        VALUES ('$username', '$fullname', '$password', '$dob', '$isActive')";

if (mysqli_query($conn, $sql)) {
    echo "Success Insert data";
    $_SESSION['_flash'] = ['type' => 'success', 'msg' => 'User Added Succesfully'];
} else {
    echo "Fail insert data";
    $_SESSION['_flash'] = ['type' => 'error', 'msg' => 'Insert Failed : ' . mysqli_error($conn)];
    }
    
    header("Location: index.php");
}

?>