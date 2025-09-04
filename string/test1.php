<?php
$my_str = 'World';
echo "Hello, $my_str!<br>";      // Displays: Hello World!
echo 'Hello, $my_str!<br>';      // Displays: Hello, $my_str!
echo '<pre>Hello\tWorld!</pre>'; // Displays: Hello\tWorld!
echo "<pre>Hello\tWorld!</pre>"; // Displays: Hello   World!
echo 'I\'ll be back';            // Displays: I'll be back
?>

<hr>

<?php
$userPassword = "Abc1234";

echo strlen($userPassword);
echo "<br>";


if (strlen($userPassword) <= 6) {
    echo "Weak Password!"; 
} else {
    echo "Strong Password";
}

?>

<hr>

<?php
$name = "Danish Ariff Bin Mohd Zamani";

echo "$name";
echo "<br>";
echo strlen($name);
echo "<br>";

?>

<hr>

<?php
echo strpos("Hello world!","wo");
?>

<hr>

<?php
$nama = "Mohd Zamani";

echo "$nama";
echo "<br>";
echo strpos("$nama","Mo");
echo "<br";
?>

<hr>
<hr>

<?php
$userPassword = "Abc1234";

echo strlen($userPassword);
echo "<br>";


if (strlen($userPassword) <= 6) {
    echo "Weak Password!"; 
} else {
    echo "Strong Password";
}

echo "<hr><h3>strpos</h3>";

$file = "mydocument.docx";
echo "File/Name - $file <br>";

echo strpos($file,"pdf");

echo "<br>";

if (strpos($file,"pdf") || strpos($file,"docx")){
    echo "valid file format";
} else {
    echo "invalid file format";
}
echo "<br>";

?>

<hr>

<?php 
echo strstr("Hello world!","world");
?>

<hr>

<?php

echo "<h3>strstr</h3>";

$email = "aaa@psp.edu.my";

$checkDomain = strstr($email,"@");

echo $checkDomain; "<br>";
echo "<br>";

if ($checkDomain !== "@psp.edu.my")
{
    echo "Please use official email";
} else {
    echo "Success";
}


?>

<hr>

<?php
echo substr("Hello world!",6,-1);
?>

<hr>

<?php
echo "<h3>substr</h3>";

$nric = "050402070307";

$year = substr($nric, 0,2);
$month = substr($nric,2,2);
$day = substr($nric,4,2);
$tempatlahir = substr($nric,6,2);

echo "NRIC : ".$nric ."<br>";
echo "Tahun : ".$year ."<br>";
echo "Bulan : ".$month ."<br>";
echo "Hari : ".$day ."<br>";

echo "Kod Tempat : ".$tempatlahir . "<br>";

if ($tempatlahir === "02") {
    $negeri = "Johor";
} elseif ($tempatlahir === "07"){
    $negeri = "Penang";
}

echo "Negeri : ".$negeri ."<br>";

?>



