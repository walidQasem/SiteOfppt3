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
session_start();
include "BS.php";
if(isset($_POST['che'])){
    header('location:Checkout.php');
}
if(!isset($_COOKIE["panierid"])){
    if(isset($_SESSION['idPro'])){
    $T[$_SESSION['idPro']]=$_SESSION['Quantite'];
    setcookie("panierid",serialize($T),time()+60*60);
    }
}
else{
$T=unserialize($_COOKIE["panierid"]);
if(isset($_SESSION['idPro'])){
$T[$_SESSION['idPro']]=$_SESSION['Quantite'];
setcookie("panierid",serialize($T),time()+60*60);
unset($_SESSION['idPro']);
}
}
//verifier tableu videe ou none
if(empty($T)){
    $_SESSION['countNot']=0;
    }
//supprimer article dans un produit
if(isset($_POST['supp'])){
    foreach ($T as $key => $v){
        if($key==$_POST['supp']){
          unset($T[$key]);
          setcookie("panierid",serialize($T),time()+60*60);
        }
    }
}
include "HEADER.php";
?>
<div class="container py-5">
<section class="">
<div class="row ">
 <div class="col-md-9 px-5   " id="bgn" >
 <?php
//somme prix le commande
$somm=0;
if(isset($_COOKIE['panierid']) and !empty($T)){
    foreach ($T as $key => $v){
        $se=$data->prepare("SELECT * FROM produite where idProduit in('$key')");
        $se->execute();
        $_SESSION['countNot']=count($T);
        foreach($se as $m){
            echo '
            <form method="POST">
            <div class="d-flex align-items-center  pc1" id="pc1" >
                <img src="image/'.$m["imgP"].'" class="img-fluid w-10" style="width: 140px;">
              <div class="mx-3"> 
                <b style="font-size: 13px;">asuse</b><br>
               <b style="font-size: 12px;color: gray;">Marque:</b><b style="font-size: 12px;">asuse</b><br>
               <b style="font-size: 12px;color: gray;">Marque:</b><b style="font-size: 12px;">asuse</b><br>
               <div class="py-2"><b style="color: blue; font-size: 14px;" >'.$m["prixP"].'$</b></div>
            </div>
            <div class="ms-auto">
               <b style="font-size: 12px;">Quantity</b><br>
                <input type="number" class="form-control " name="uantite" style="width: 80px;" value="'.$v.'" max="10" min="1">
                <button class="btn" name="supp" value="'.$m["idProduit"].'" class="py-1" onclick="anime(this)"  ><b style="font-size: 13px; color: red; cursor: pointer; " ><i class="bi bi-x-octagon me-2"></i>Remove</b></button>
            </div>
        </div>
        <hr class="hrm">
        </form>';
        }  
    }
//poucle pour calculer totale
    foreach ($T as $key => $v){
        $see=$data->prepare("SELECT sum(prixP) as prix FROM produite WHERE produite.idProduit in('$key')");
        $see->execute();
        foreach($see as $m){
            $somm+=($m['prix'])*$v;
        }
    }
}
?>
<form method="POST">
<button  class="bttt" id="bttt" name="update"><i class="bi bi-recycle mx-2" style="font-size: 17px;" ></i>Update cart</button>
</form>
    </div>
<div class="col-md-3 py-3">
    <div class="text-center">
    <b>Subtotal</b><br><br>
    <h1 style="font-size: 21px;"><b>$<?php echo  $somm; ?></b></h1>
</div>
    <hr>
    <b id="note">Note</b><b style="font-size: 12px; margin-left: 10px;">Additional comments</b>
<textarea  class="form-control mt-3" style="height: 100px;"></textarea>
<form method="POST">
<div id="add" class="mt-3 py-3  " style="border-radius: 7px;">
<b class="py-3">Apply promo code</b>
<hr>
<input type="text" name='code' class="form-control" placeholder="Code Promo" style="font-size:11px; font-weight: bold;">
<input type="submit" class="d-flex justify-content-center mt-3 tft">
</div>
<div class="row">
<button class="col  mt-3 hos "name='che' ><i class="bi bi-credit-card-2-back mx-2" style="font-size: 25px;"></i>Proceed to Checkout</button>
</div>
</form>
<style>
    .hos{
        background-image: linear-gradient(to left,rgb(255, 119, 0) , rgb(224, 111, 111));
        font-weight:bold ;
        font-size: 11px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        border: none;
        padding: 3px 0px;
        color: white;
        
    }
    .tft{
        border: 1px solid orange;
        border-radius: 5px;
        color: orange;
     transition: 0.5s;
     font-weight: bold;
     background-color:white;
    }
    .tft:hover{
        color: white;
        background-color:orange;
        transition: 0.5s;

    }
</style>
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
<script src="js/bootstrap.bundle.min.js"></script>
<script src="css/panier.js"></script>
</html>