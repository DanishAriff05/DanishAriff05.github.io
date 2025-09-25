<?php
include "function.php";


$nama = $_POST['nama'];
$nric = $_POST['nric'];



if($nama && $nric){
    if(strlen($nric) == 12){
        echo $nama."<br>";
        checkNRIC($nric);

        echo"<pre>";
        var_dump($_POST);
        echo"</pre>";
    }else{
        echo"plese enter the logic number for IC";
    }
}else{
    echo"Please Enter Your Name And IC";
}

?>

