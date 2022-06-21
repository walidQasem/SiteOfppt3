<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/panier.css">
    <link rel="shortcut icon" type="image/png" href="image/aa1.png">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Mea+Culpa&family=Open+Sans:ital,wght@0,300;1,300&family=Spartan:wght@300&display=swap" rel="stylesheet">
<script src="js/jquery-3.6.0.js"></script>
</head>
<body>
<?php 
session_start();
    if(isset($_POST['env'])){
        header("Location:payment.php");
    }
?>

<?php
    include "HEADER.php";
    ?>

<div class="container py-5">
<div class="row">


<div class="col">
<?php include "Progress.php"?>


<form method="POST">

<table class="table table-hover mt-5">
<tr>
    <th></th>
    <th>Shipping method</th>
    <th>Delivery time</th>
    <th>Handling fee</th>
</tr>
<tr>
    <td><input type="radio" name="shop" value='Courier'></td>
    <td><b>Courier</b><br><b style="font-size:11px; color: grey;">All addresses (default zone), United States & Canada</b></td>
    <td style="font-size:11px; color: grey;">2 - 4 days</td>
    <td style="font-size:11px; color: grey;">$26.50</td>
</tr>

<tr>
    <td><input type="radio" name="shop" value='Local Shipping'></td>
    <td><b>Local Shipping</b><br><b style="font-size:11px; color: grey;">All addresses (default zone), United States & Canada</b></td>
    <td style="font-size:11px; color: grey;">up to one week</td>
    <td style="font-size:11px; color: grey;">$10.00</td>
</tr>




<tr>
    <td><input type="radio" name="shop" value='Flat Rate'></td>
    <td><b>Flat Rate</b><br><b style="font-size:11px; color: grey;">All addresses (default zone)</b></td>
    <td style="font-size:11px; color: grey;">5 - 7 days</td>
    <td style="font-size:11px; color: grey;">$33.85</td>
</tr>



<tr>
    <td><input type="radio" name="shop" value='UPS Ground Shipping'></td>
    <td><b>UPS Ground Shipping</b><br><b style="font-size:11px; color: grey;">All addresses (default zone)</b></td>
    <td style="font-size:11px; color: grey;">2 - 4 days</td>
    <td style="font-size:11px; color: grey;">$18.00</td>
</tr>


<tr>
    <td><input type="radio" name="shop" value='Local Pickup from store'></td>
    <td><b>Local Pickup from store</b><br><b style="font-size:11px; color: grey;">All addresses (default zone)</b></td>
    <td style="font-size:11px; color: grey;">--</td>
    <td style="font-size:11px; color: grey;">$0.00</td>
</tr>



<tr>
    <td><input type="radio" name="shop" value='Pick Up at Cartzilla Locker'></td>
    <td><b>Pick Up at Cartzilla Locker</b><br><b style="font-size:11px; color: grey;">All addresses (default zone), United States & Canada</b></td>
    <td style="font-size:11px; color: grey;">--</td>
    <td style="font-size:11px; color: grey;">$9.99</td>
</tr>




<tr>
    <td><input type="radio" name="shop" value='Cartzilla Global Export'></td>
    <td><b>Cartzilla Global Export</b><br><b style="font-size:11px; color: grey;">All addresses (default zone), outside United States</b></td>
    <td style="font-size:11px; color: grey;">3 - 4 days</td>
    <td style="font-size:11px; color: grey;">$25.00</td>
</tr>





<tr>
    <td><input type="radio" name="shop" value='Same-Day Delivery'></td>
    <td><b>Same-Day Delivery</b><br><b style="font-size:11px; color: grey;">Only United States</b></td>
    <td style="font-size:11px; color: grey;">--</td>
    <td style="font-size:11px; color: grey;">$34.00</td>
</tr>


<tr>
    <td><input type="radio" name="shop" value='International Shipping'></td>
    <td><b>International Shipping</b><br><b style="font-size:11px; color: grey;">All addresses (default zone)</b></td>
    <td style="font-size:11px; color: grey;">up to 15 days</td>
    <td style="font-size:11px; color: grey;">$27.00</td>
</tr>





</table>





<div class="row mt-3">
<div class="col-6">
<button class="form-control py-2 low" type="button" name='back' ><i class="bi bi-chevron-left  mx-2" style="font-size:18px;"></i>Back to Card</button>
</div>

<div class="col-6">
    <button class="form-control py-2 low ho" type="submit" name='env' >Proceed to Shipping<i class="bi bi-chevron-right mx-2" style="font-size:18px;"></i></button>
</div>

</div>

</form>



</div>

















<div class="col-lg-4 py-5">
<?php include "menuComm.php"?>
</div>


</div>
</div>

<?php
    include "FOOTER.php";
    ?>

<style>
#checkout-bar.step1:after,
#checkout-bar.step2:after,
#checkout-bar.step3:after,
#checkout-bar.step4:after {
  width: 75%;
  background-color: orange;
  -webkit-transition: width 2s;
  transition: width 2s;
}
.step3 span{
    font-weight: bold;
    color: orange;
}
</style>

</body>
</html>