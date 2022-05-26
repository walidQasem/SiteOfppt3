<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>panier</title>
    <link rel="stylesheet" href="css/panier.css">
    <link rel="shortcut icon" type="image/png" href="image/aa1.png">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Mea+Culpa&family=Open+Sans:ital,wght@0,300;1,300&family=Spartan:wght@300&display=swap" rel="stylesheet">


</head>
<body>
    

<?php
include "HEADER.php";
?>

<?php
include "BS.php";
?>

















<div class="container py-5" >
<section class="">
<div class="row ">
 <div class="col-md-9 px-5   " id="bgn" >
        <div class="d-flex align-items-center  pc1" id="pc1" >
            <img src="image/pc.png" class="img-fluid w-10" style="width: 140px;">
          <div class="mx-3"> 
            <b style="font-size: 13px;">asuse</b><br>
           <b style="font-size: 12px;color: gray;">Marque:</b><b style="font-size: 12px;">asuse</b><br>
           <b style="font-size: 12px;color: gray;">Marque:</b><b style="font-size: 12px;">asuse</b><br>
           <div class="py-2"><b style="color: blue; font-size: 16px;" >asuse</b></div>
        </div>
        <div class="ms-auto">
           <b style="font-size: 12px;">Quantity</b><br>
            <input type="number" class="form-control " style="width: 80px;" value="1" max="10" min="1">
            <div class="py-1" onclick="anime(this)"  ><b style="font-size: 13px; color: red; cursor: pointer; " ><i class="bi bi-x-octagon me-2"></i>Remove</b></div>
            
        </div>
    </div>
    <hr class="hrm">';











































<button  class="bttt" id="bttt"><i class="bi bi-recycle mx-2" style="font-size: 17px;" ></i>Update cart</button>

    </div>

<div class="col-md-3 py-3">
    <div class="text-center">
    <b>Subtotal</b><br><br>
    <h1 style="font-size: 21px;"><b>$265.00</b></h1>
</div>
    <hr>
    <b id="note">Note</b><b style="font-size: 12px; margin-left: 10px;">Additional comments</b>
<textarea  class="form-control mt-3" style="height: 100px;"></textarea>































































<div id="add" class="mt-3 py-3 ">
<b class="py-3">Apply promo code</b>
<hr>

</div>



















</div>




</div>
</section>
</div>








<?php
include "FOOTER.php";
?>






</div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="css/panier.js"></script>
</html>