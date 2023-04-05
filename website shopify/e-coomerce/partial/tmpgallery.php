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

/* gallery */

.title1{
    text-align:center;
    color:white;
    font-size:30px;
    text-shadow:0 3px 3px white;
font-weight:bold;
font-style:italic;
padding:10px 15px;
}
div.gallery {
    margin:20px;
  margin-left: 9%;
  
  float: left;
  width: 300px;

  box-shadow:3px 6px 9px white ;
}

div.gallery:hover {
  transform:translateY(-30px);
}

div.gallery img {
  width: 100%;
  height:350px;
}

div.desc {
  padding: 15px;
  text-align: center;
  background-color:white;
}

</style>
<body style="background-color:black;">
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





<!-- card gallery -->


<div class="gallery">
  <a target="_blank" href="comon template folder/Fortune-Template/services.html">
    <img src="tmp/1st.png" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="comon template folder/Fortune-Template/index_6.html">
    <img src="tmp/2nd.png" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="comon template folder/Fortune-Template/index.html">
    <img src="tmp/3rd.png" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>



<!-- card gallery -->
>

<div class="gallery">
  <a target="_blank" href="comon template folder/templatemo_520_highway/index.html">
    <img src="tmp2/1st.png" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="comon template folder/templatemo_520_highway/index.html">
    <img src="tmp2/2nd.png" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="comon template folder/templatemo_520_highway/index.html">
    <img src="tmp2/3rd.png" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="comon template folder/secondtemplatepro/crarivee.html">
    <img src="tmp2/4th.png" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<!-- card gallery -->


<div class="gallery">
  <a target="_blank" href="comon template folder/thirdtemplate.pro/Think.html">
    <img src="tmp2/5th.png" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<!-- card gallery -->


<div class="gallery">
  <a target="_blank" href="comon template folder/Fortune-Template/index_6.html">
    <img src="tmp/2nd.png" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>



</body>
</html>