<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
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

.btn a{
  text-decoration:none;
  color:black;
}
</style>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="jr" src="partial/shop.jpg" alt=""></a>
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
          <a class="nav-link" href="partial/payment.php">Payment</a>
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
        <button class="btn btn-outline-success" type="submit" class="tp"><a href="partial/registration.php">SingUp</a></button>
        <button class="btn btn-outline-success" type="submit" class="tp"><a href="partial/login.php">SingIn</a></button>
      </form>
    </div>
  </div>
</nav>
</body>
</html>