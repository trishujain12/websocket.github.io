<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ef11279fa4.js" crossorigin="anonymous" type="text/javascript"></script>
</head>
<style>
    iframe{
    margin-left:3%;
    margin-bottom:2%;
    box-shadow:9px 10px 12px grey;
    margin-left:5%;
    }
    iframe:hover{
     transform:translateY(-30px);
      box-shadow:10px 12px 14px grey;
    }
    .slider img{
    height:600px;
}.itr{
  height:50px;
  width:50px;
}

</style>
<body>
<?php include "db.php";?>
    <!-- <?php include "header.php";?> -->
<div class="indcontent">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="itr" src="img/th2.jpg" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="course.php">Course</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="video.php">Video</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Contact
          </a>

        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Vaishnavi Mankar
            <br>  Gmail : vaishnavimankar232@gmail.com
            </a></li>
              
          </ul>
        <li class="nav-item">
          <a class="nav-link" href="payment.php">Payment</a>
        </li>
      
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      
        <button class="btn btn-outline-success"  type="submit"><i class="fa-solid fa-user"></i><a href="logout.php">Logout</a></button>
       
      </form>
    </div>
  </div>
</nav>
</div>

<!-- slider -->

<div class="slider">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Programmen7.jpg" class="d-block w-100" alt="...">
    </div>
   
  </div>
</div>
    </div>
<iframe width="400" height="384" src="https://www.youtube.com/embed/SuLiu5AK9Ps" title="C# Tutorial In Hindi" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe width="400" height="384" src="https://www.youtube.com/embed/FydQ2VDUTZk" title="C++ in One Shot | Revision - 1| Output, Input, Variables, Operators &amp; Conditionals | C++ Course" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe width="400" height="384" src="https://www.youtube.com/embed/eWRfhZUzrAc" title="Python for Beginners – Full Course [Programming Tutorial]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="400" height="384" src="https://www.youtube.com/embed/A74TOX803D0" title="Java Programming for Beginners – Full Course" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <iframe width="400" height="384" src="https://www.youtube.com/embed/zJSY8tbf_ys" title="Frontend Web Development Bootcamp Course (JavaScript, HTML, CSS)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <iframe width="400" height="384" src="https://www.youtube.com/embed/irqbmMNs2Bo" title="C Language Tutorial for Beginners (with Notes &amp; Practice Questions)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe width="400" height="384" src="https://www.youtube.com/embed/HVjjoMvutj4" title="Web Development Complete Course [30 Hours] | Learn Full Stack Web Development From Basic" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe width="400" height="384" src="https://www.youtube.com/embed/8HUuKkgskCA" title="🔥JavaScript Full Course 2023 | JavaScript Tutorial For Beginners 2023 | JavaScript | Simplilearn" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</body>
</html>