<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/gstreg.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<style>
    .aksh{
     width:600px;
     height:200px;
     margin-left:30%;
    }
    .po{
        width:700px;
     height:300px;
     margin-left:30%;
    }
    .vai{
        width:700px;
   height:700px;
   margin-left:30%;
    }
    .ii{
        margin-left:30%;
        height:300px;
        width:700px;
    }
</style>
<body>
    <?php include "partial/_header.php";?>
    <div class="pok"></div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/gst1.jpg" class="d-block w-100" alt="...">

            </div>
        </div>
    </div>
    <div>
        <h2 class="txt"><b class="frd">Steps to Complete GST Registration Process Online</b></h2>
        <p class="txt2"><b>The step-by-step procedure that individuals must follow to complete GST Registration is mentioned below:</b></p>
        <ul class="txt3">
            <li class="tp"><b>Step 1:</b> Visit the GST portal - <a href="https://www.gst.gov.in">https://www.gst.gov.in</a></li>
            <li class="tp"><b>Step 2:</b> Click on the 'Register Now' link which can be found under the 'Taxpayers' tab</li>
            <li class="tp"><b>Step 3:</b> Select 'New Registration'.</li>
            <img class="aksh" src="img/gst1.png" alt="">
            <li class="tp"><b>Step 4:</b> Fill the below-mentioned details:</li>
            <ul class="try">
                <li class="tk"> Under the 'I am a' drop-down menu, select 'Taxpayer'.</li>
                <li class="tk">Select the respective state and district.</li>
                <li class="tk">Enter the name of the business.</li>
                <li class="tk">Enter the PAN of the business.</li>
                <li class="tk">Enter the email ID and mobile number in the respective boxes. The entered email ID and mobile number
                    must be active as OTPs will be sent to them.</li>
                <li class="tk">Enter the image that is shown on the screen and click on 'Proceed'.</li>
            </ul>
            <img src="img/2ndgst.png" class="vai" alt="">
            <li class="tp"><b>Step 5:</b> On the next page, enter the OTP that was sent to the email ID and mobile number in the
                respective boxes.</li>
            <li class="tp"><b>Step 6:</b> Once the details have been entered, click on 'Proceed'.</li>
            <img src="img/3rdgst.jpg" class="ii" alt="">
            <li class="tp"><b>Step 7:</b> You will be shown the Temporary Reference Number (TRN) on the screen. Make a note of the
                TRN.</li>
              <img src="img/4thgst.jpg" class="po" alt="">
            <li class="tp"><b>Step 8:</b> Visit the GST portal again and click on 'Register' under the 'Taxpayers' menu.</li>
            <li class="tp"><b>Step 9:</b> Select 'Temporary Reference Number (TRN)'.</li>
    
            <li class="tp"><b>Step 10:</b> Enter the TRN and the captcha details.</li>
            <li class="tp"><b>Step 11:</b> Click on 'Proceed'.</li>
            <img src="img/5thgst.jpg" class="po" alt="">
            <li class="tp"><b>Step 12: </b> You will receive an OTP on your email ID and registered mobile number. Enter the OTP on
                the next page and click on 'Proceed'.</li>
                <img src="img/6thgst.jpg" class="po" alt="">
            <li class="tp"><b>Step 13:</b> The status of your application will be available on the next page. On the right side,
                there will be an Edit icon, click on it.</li>
                <img src="img/7thgst.jpg" class="po" alt="">
            <li class="tp"><b>Step 14:</b> There will be 10 sections on the next page. All the relevant details must be filled, and
                the necessary documents must be submitted. The list of documents that must be uploaded are mentioned
                below:</li>
                <img src="img/8thgst.png" class="aksh" alt="">
            <ul class="try">
                <li class="tk"> Photographs</li>
                <li class="tk">Business address proof</li>
                <li class="tk">Bank details such as account number, bank name, bank branch, and IFSC code.</li>
                <li class="tk">Authorisation form</li>
                <li class="tk">The constitution of the taxpayer.</li>
            </ul>
            <li class="tp"><b>Step 15:</b> Visit the 'Verification' page and check the declaration, Then submit the application by
                using one of the below mentioned methods:</li>
            <ul class="try">
                <li class="tk">By Electronic Verification Code (EVC). The code will be sent to the registered mobile number.</li>
                <li class="tk">By e-Sign method. An OTP will be sent to the mobile number linked to the Aadhaar card.</li>
                <li class="tk">In case companies are registering, the application must be submitted by using the Digital Signature
                    Certificate (DSC).</li>
                    <img src="img/9thgst.png" class="po" alt="">
            </ul>
            <li class="tp"><b>Step 16:</b> Once completed, a success message will be shown on the screen. The Application Reference
                Number (ARN) will be sent to the registered mobile number and email ID.</li>
            <img src="img/10thgst.jpeg" class="po" alt="">
                <li class="tp"><b>Step 17:</b> You can check the status of the ARN on the GST portal.</li>
        </ul>
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