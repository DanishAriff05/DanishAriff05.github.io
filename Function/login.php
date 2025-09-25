<?php
include "core.php";

if(isset($_SESSION['isLoggedIn'])){
header('location: dashboard.php');
}
?>

<h3>
<?php if (isset($_SESSION['_msg'])){
    echo  $_SESSION['_msg'];
    unset($_SESSION['_msg']);
    

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<form method="post" action="login_process.php">
<table border= "1" width="60%">
    <tr>
        <td>Username</td>
        <td><input type="text" name="username" required></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="password" required></td>
    </tr>
    <tr>
        <td colspan="2"><button type="submit">Login</button></td>
    </tr>

</table>
    
</body>
</html>