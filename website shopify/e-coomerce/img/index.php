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
.slider img {
    height: 500px;
}

#tt {
    filter: blur(3px);
}

.ji {
    position: absolute;
    z-index: 2;
    top: 10%;
    left: 3%;
    font-weight: 600;
    line-height: 80px;
    font-size: 50px;
    -webkit-text-stroke: 1px #fff;
    color: transparent;
    background-image: linear-gradient(#fff,#fff);
    background-repeat: no-repeat;
    -webkit-background-clip: text;
    background-position: -1250px 0;
    animation: back 5s linear infinite alternate;
}

@keyframes back {
    100% {
        background-position:0 0;
    }
}

.wi {
    position: absolute;
    z-index: 2;
    top: 40%;
    left: 3%;
    color: white;
    font-size: 20px;
    font-weight: 600;
    transition-timing-function: linear;
    margin: 0 50% 0 0%;
}
.tru{
    margin-left:8%;
    position: relative;
    float:left;
   display:flex;
    justify-content:space-around;
    margin-top:4%;
}
.crd2{
   position: relative;
    z-index: 3;
    width:200px;
    height:150px;
    background:pink;
   margin-left:4%;
   box-shadow:0 3px 3px pink;
}
.crd3{
    text-align:center;
    position: absolute;
    padding:20px 25px;
  z-index:2;
  width:200px;
  height:180px;
  margin-top:15%;
  margin-left:25%;
  background:white;
  box-shadow:0 9px 9px white;
}
.frd{
    font-size:50px;
    color:white;
    font-weight:bold;
    text-align:center;
    padding:20px 25px;
    text-shadow: 4px 4px 5px grey;
}
.tc{
    position: absolute;
    bottom:7%;
    padding:10px 15px;
    width:150px;
    height:50px;
    color:white;
    left:70px;
    background-color:transparent;
    border:1px solid white;
}
#tc2{
    left:250px;
}
.tc a{
    text-decoration:none;
}
.tc:hover{
    background-color:white;
    color:black;
}
</style>

<body style="background-color:black;">
    <?php include "partial/header.php";?>
    <?php include "partial/db.php";?>


    <!-- slider -->
    <div class="slider">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <img src="img/4th.jpg" id="tt" class="d-block w-100" alt="...">
                    <div class="tp">
                        <h3 class="ji">Welcome to our website ,Blog,Template sale paletform</h3>
                        <p class="wi">Mar 16, 2023 · Free Website Templates Block Design 10,000+ Free Website Templates, Layouts
                            and Web Templates 2023 Last Updated: Mar 16, 2023 70% Sale Shopify Themes We Are Carrying..
                        </p>
                        <button class="tc"><a href="partial/image.php">Website Demo</a></button>
                        <button id="tc2" class="tc"><a href="partial/tmpgallery.php">Template</a></button>
                    </div>
                </div>

            </div>
        </div>
    </div>

<div class="frd">
    <span>All You Need And More</span>
</div>
    <div class="tru">
<div class="crd2">
    <div class="crd3">
        <span><b>10,000+ of Website & Block Templates</b> <br>
Select from a huge variety of designer-made templates.</span>
    </div>
</div>
    </div>

    <div class="tru">
<div class="crd2">
    <div class="crd3">
        <span><b>Easy Drag-n-Drop</b> <br>
Customize anything on your website with simple dragging..</span>
    </div>
</div>
    </div>

    
    <div class="tru">
<div class="crd2">
    <div class="crd3">
        <span><b>No Coding</b><br>
Visually add, edit, move, and modify with no coding!</span>
    </div>
</div>
    </div>

    <div class="tru">
<div class="crd2">
    <div class="crd3">
        <span><b>Mobile-Friendly</b><br>
Build websites that look great on all modern devices.</span>
    </div>
</div>
    </div>
    

<?php include "demo.php";?> 
<?php include "slibo.php";?>   
    <!-- <?php include "partial/footer.php";?> -->
</body>

</html>