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
$T=unserialize($_COOKIE["panierid"]);




    if(count($T) == 0){
    header("location:panier.php");
    }
    else{
include "BS.php";      
session_start();
if(!isset($_COOKIE['email'])){
    header("location:login.php");
}
    if(isset($_POST['env'])){
        header("Location:Shipping.php");
    }
    $email=$_COOKIE["email"];
    $form=$data->prepare("SELECT * FROM user WHERE emailU='$email'");
    $form->execute();
    foreach($form as $f){
        $name=$f['nomU'];
        $prenom=$f['prenomU'];
        $email=$f['emailU'];
        $tel=$f['telU'];
    }

    }



?>


    <?php
    include "HEADER.php";
    ?>




<!--container-->
<div class="container">
  
    <div class="row">
        <div class="col-md py-5">
 <?php include "Progress.php"?>

   <img src="image/01.jpg"  style="width: 80px;border-radius: 50%; display: flex; justify-content:center;" class="mx-3 ">

<form method="POST">
<div class="mt-3">
<b>Shipping address</b>
<hr>

<div class="row mt-3">
<div class="col-md-6 py-2">
    <b class="b8">First Name</b>
    <input class="form-control py-2 low shadow-none" type="text" name='name' disabled value='<?php echo $name ?>' required>
</div>

<div class="col-md-6 py-2">
    <b class="b8">Last Name</b>
    <input class="form-control py-2 low shadow-none" type="text" name='prenom'  disabled value='<?php echo $prenom ?>' required>
</div>

</div>






<div class="row mt-3">
<div class="col-md-6 py-2">
    <b class="b8">E-mail Address</b>
    <input class="form-control py-2 low shadow-none" type="email" disabled value="<?php echo  $email ?>" name='email' required>
</div>

<div class="col-md-6 py-2">
    <b class="b8">Phone Number</b>
    <input class="form-control py-2 low shadow-none" type="tel" disabled value="<?php echo  $tel ?>" name='tel' required>
</div>

</div>








<div class="row mt-3 ">
<div class="col-md-6 py-2">
    <b class="b8">Company</b>
    <input class="form-control py-2 low shadow-none" type="text" name='Company' required>
</div>

<div class="col-md-6 py-2">
    <b class="b8">Country</b>
    <select class="form-select py-2 low shadow-none">
        <option value="Canada"><b>Canada</b></option>
        <option value="France"><b>France</b></option>
        <option value="Espagne"><b>Espagne</b></option>
        <option value="Egypte"><b>Egypte</b></option>
    </select>

</div>

</div>















<div class="row mt-3">



<div class="col-md-6 py-2">
    <b class="b8">City</b>
    <select class="form-select py-2 low shadow-none">
        <option value="Canada"><b>Canada</b></option>
        <option value="France"><b>France</b></option>
        <option value="Espagne"><b>Espagne</b></option>
        <option value="Egypte"><b>Egypte</b></option>
    </select>

</div>

<div class="col-md-6 py-2">
    <b class="b8">ZIP Code</b>
    <input class="form-control py-2 low shadow-none" type="text" name='zip' required>
</div>
</div>
<div class="row mt-3">
<div class="col-md-6 py-2">
    <b class="b8">Adresse1</b>
    <input class="form-control py-2 low shadow-none" type="text" name='Adresse1' required>
</div>

<div class="col-md-6 py-2">
    <b class="b8">Adresse2</b>
    <input class="form-control py-2 low shadow-none" type="text" name='Adresse2' required>
</div>

</div>
<div class="mt-3"><b>Billing address</b></div>
<hr>
<div class="d-flex ">
<input type="checkbox" name='c' style="background-color: #fe696a;" required >
<b class="mx-3">Same as shipping address</b>
</div>
<div class="row mt-3">
<div class="col-md-6 py-2">
<button class="form-control py-2 low shadow-none" type="button" name='back' ><i class="bi bi-chevron-left  mx-2" style="font-size:18px;"></i>Back to Card</button>
</div>

<div class="col-md-6 py-2">
    <button class="form-control py-2 shadow-none low ho" type="submit" name='env' >Proceed to Shipping<i class="bi bi-chevron-right mx-2" style="font-size:18px;"></i></button>
</div>

</div>
</form>
</div>
  <!-- <button id="btn-progress" type="button" class="btn btn-success">Next</button> -->
</div>
<div class="col-lg-4 py-5">
    <?php include "menuComm.php"?>
</div>
    </div>



















</div>


























        <?php
    include "FOOTER.php";
    ?>
</body>















<style>
    .ho{
        background-image: linear-gradient(to left,rgb(255, 119, 0) , rgb(224, 111, 111));
color: white;
display: flex;
align-items: center;
justify-content: center;
    }
    #edit{
    font-size: 11px;
    color: grey;
    font-weight: bold;
    padding: 5px 10px;
    box-shadow:1px 1px 20px #D3D3D3;
    border-radius: 10px;
    margin-left: auto;
    margin-right: 30px;
    }
    #edit:hover{
        box-shadow: none;
        transition: 0.4s;
    }
    .low{
        font-size: 11px;
        font-weight: bold;
        height: 40px;
    }


.step2 span{
    font-weight: bold;
    color: orange;
}

button {
  border: none;
  background: none;
}


#checkout-bar.step1:after,
#checkout-bar.step2:after,
#checkout-bar.step3:after,
#checkout-bar.step4:after {
  width: 50%;
  background-color: orange;

  -webkit-transition: width 2s;
  /* Safari */
  transition: width 2s;
}

.b8 {
    font-size:11px;
}



</style>
<script>

</script>

</html>