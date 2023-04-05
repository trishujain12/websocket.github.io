<?php

include "db.php";
$msg="";
$nameErr=$pswdErr=$emailErr=$cpswdErr="";
if(isset($_POST["submit"])){
$name=$_POST["name"];
$email=$_POST["email"];
$pswd=$_POST["pswd"];
$cpswd=$_POST["cpswd"];

if(empty($_POST["name"]) ||
empty($_POST["email"]) ||
empty($_POST["pswd"]) ||
empty($_POST["cpswd"])
){
$msg="This field is required";
}
else{
$check_Email=mysqli_query($con,"SELECT * FROM `tut2` WHERE `email`='$email'");
$check_name=mysqli_query($con,"SELECT * FROM `tut2` WHERE `name`='$name'");
}

if($pswd!=$cpswd){
$cpswdErr="Password does not match";
}
elseif(strlen($pswd)<6){
$pswdErr="Password length must be 6";
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
$emailErr="Invalid Email";
}
elseif(mysqli_num_rows($check_name)>0){
echo "<script>alert('Name already exits');</script>";
}
elseif(mysqli_num_rows($check_Email)>0){
echo "<script>alert('Email already Exits');</script>";
}
else{
$sql="INSERT INTO `tut2`(`name`, `email`, `pswd`, `cpswd`) VALUES ('$name','$email','$pswd','$cpswd')";
$result=mysqli_query($con,$sql);
echo "<script>alert('Sucessfully ac created');</script>";
header("location:login.php");

}


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ef11279fa4.js" crossorigin="anonymous" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<style>
  body{
    background-color:black;
  }
    .containFrm{
        display:flex;
        justify-content:center;
    }
    #Err{
      color:red;
    }
    .tro{
      background-color: rgb(37, 30, 30);
      opacity:0.6;
      color:white;
      padding:40px 45px;
      box-shadow: 0 6px 12px white;
    }
   .hed{
    border-bottom:1px solid white;
    text-align: center;
    font-weight:bold;
  padding:10px 4px;
   }
</style>
<body>
  <!-- header -->
  <!-- <?php include "header.php" ;?> -->

<!-- register -->
<div class="containFrm">
    <form method="POST">
   <div class="tro">
    <h3 class="hed">Registration</h3>
    <div class="mb-3">
    <label for="name" class="form-label">Full Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputPassword1">
  <span id="Err"><?php echo $msg; ?></span>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    <span id="Err"><?php echo $msg; echo $emailErr; ?></span>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pswd" class="form-control" id="exampleInputPassword1">
    <span id="Err"><?php echo $msg; echo $pswdErr; ?></span>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" name="cpswd" class="form-control" id="exampleInputPassword1">
    <span id="Err"><?php echo $msg; echo $cpswdErr;?></span>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

  </div>
    </form>
    </div>
</body>
</html>