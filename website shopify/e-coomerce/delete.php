<?php
include("partial/db.php"); //connection to db



// sending query
mysqli_query($con,"DELETE FROM `webgallery` WHERE `id` = '".$_GET['order_del']."'"); 
header("location:cart.php"); 

?>