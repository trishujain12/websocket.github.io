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
     <script src="https://kit.fontawesome.com/ef11279fa4.js" crossorigin="anonymous" type="text/javascript"></script>
</head>
<style>
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
.top{
    text-align:center;
}
.tp1 h3{
    font-size:40px;
    font-weight:bold;
    text-shadow:2px 2px 2px grey;
    padding:10px 15px;
}
.tp1 h3:hover{
  opacity:0.6;
}
.tp1 li a{
  border-bottom:1px solid red;
  text-decoration:none;
  padding:5px 10px;
}
.tp1 li:hover{
  opacity:0.8;
}
.tp2 h4{
  margin-top:3%;
  font-weight:bold;
}
.tp2 p{
  margin: 2% 30% 2% 30%;

}
.tp3 h4{
  margin-top:3%;
  font-weight:bold;
}
.tp4 h4{
  margin-top:3%;
  font-weight:bold;
}
.tp5 h4{
  margin-top:3%;
  font-weight:bold;
}

</style>
<body style="background-color:black;color:white;">
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

<!-- body project -->

<div class="top">
<div class="tp1">
<h3>Project</h3>

    <li><a href="down.php?file=Project" style="color:red;"> Download this project (developed using VS code) </a></li>
  

</div>

<div class="tp2">
<h4>Objective/ Vision</h4>
<p>It maintains the information about the vehicle installed in a transport company with sufficient detail of vehicle?s owner, contact no. and Insurance detail and all the available transport sevices provided by the company</p>
</div>

<div class="tp3">
<h4>Users of the System</h4>
<li>Admin</li>
<li>Manager of each branch</li>
<li>Normal visitors</li>
</div>

<div class="tp4">
<h4>Tools and Technologies to be used</h4>

    <li>Use any IDE to develop the project</li>
    <li>Xampp for the server.</li>

</div>

<div class="tp5">
<h4>Software Requirement to run this project
</h4>
<p>To get detail explanation about project download the document file. It includes snapshots with explanation.</p>
</div>
</div>
</body>
</html>