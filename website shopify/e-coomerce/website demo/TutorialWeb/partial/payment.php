<?php
$showAlert=false;
$showErr=false;
$msg="";
include "db.php";
if(isset($_POST["submit"])){

 $name=$_POST["name"];
 $cn=$_POST["crd"];
 $ex=$_POST["exp"];
 $cc=$_POST["cvc"];

 if(empty($_POST["name"])||
 empty($_POST["crd"])||
 empty($_POST["exp"])||
 empty($_POST["cvc"])
 ){
$msg="its required";
 }
 else{
    $sql="INSERT INTO `payment`(`cardno`, `cardholder`, `Expdate`, `cvv`) VALUES ('$cn','$name','$ex','$cc')";
    $result=mysqli_query($con,$sql);
    if($result){
      $showAlert=true;
      header("location:video.php");
    }
    else{
       $showErr=true;
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
    <link rel="stylesheet" href="css/payment.css">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>
<style>
    img{
        width:200px;
        height:200px;
        margin-left:30%;
        margin-bottom:5%;
        
    }
    .container{
     width:500px;
  box-shadow:9px 9px 9px grey;
    }
    
   .h8{
    font-weight: bold;
   font-style: italic;
   text-shadow:0 3px 3px grey;
   
   }
   
    #err{
        color:red;
    }
</style>

<body style="background-color:black;opacity:0.8;">

<?php
  if($showAlert){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Successfully!</strong> You payment sucessfully done.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
  elseif ($showErr){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Oops!</strong> You payment not done .
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  ?>



    <form  method="post">
        <div class="container p-0" style="text-align:center;">
            <div class="card px-4">
                <p class="h8 py-3" style="color:black;text-align:center;font-size:30px;">Payment Details</p>
                <img src="img/qrcode.jfif" alt="" srcset="">
                <div class="row gx-3">
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <p class="text mb-1" style="color:black; font-size:20px;">Person Name</p>
                            <input class="form-control mb-3" name="name" type="text" placeholder="Name">
                       <span id="err"><?php echo $msg; ?></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <p class="text mb-1" style="color:black;font-size:20px;">Card Number</p>
                            <input class="form-control mb-3" name="crd" type="text">
                            <span id="err"><?php echo $msg; ?></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column">
                            <p class="text mb-1" style="color:black;font-size:20px;">Expiry</p>
                            <input class="form-control mb-3" name="exp" type="text" placeholder="MM/YYYY">
                            <span id="err"><?php echo $msg; ?></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column">
                            <p class="text mb-1" style="color:black;font-size:20px;">CVV/CVC</p>
                            <input class="form-control mb-3 pt-2 " name="cvc" type="password" placeholder="***">
                            <span id="err"><?php echo $msg; ?></span>
                        </div>
                    </div>
                    <div id="tp" class="col-12">
                        <button style=" padding:10px 12px;width:450px;background-color: pink;opacity: 0.6;" type="submit" name="submit">Pay 4000</button>

                    </div>
                </div>
            </div>
        </div>


    </form>
   


</body>

</html>