<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>


<body>

    <?php include "partial/_header.php"; ?>
    <?php include "partial/_dbconnect.php"; ?>
  
   
  
    
    <div class="pok"></div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/tax.jpg" class="d-block w-100" alt="...">

            </div>
        </div>
    </div>

<div class="tt">   
<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d30247.923828820167!2d73.80537684216353!3d18.619498018188942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sca%20office%20in%20bhosari!5e0!3m2!1sen!2sin!4v1673771726190!5m2!1sen!2sin" width="1530" height="450" style="border:0; padding:40px 45px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div> 
  <?php include "partial/limit.php";?>






<!--Footer content-->

<div class="cards">
  <div class="cheader">
    Featured
  </div>
  <div class="card-body">
    <div class="tpk">
       <ul>
        <li><a href="tax.php"><b>1.Income Tax</b></a></li>
        <ul>
            <li><a href="tax.php">Income Tax Slabs</a></li>
            <li><a href="tax.php">efiling Income Tax</a></li>
            <li><a href="tax.php">Income Tax Return</a></li>
            <li><a href="tax.php">Income Tax Calculator</a></li>
            <li><a href="tax.php">Income Tax Refund</a></li>
        </ul>
        <li><a href=""><b>2.Details of Taxes</b></a></li>
        <ul>
            <li><a>Types of taxes</a></li>
            <ul>
                <li><a href="tax1.php">1. Direct Tax</a></li>
                <li><a href="tax1.php">2. Indirect Tax</a></li>
                <li><a href="tax1.php">3. Other Taxes</a></li>
                <li><a href="tax1.php">4.Benefits of Taxes</a></li>
            </ul>
        </ul>
        <li><a href="gst.php"><b>3.GST(Goods & Services Tax)</b></a></li>
        <ul> 
            <li><a href="gst.php">How GST Works in India?</a></li>
        <li><a href="gst.php">GST Rates</a></li>
        <li><a href="gst.php">GST Registration</a></li>
        <li><a href="gst.php">GST Calculator</a></li>
        <li><a href="gst.php">GST Returns</a></li>
       </ul>

       <li><a href="tds.php"><b>4.TDS(Tax Deducted at Source)</b></a></li>
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
     
      <li><a href="Section.php"><b>5.Income Tax Deduction Section List</b></a></li>
      <ul>
        <li>Section 80C</li>
        <li>Section 80DD</li>
        <li>Section 80D</li>
      </ul>
       </ul>
       <div class="new">
       <details>
        Vaishnavi Mankar <br>
                     Contact No: 9965685468
                  </details> 
                  </div>
      
    </div>
  </div>
</div>




</body>

</html>
