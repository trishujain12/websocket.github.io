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
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
    display: flex;
    justify-content: space-around;
    float: left;
    margin-left:10%;
    height:500px;
    margin-bottom:2%;
    box-shadow:4px 3px 4px pink;
}
.card:hover{
    transform:translateY(-30px);
}

.price {
    color: grey;
    font-size: 22px;
}
.pc{
    height:200px;
    object-fit:cover;
}
.card button {
    border: none;
    outline: 0;
    padding: 12px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

.card button:hover {
    opacity: 0.7;
}
.mis2{
    text-align:center;
    font-size:40px;
    font-weight:bold;
    color:white;
    text-shadow:0 3px 3px cyan;
   margin-top:2%;
   margin-bottom:1%;
}
</style>
<body>
<div class="mis">
<h3 class="mis2">Website catgeory</h3>
</div>
<?php
include "db.php";
$sql="SELECT*FROM `webgallery`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
    $cat=$row["name"];
    $id=$row["id"];
    $img=$row["img"];
    $rs=$row["price"];
    $desc=$row["desc"];
    echo '<div class="card">
    <img class="pc" src="'.$img.'" alt="Denim Jeans" style="width:100%">
    <p class="price"><b>Rs '.$rs.'</b></p>
    <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
    <p><button><a href="cart.php?dgid='.$id.'">Add to Cart</a></button></p>
  </div>';
}
?>

<div class="mis">
<h3 class="mis2">Templates Design</h3>
</div>
<?php
include "db.php";
$sql="SELECT*FROM `tmpgallery`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
    $cat=$row["name"];
    $id=$row["id"];
    $img=$row["img"];
    $rs=$row["price"];
    $desc=$row["desc"];
    echo '<div class="card">
    <img class="pc" src="'.$img.'" alt="Denim Jeans" style="width:100%">
    <p class="price"><b>Rs '.$rs.'</b></p>
    <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
    <p><button><a href="cart.php?ctid='.$id.'">Add to Cart</a></button></p>
  </div>';
}
?>



</body>
</html>