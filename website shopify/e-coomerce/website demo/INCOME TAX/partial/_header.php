<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/ef11279fa4.js" crossorigin="anonymous" type="text/javascript"></script>
    <style>
    #try {
        padding: 10px 25px;

    }

    #try:hover {
        border: 0px solid white;
        border-radius: 50px;
        box-shadow: 5px 2px 5px 2px;
    }

    .nav-item {
        position: relative;
        display: inline-block;

    }

    .dropdownmenu {
        display: none;
        position: absolute;
        list-style-type: none;
        z-index: 1;
        background-color: white;
        opacity: 0.7;

    }


    .nav-item:hover .dropdownmenu {
        display: block;

    }



    .btn {

        border-top: 2px solid rgb(47, 41, 227);
        border-left: 2px solid rgb(47, 41, 227);
        border-right: 1px solid black;
        border-bottom: 1px solid black;
        color: white;
    }

    .btn:hover {
        color: white;
        border-top: 1px solid grey;
        border-left: 1px solid grey;
        border-right: 2px solid rgb(47, 41, 227);
        border-bottom: 2px solid rgb(47, 41, 227);
    }
    .icon i {
    float: right;
    color: rgb(12, 12, 12);
    font-size: 20px;
    padding-bottom: 5px;
    margin-right:10px;
}

i:hover {
    background: linear-gradient(purple, pink, blue, cyan);
    font-weight: bold;
    color: white;
}
#tr{
   padding:10px 12px;
   font-size:40px;
   background:linear-gradient(rgb(20, 2, 73),black);
   color:white;
   
    
}
#tr img{
    width:70px;
    height:50px;
}






    </style>
</head>

<body>

    <nav class="navbar bg-light">
        <div class="container-fluid">
            <h1 id="tr" class="navbar-brand" href="#"><img src="img/inc2.png" alt="" srcset=""><b> INCOME-TAX</b></h1>
            <div class="icon">
               <a href="https://twitter.com/" aria-label="Read more about Seminole tax hike"> <i
                     class="fa-brands fa-twitter"></i></a>
               <a href="https://www.facebook.com/" aria-label="Read more about Seminole tax hike"> <i
                     class="fa-brands fa-facebook"></i></a>
               <a href="https://www.whatsapp.com/" aria-label="Read more about Seminole tax hike"> <i
                     class="fa-brands fa-whatsapp"></i></a>
               <a href="https://www.instagram.com/" aria-label="Read more about Seminole tax hike"><i
                     class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a id="try" class="navbar-brand" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a id="try" class="nav-link active" aria-current="page" href="#">About Income Tax</a>
                        <ul class="dropdownmenu">
                            <li><a id="try" class="dropdown-item" href="tax.php">What is Income Tax</a></li>
                            <li><a id="try" class="dropdown-item" href="tax1.php">Types of Tax</a></li>
                            <li><a id="try" class="dropdown-item" href="gst.php"> Goods & Services Tax</a></li>
                            <li><a id="try" class="dropdown-item" href="tds.php"> Tax Deducted at Sources</a></li>
                            <li><a id="try" class="dropdown-item" href="Section.php"> IncomeTax Deduction Section</a>
                            </li>
                        </ul>
                    </li>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <li class="nav-item">
                            <a id="try" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Registration
                            </a>
                            <ul class="dropdownmenu">
                                <li><a id="try" class="dropdown-item" href="efilingreg.php">How to Registration of
                                        efiling
                                        income tax</a></li>
                                <li><a id="try" class="dropdown-item" href="efilonline.php">What is Procedure to Follow
                                        for
                                        e Filing ITR Online 2022</a></li>
                                <li><a id="try" class="dropdown-item" href="gstreg.php">How to do GST Registration</a>
                                </li>
                            </ul>
                        </li>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <li class="nav-item">
                                <a class="nav-link" href="payment.php">pament</a>
                            </li>
                           

                </ul>
                <form class="btnflx">
                    <button type="Button" class="btn" data-bs-toggle="modal"
                        data-bs-target="#singupModal">Registration</button>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                </form>

            </div>
        </div>

    </nav>data-bs-toggle="modal"



    <?php include "partial/_singup.php";?>
    <?php include "partial/_login.php";?>

</body>

</html>