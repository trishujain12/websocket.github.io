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
    .ty{
        color:white;
        display:flex;
        justify-content:center;
        margin-top:10%;
        padding:20px 25px;   
    }
    table{
        box-shadow:3px 3px 3px grey;
    }
    th{
        font-size:25px;
        text-shadow:3px 3px 3px grey;
    }
    table,th,tr,td{
        padding:20px 25px;
        border:1px solid white;
        
    }
    .ss{
        color:white;
        border:1px solid red;
        padding:10px 12px;
    }
    .ss2{
        color:white;
        border:1px solid green;
        padding:10px 12px;
    }
    .ss:hover{
        background-color:red;
        opacity:0.8;
        color:white;
    }
    .ss2:hover{
        background-color:green;
        opacity:0.8;
        color:white;
    }
    .jr,img{
  width:100px;
  height:70px;
}
.tp,a{
  text-decoration:none;
  color:black;
}
.nav-link:hover{
  border-bottom:1px solid black;
}
.bts{
  display:flex;
  justify-content:center;
  margin-left:50%;
  padding:15px 20px;
  background-color: rgb(16, 10, 39);
  border-right:1px solid cyan;
  border-bottom:1px solid cyan;
  
}
.bts:hover{
  opacity:0.6;
  box-shadow:0 3px 3px cyan;
 
}

</style>
<body style="background-color:black;">
<!-- header -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="jr" src="shop.jpg" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Gallery
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="image.php">Website Gallery</a></li>
            <li><a class="dropdown-item" href="tmpgallery.php">Template Gallery</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="payment.php">Payment</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Contact
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Vaishnavi Mankar <br> G-mail : mankarv231@gmail.com</a></li>
  
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
       
        <button class="btn btn-outline-success" type="submit" class="tp"><a href="logout.php">Logout</a></button>
      </form>
    </div>
  </div>
</nav>
<?php include "db.php";
if(isset($_GET["dgid"])){
$id=$_GET['dgid'];
$sql="SELECT*FROM `webgallery` WHERE `id`='$id'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
    $cat=$row["name"];
    $id=$row["id"];
    $img=$row["img"];
    $rs=$row["price"];
    echo '<div class="ty">
    <table>
        <tr>
        <th>Item</th>
    <th>Price</th>
     <th>Action</th>
     <th>Add Item</th>
        </tr>
        <tr>
            <td style="font-size:18px;text-align:center;font-weight:bold;">'.$cat.',<br>  <img class="pc" src="'.$img.'"  style="width:300px;height:100px; object-fit: scale-down;"> </td>
            <td>'.$rs.'</td>
            <td><a class="ss" href="delete.php?order_del='.$id.'">Delete</a></td>
            <td><a class="ss2" href="index.php">Add Item</a></td>
            </tr>
        </table>
    </div>';
}
}
?>
<?php
if(isset($_GET["ctid"])){
$id=$_GET['ctid'];
$sql="SELECT*FROM `tmpgallery` WHERE `id`='$id'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
    $cat=$row["name"];
    $id=$row["id"];
    $img=$row["img"];
    $rs=$row["price"];
    echo '<div class="ty">
    <table>
        <tr>
        <th>Item</th>
    <th>Price</th>
     <th>Action</th>
     <th>Add Item</th>
        </tr>
        <tr>
            <td style="text-align:center;font-size:18px;font-weight:bold;">'.$cat.'<br>  <img class="pc" src="'.$img.'"  style="width:300px;height:100px;object-fit: scale-down;">  </td>
            <td>'.$rs.'</td>
            <td><a class="ss" href="delete.php?order_del='.$id.'">Delete</a></td>
            <td><a class="ss2" href="index.php">Add Item</a></td>
            </tr>   
    </table>
    </div>';
}
}
?>
<button class="bts" style="color:white;"><a href="payment.php">Go To Payment</a></button>

</body>
</html>