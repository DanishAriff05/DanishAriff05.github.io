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