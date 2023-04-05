<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>
<style>
 
  .card{
 
    float:left;
    box-shadow:0 6px 6px grey;
  }
  .card:hover{
 transform:translateY(-40px);
  }
  .op{
   width:100%;
    position:bottom;
  }
</style>
<body>

<?php

include "db.php";

$sql="SELECT * FROM `tutcard`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
    $cat=$row["name"];
    $id=$row["id"];
    $img=$row["img"];
    $desc=$row["desc"];
    echo '<div class="card" style="width: 18rem; margin-left:300px; margin-bottom:50px">
    <img src="'.$img.'" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><a href="partial/payment.php?catid=' .$id. '">' .$cat. '</a></h5>
      <p class="card-text">'.$desc.'.</p>
      <a href="partial/payment.php?catid=' .$id. '" class="btn btn-primary">Get Course</a>
    </div>
  </div>';
}

?>

 <!-- Footer
 <div class="lst">
 <footer>
 </div class="op">
            <li><a>Programming Tutorial</a></li>
            <div class="to">
            <ul>
                <li><a href="">1. Php Tutorial</a></li>
                <li><a href="">2. Java Tutorial</a></li>
                <li><a href="">3. Javascript Tutorial</a></li>
                <li><a href="">4. Web development Tutorial</a></li>
            </ul>
            </div>
        </ul>
       
         
    </div>
</footer>
</div> -->
</body>

</html>