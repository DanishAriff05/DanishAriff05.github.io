
<?php
include "includes.php";   

echo '<h1> Welcome to ' .NAMA_SYSTEM. '</h1>';



$nama = "Danish";

$body = "<h3>";
$body .= "Hi $nama , you recently requested to reset the password for your account. <br>";
$body .= "Click the link below to proceed.<br>";
$body .= "Thank You";
$body .= "</h3>";

echo $body;
?>

<hr>

<h3>Condition Statement</h3>
<h4>If Statement</h4>
<?php
//variable declaration
$t = date("H");
// echo $t;
// echo "<br>";

//if condition
if ($t < "8") {
  echo "Have a good day!";
}

else {
    echo "Good Morning!";
}
?>

<hr>
<?php
$dummyUsername = "admin";
$dummyPassword = "12345678";

if (isset($_POST['btnSubmit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == $dummyUsername && $password == $dummyPassword) {
        echo "Access Granted";
    } else {
        echo "Access Denied";
    }
    
}

?>

<h3>Login Form</h3>

<form method="POST" action="string.php">
<p>
    Username : <input type="text" name="username"> <br>
    Password : <input type="password" name="password"> <br><br>
    <button type="submit" name="btnSubmit">Submit</button>
</p>
</form>

<hr>

<h3>Semak Kelayakan Mengundi</h3>

<form method="POST" action="string.php">
Nama : <input type="text" name="nama"><br>
Umur : <input type="number" name="umur"><br>
Kerakyatan : <input type="text" name="warga"><br>

<button type="submit" name="btnSemak">Semak</button>

<?php
if(isset($_POST['btnSemak'])) {
    $umur = $_POST['umur'];
    $warga = $_POST['warga'];
    $nama = $_POST['nama'];

    if ($umur >= 18 && $warga == "MY") {
        echo "<script>alert('Tahniah $nama . Anda layak untuk mengundi.')</script>";
    } else {
        echo "Maaf $nama . Anda tidak layak mengundi";
    }
}


?>