<?php
$login=false;
$Err=false;

if(isset($_POST["name"])){
    include "partial/_dbconnect.php";
    $name=$_POST["name"];
    $pass=$_POST["pswd"];

    $sql="SELECT * FROM `inct` WHERE `fullname` = '$name' AND `pswd` = '$pass'";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        while($rows=mysqli_fetch_assoc($result)){
            if(password_verify($pass, $rows["pswd"])){
                $login="Now you loggedin Sucessfully";
            }
        }
    }
    else{
        $Err="Invalid credentials";
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
    <script src="https://kit.fontawesome.com/ef11279fa4.js" crossorigin="anonymous" type="text/javascript"></script>
    <style>
    .btm {
        text-align: center;
    }

    .modal-content {
        background-color: black;
        opacity: 0.8;
        color: white;
    }

    button {
        margin-right: 10px;
        margin-top: 15px;
    }

    input[type=text] {
        width: 70%;
        padding: 7px 7px;
        margin-top: 2%;
        box-sizing: border-box;
    }
    </style>
</head>

<body>
    <!-- database -->
 <?php
 if($login){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Successfully !</strong>'. $login .'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
 }
 if($Err){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Oops !</strong> '. $Err .'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
 }
 ?>
<!-- Modal -->
<div class="modal fade" id="loginModal" aria-labelledby="loginModalLabel" aria-hidden="true">
 <div class="modal-dialog">
     <div class="modal-content">
         <div class="modal-header">
             <legend style="text-align:center;">Login</legend>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
             <form action=""  method="POST">
                 <fieldset class="btm">

                     <div class="mid">
                         <label for="hed">Full Name</label><i class="fa-solid fa-file-signature"></i><br>
                         <input type="text"  id="name" name="name" require> <br>
                      
                         
                         <label for="hed">Password</label><i class="fa-solid fa-file-signature"></i><br>
                         <input type="text"  id="pswd" name="pswd" require> <br>
                       
                     </div>
                     <button type="submit" class="btn btn-secondary">Submit</button>
                     <button type="cancle" class="btn btn-secondary">cancel</button> 
                 </fieldset>
             </form>
         </div>

     </div>
 </div>

</div>
</body>

</html>