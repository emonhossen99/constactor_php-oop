<?php
include("class.php");

$getFunction = new Connection("localhost","root","","mamurjor");
$getResult = $getFunction -> getConnection();
if($getResult){
    echo "success";
}else{
    echo 'Error';
}


?>