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
include "BS.php";
$comm=unserialize($_COOKIE["panierid"]);
$email=$_COOKIE['email'];
$idUtilisateur=$data->prepare("SELECT * FROM user WHERE emailU='$email'");
$idUtilisateur->execute();
$id="";
foreach($idUtilisateur as $id){
$id=$id['idU'];
}
if(isset($_POST['submi'])){
  $date=date('Y/m/d');
  $somm=0;
foreach ($comm as $key => $v){
    $see=$data->prepare("SELECT sum(prixP) as prix FROM produite WHERE produite.idProduit in('$key')");
    $see->execute();
    foreach($see as $m){
        $somm+=(int)($m['prix'])*$v;
    }
}



$commende=$data->prepare("INSERT INTO cmmande(`idCM`, `dateC`, `prixTotal`, `modePaiment`, `codePromo`, `id_userComm`,status)VALUES(NULL, '$date', '$somm', 'pypal', '50000', $id,'In Progress')");
$commende->execute();
$maxid=$data->prepare("SELECT MAX(idCM) as id FROM cmmande");
$maxid->execute();
$idM=0;
foreach($maxid as $id){
$idM=$id['id'];
}
foreach ($comm as $key => $v){
$lign=$data->prepare("INSERT INTO `lignecommande` (`QuantityC`, `idLign`, `idProduitCom`, `idCommande`) VALUES ('5', NULL, '$key', '$idM')");
$lign->execute();
if($lign){
  echo "<script>alert('commande ajouter bien!!')</script>";
}
}
}

    include "HEADER.php";
    ?>

<div class="container py-5">
<div class="row">


<div class="col">
<?php
include "Progress.php";
?>





<div class="accordion mt-5" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><b style="font-size:11px;"><i class="bi bi-credit-card-2-back mx-2" style="font-size:21px;"></i>Pay with Credit Card</b></button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       


<div class="d-flex align-items-center"><b  style="font-size: 10px;">We accept following credit cards:</b><img src="image/cards.png" style="width:150px;" class="mx-3"> </div>

<div class="d-flex justify-content-center"><img src="image/credit-card (3).png" style="width:250px;"></div>


<div class="row mt-3">
<div class="col-6">
    <input class="form-control py-2 low shadow-none type="text" name='CardNumber' placeholder="Card number" required>
</div>

<div class="col-6">
    <input class="form-control py-2 low shadow-none" type="text" placeholder="Full Name" name='name' required>
</div>

</div>





<div class="row mt-3">
<div class="col-3">
    <input class="form-control py-2 low shadow-none" type="text" name='Card number' placeholder="MM/Y" name='MM' required>
</div>

<div class="col-3">
    <input class="form-control py-2 low shadow-none" type="text" placeholder="CVC" name='CVC' required>
</div>


<div class="col-6">
<form method="POST">
<button class="form-control py-2 low ho shadow-none"  name='submi' >Submite</button>
</form>
</div>

</div>
      </div>
    </div>
  </div>














  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><b style="font-size:11px;"><i class="bi bi-paypal mx-2" style="font-size:21px;"></i>Pay with Credit Card</b></button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse shadow-none" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       


<div class="d-flex align-items-center py-2"><b  style="font-size: 10px;">PayPal - the safer, easier way to pay:</b> </div>
<div class="row mt-3">
<div class="col-6">
    <input class="form-control py-2 low shadow-none" type="text" name='E-email' placeholder="E-email" required>
</div>

<div class="col-6">
    <input class="form-control py-2 low shadow-none" type="text" placeholder="Password" name='PasswordP' required>
</div>

</div>
<div class="col-3 py-3">
<button class="form-control py-2 low ho shadow-none"  name='paypal' >Log in</button>
</div>

</div>
      </div>
    </div>
  </div>










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
  width: 100%;
  background-color: orange;

  -webkit-transition: width 2s;
  /* Safari */
  transition: width 2s;
}
.step4 span{
    font-weight: bold;
    color: orange;
}
.low{
        font-size: 11px;
        font-weight: bold;
        height: 40px;
    }
    .ho{
        background-image: linear-gradient(to left,rgb(255, 119, 0) , rgb(224, 111, 111));
color: white;
display: flex;
align-items: center;
justify-content: center;
    }
</style>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>