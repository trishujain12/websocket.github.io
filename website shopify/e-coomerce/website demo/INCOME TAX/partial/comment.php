<?php
 include "partial/_dbconnect.php";
$showAlert=false;
$method=$_SERVER["REQUEST_METHOD"];
if($method=="POST"){
    // imert into thread into db
    $th_title=$_POST["title"];
    $th_desc=$_POST["desc"];
    $sql="INSERT INTO `thread` ( `thread_title`, `thread_desc`, `Date`) VALUES ( '$th_title', '$th_desc', current_timestamp())";
    $result=mysqli_query($con,$sql);
     $showAlert=true;
     if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> your query beenn added ! please wait for community respond.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
     }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   
   <!--comment box--->
  
<form action="<?php echo $_SERVER["REQUEST_URI"] ?>" method="POST" class="frm">
        <div class="mb-3" id="ne" style="margin-left:350px; margin-right:350px">
        <h3 style="text-align:center"><b><i>Enter Query</i></b></h3>
            <label for="exampleFormControlInput1" class="form-label">Problem Concern</label>
            <input class="form-control" id="title" name="title">
        </div>
        <div class="mb-3" style="margin-left:350px; margin-right:350px">
            <label for="exampleFormControlTextarea1" class="form-label">Ellaborate your concern</label>
            <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
        </div>
        <div style="text-align:center">
            <button type="submit" class="bts" name="submit">Submit</button>
        </div>
    </form>



    <!--commwnt box--->

    <?php
      include "partial/_dbconnect.php";
        $sql="SELECT * FROM `thread`";
        $result=mysqli_query($con,$sql);
        $noResult=true;
        while($row=mysqli_fetch_assoc($result)){
            $noResult=false;
          
            $title=$row["thread_title"];
            $desc=$row["thread_desc"];
            
          
           

            echo '<div class="container">
            <div class="flex-shrink-0" style="text-align:center;">
            <img src="https://tse2.mm.bing.net/th?id=OIP.0rCkjRj7GfjjFD2tvQriRAHaHa&pid=Api&P=0&w=177&h=177"
                width="54px">
        </div>

            <div class="flex-grow-1 ms-3" style="text-align:center;">'.
              '  <h6><b> ' .$title. ' </b></h6>
               ' .$desc. '.
               </div>
            
            </div>';
        }
     
    ?>

   
</head>
<body>

      

</body>
</html>