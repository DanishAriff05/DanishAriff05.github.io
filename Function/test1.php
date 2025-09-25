<?php
function writeMsg() {echo"Hello world!";}writeMsg();// call the function
?>

<hr>

<?php
// Defining function
function whatIsToday(){
    echo "Today is " . date('l', mktime(0,0,0,9,11,2025));
}
// Calling function
whatIsToday();
?>

<hr>

<?php
// Defining function
function getSum($num1 = null, $num2 = null){
  $sum = $num1 + $num2;
  echo " Sum of the two numbers $num1 and $num2 is : $sum.";
}
 
// Calling function
getSum(10, 20);
getSum();
?>

<hr>


<?php

function familyName($fname) 
{echo"$fname Mokhtar.<br>";}
familyName("Nurhidayah");
familyName("Norazlan");
familyName("Safuan");
familyName("Zulaiha");
familyName("Wardah");

?>

<hr>

<?php
function familyNameBorn($fname, $year) {
  echo "$fname Mokhtar. Born in $year <br>";
}

familyNameBorn("Nurhidayah Binti", "1984");
familyNameBorn("Norazlan Bin", "1985");
familyNameBorn("Safuan Bin", "1987");
?>

<hr>

<?php 
function kiraOT($harga,$jam){
$total=$harga*$jam;
echo"Jumlah OT bagi $jam jam ialah $total";}
kiraOT(55,10);// call the function
?>

<hr>

<?php
// Defining function
function getSum2($num1, $num2){
    $total = $num1 + $num2;
    return $total;
}
 
// Printing returned value
echo getSum2(5, 10);
?>

<hr>

<?php
function checkNRIC($nric){



$year = substr($nric, 0,2);
$month = substr($nric,2,2);
$day = substr($nric,4,2);
$tempatlahir = substr($nric,6,2);
$jantina = substr($nric,11,1);
$kodJantina = substr($nric,-1);


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

if ($kodJantina % 2){
    $jantina = "Lelaki";
} else {
    $jantina = "Perempuan";
}

echo "Negeri : ". $negeri ."<br>";
echo "Jantina : ". $jantina . "<br>";
}


checkNRIC("050402070307");
echo "<br>"
?>

<hr>

<?php
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}
myTest();
myTest();
myTest();
?>



