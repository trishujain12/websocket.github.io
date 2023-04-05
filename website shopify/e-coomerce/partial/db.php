<?php
session_start();
$server="localhost";
$user="root";
$password="";
$db="E-commercelDB";

$con=mysqli_connect($server,$user,$password,$db);
if(!$con){
die("OOps not connected".mysqli_error($con));
}
?>