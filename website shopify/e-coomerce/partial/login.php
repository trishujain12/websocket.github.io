<?php

include "db.php";
$msg="";
if(isset($_POST["submit"])){
$name=$_POST["name"];
$pswd=$_POST["pswd"];

if(empty($_POST["name"])||empty($_POST["pswd"])){
$msg="its required";
}
else{
$sql="SELECT * FROM `ecom` WHERE `name`='$name' AND `pswd`='$pswd'";
$res=mysqli_query($con,$sql);
$num=mysqli_fetch_assoc($res);

if(mysqli_num_rows($res)>0){
if($pswd==$num["pswd"]){
$_SESSION["login"]=true;
$_SESSION["id"]=$num["id"];
header("location:index.php");
}
else{
  echo "<script>alert('Oops wrong password');</script>";
}
}
else{
  echo "<script>alert('user not registered');</script>";
}

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<style>
    .logcontain{
        display:flex;
        justify-content:center;
      
    }
    body{
      background-color:black;
    }
    #err{
      color:red;
    }
    .tro{
      background-color: rgb(37, 30, 30);
      opacity:0.6;
      color:white;
      padding:40px 45px;
      box-shadow: 0 6px 12px white;
      text-align:center;
      width:500px;
    }
   .hed{
    border-bottom:1px solid white;
    text-align: center;
    font-weight:bold;
  padding:10px 4px;
   }
   label{
    font-size:18px;
   }
</style>
<body>

<!-- header -->
<!-- <?php include "header.php";?> -->




  <!-- login -->
    <div class="logcontain">
    <form method="POST">
      <div class="tro">
      <h3 class="hed">Login</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <span id="err"><?php echo $msg; ?></span>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pswd" class="form-control" id="exampleInputPassword1">
    <span id="err"><?php echo $msg; ?></span>
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