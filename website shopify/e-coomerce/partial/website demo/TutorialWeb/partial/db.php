<?php

$server="localhost";
$user="root";
$password="";
$db="TutorialDB";

$con=mysqli_connect($server,$user,$password,$db);
if(!$con){
die("OOps not connected".mysqli_error($con));
}


?>