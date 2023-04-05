<?php
 
 $showAlert=false;
 $showError=false;
 if(isset($_POST["fname"])){
   
    include "partial/_dbconnect.php";
    $username=$_POST["fname"];
    $email=$_POST["email"];
    $mno=$_POST["no"];
    $pswd=$_POST["pswd"];
    $cpswd=$_POST["cpswd"];
    $exits=false;
    
    
       if(($pswd==$cpswd) && $exits==false){
          $sql="INSERT INTO `inct` (`fullname`, `email`, `mobileno`, `pswd`, `cpswd`) VALUES ('$username', ' $email', '$mno', '$pswd', '$cpswd')";
          $result=mysqli_query($con,$sql);
            if($result){
                $showAlert=true;
              }   
       }  
      else{
        $showError="password does not match";
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

    .error {
        color: red;
    }

    .modal-content {
        background-color: black;
        opacity: 0.8;
        color: white;
    }

    button {
        margin-right: 10px;
    }

    input[type=text] {
        width: 50%;
        padding: 10px 10px;
        margin-top: 2%;
        box-sizing: border-box;
    }
    </style>
</head>

<body>
    <!-- database -->
    <?php


       if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Successfully !</strong> Now your account created
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
     if($showError){
         echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
         <strong>Oops !</strong> '. $showError .'
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
     }
    ?>
    <!-- Modal -->
    <div class="modal fade" id="singupModal"  aria-labelledby="singupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <legend style="text-align:center;">Registration</legend>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form  class="top" method="POST">
                        <fieldset class="btm">

                            <div class="mid">
                                <label for="hed">Full Name</label><i class="fa-solid fa-file-signature"></i><br>
                                <input type="text" class="exp" id="fname" name="fname" require> <span
                                    class="error">*</span><br>
                                <label for="hed">Email</label><i class="fa-solid fa-envelope"></i><br>
                                <input type="text" class="exp" id="email" name="email" require> <span
                                    class="error">*</span><br>
                                <label for="hed">Mobile No</label><i class="fa-solid fa-mobile-screen"></i><br>
                                <input type="text" class="exp" id="no" name="no" maxlength="10" require> <span
                                    class="error">*</span><br>
                                <label for="hed">Password</label><i class="fa-solid fa-key"></i><br>
                                <input type="text" class="exp" id="pswd" name="pswd" maxlength="6" require> <span
                                    class="error">*</span><br>
                                <label for="hed">Confirm Password</label><br>
                                <input type="text" class="exp" id="cpswd" name="cpswd" maxlength="6" require> <span
                                    class="error">*</span><br>
                            </div>
                            <button type="submit"  class="btn btn-primary">Submit</button>
                            <button type="submit" class="btn btn-primary">cancel</button>
                        </fieldset>
                    </form>
                </div>

            </div>
        </div>

    </div>
</body>

</html>