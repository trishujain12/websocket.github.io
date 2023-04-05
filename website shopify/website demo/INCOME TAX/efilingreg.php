<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/efilingreg.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .tk{
        width:400px;
        height:200px;
        margin-left:40%;
    }
</style>
<body>
    <?php include "partial/_header.php";?>
    <div class="pok"></div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/efiling.jpg" class="d-block w-100" alt="...">

            </div>
        </div>
    </div>
    <div>
        <div class="mid">
            <h2  class="txt"><b class="frd">Registration of Tax Payer on e-filing Website</b></h2>
            <p class="txt2"><b>In order to register as an individual tax payer on the e-filing website, you need to follow the steps mentioned below: </b></p>
             <ul class="txt3">
                <li class="tp"><b>Step 1:</b> Visit the official website for income tax e-filing <a href="https://www.incometax.gov.in/iec/foportal">https://www.incometax.gov.in/iec/foportal</a> </li>
            <li class="tp"> <b>Step 2:</b> Click on ‘Register Yourself’ button</li>
            <li class="tp"><b>Step 3:</b> Select ‘Individual’ as the user type</li>
            <img src="img/individual.png" class="tk" alt="" srcset="">
            <li class="tp"><b>Step 4:</b> Provide all the required details such as PAN number, residential status, etc.</li>
           <img class="tk" src="img/efilingRegistration.jpg" alt="" srcset="">
            <li class="tp"><b>Step 5:</b> Click on ‘Continue’ </li>
            <li class="tp"><b>Step 6:</b> Enter all the mandatory details like contact number, current address, etc. </li>
           <img class="tk" src="img/verifyefiling.jpg" alt="" srcset="">
            <li class="tp"><b>Step 7:</b> Click ‘Submit’ </li>
            <li class="tp"><b>Step 8:</b> Enter the OTP received on registered mobile number </li>
                </ul>
        </div>
    </div>

  
  
  
  <!--Footer content-->

  <div class="cards">
  <div class="cheader">
    Featured
  </div>
  <div class="card-body">
    <div class="tpk">
       <ul>
        <li class="frs"><a href="tax.php"><b>1.Income Tax</b></a></li>
        <ul>
            <li><a href="tax.php">Income Tax Slabs</a></li>
            <li><a href="tax.php">efiling Income Tax</a></li>
            <li><a href="tax.php">Income Tax Return</a></li>
            <li><a href="tax.php">Income Tax Calculator</a></li>
            <li><a href="tax.php">Income Tax Refund</a></li>
        </ul>
        <li><a href="" class="frs"><b>2.Details of Taxes</b></a></li>
        <ul>
            <li><a>Types of taxes</a></li>
            <ul>
                <li><a href="tax1.php">1. Direct Tax</a></li>
                <li><a href="tax1.php">2. Indirect Tax</a></li>
                <li><a href="tax1.php">3. Other Taxes</a></li>
                <li><a href="tax1.php">4.Benefits of Taxes</a></li>
            </ul>
        </ul>
        <li class="frs"><a href="gst.php"><b>3.GST(Goods & Services Tax)</b></a></li>
        <ul> 
            <li><a href="gst.php">How GST Works in India?</a></li>
        <li><a href="gst.php">GST Rates</a></li>
        <li><a href="gst.php">GST Registration</a></li>
        <li><a href="gst.php">GST Calculator</a></li>
        <li><a href="gst.php">GST Returns</a></li>
       </ul>

       <li class="frs"><a href="tds.php"><b>4.TDS(Tax Deducted at Source)</b></a></li>
      <ul>
        <li><a href="tds.php">TDS Refund</a></li>
        <li><a href="tds.php">TDS Rates</a></li>
        <li><a href="tds.php">TDS on Salary</a></li>
        <li><a href="tds.php">TDS Return Due Date</a></li>
        <li><a href="tds.php">Forms </a></li>
        <ul>
            <li>Form 16</li>
            <li>Form 26AS</li>
            <li>Form 15G and 15H</li>
        </ul>
      </ul>
      <li class="frs"><a href="Section.php"><b>5.Income Tax Deduction Section List</b></a></li>
      <ul>
        <li>Section 80C</li>
        <li>Section 80DD</li>
        <li>Section 80D</li>
      </ul>
       </ul>
         
    </div>
  </div>
</div>
          

</body>
</html>