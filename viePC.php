<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordi</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/Viepc.css">
    <link rel="shortcut icon" type="image/png" href="image/aa1.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Mea+Culpa&family=Open+Sans:ital,wght@0,300;1,300&family=Spartan:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/magnify.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
    


<?php
 session_start();
 $id=$_GET['id'];
if(isset($_POST['ajpanier'])){
    $_SESSION['idPro']=$_POST['ajpanier'];
    $_SESSION['Quantite']=$_POST['Quantite'];
 
echo '<div class="alert py-0 text-center text-white" style="position: absolute; width:100%; background-color: green;" ><b>est Ajouter au panier</b><i class="bi bi-calendar2-check ms-2" style="font-size:23px;"></i></div>';
  header("refresh:2 url=viePC.php?id=$id");
  
}
?>

























<?php
include "BS.php";



?>







<?php

$sel=$data->prepare("SELECT * FROM Produite WHERE idProduit=:id");
$sel->bindParam(":id",$id);
$sel->execute();
if($sel->rowCount()>0){
foreach($sel as $men){
    $img1=$men['imgP'];
    $img2=$men['img1'];
    $img3=$men['img2'];
    $img4=$men['img3'];
    $img5=$men['img4'];
    $lib=$men['libelleP'];
    $marque=$men['MarqueP'];
    $type=$men['typeP'];
    $prix=$men['prixP'];
    $description=$men['descriptionP'];
}

}
else{
    header("Location:shopNew.php");
}


if(isset($_POST['rev'])){
    if(isset($_COOKIE['email'])){
$date=date("Y-m-d h:i:sa");
$email=$_COOKIE['email'];
$sa=$data->prepare("SELECT * FROM user WHERE emailU='$email'");
$sa->execute();
    foreach($sa as $men){
        $idC=$men['idU'];
    }



$text=$_POST['textC'];
$Pros=$_POST['Pros'];
$Cons=$_POST['Cons'];
$com=$data->prepare("INSERT INTO commentaire(`idC`, `TextC`, `id_user`, `id_produit`, `dateC`,`Pros`,Cons) VALUES (NULL,'$text',$idC,$id,'$date','$Pros','$Cons')");
$com->execute();
    }
    else{
        header("location:login.php");
    }
}

$sql=$data->prepare("SELECT * FROM commentaire WHERE id_produit=$id ORDER BY dateC DESC ");
$sql->execute();
$rev=$sql->rowCount();


?>









<?php

// session_start();
// $id=$_SESSION['id'];
// $sam=$data->prepare("select * from Produite where idproduit=$id");
// $sam->execute();

include "HEADER.php";


?>























<!---head-->

<div class="container-fluid py-3" style="width: 85%;" >
 <div class="row d-flex align-items-center">




     <div class="col-sm-9 " >
<h2 class="mt-4" style="font-weight: bold; color: rgb(92, 92, 92);"><?php echo $lib ?></h2>
<i class="bi bi-star-fill" style="color: rgb(255, 85, 0); font-size: 12px;"></i>
<i class="bi bi-star-fill" style="color: rgb(255, 85, 0); font-size: 12px;"></i>
<i class="bi bi-star-fill"style="color: rgb(255, 85, 0); font-size: 12px;"></i>
<i class="bi bi-star-fill"style="color: rgb(255, 85, 0); font-size: 12px;"></i>
<i class="bi bi-star-fill"style="color: rgb(255, 85, 0); font-size: 12px;"></i>
<b class="mx-1" style="color: gray; font-size: 12px;"><?php echo $rev?> Reviews</b>
</div>





<div class="col-sm  py-3">
<style>
    .bi-chevron-right{
        font-size: 12px;
    }
    a{
        text-decoration: none;
        color: rgb(0, 0, 0);
    }
</style>

       <a href="index.html"><i class="bi bi-house px-2" style="font-size: 17px;"></i><b style="font-size: 12px; ">home</b></a>
       <i class="bi bi-chevron-right"></i>
       <a href="#"><b style="font-size: 12px; ">shop</b></a>
       <i class="bi bi-chevron-right"></i>
       <b style="font-size: 10px; color: rgb(102, 102, 102);">Product Page v.2</b>
   
</div>






















 </div>
</div>

<div class="container-fluid" style="width: 87%;" >
        <div class="mmm py-2">
<b id="c1">General Info</b>
<b  id="c2">Tech Specs</b>
<b  id="c3" >Reviews<span class="mx-2" style="color: gray;">(<?php echo $rev?>)</span></b>
<hr>
    </div>







<div id="v2">
    <div class="row d-flex align-items-center" >
        <div class="col d-flex align-items-center">
    <img src="image/<?php echo $img1 ?>" style="width: 150px;" class="img-fluid  px-3">
    <div >
    <b class="py-3" style="font-size: 12px;"><?php echo $lib ?></b><br>
    <span  class="py-3" style="color: blue; font-size: 22px; font-weight: bold;"><?php echo $prix ?>$</span>
    </div>
    </div>

<div class="col ms-auto d-flex align-items-center justify-content-end py-4  ">
    <button class="mx-2" id="buy" ><i class="bi bi-bag-plus px-2" style="color: balck; font-size:17px;"></i></button>
    <form method="POST">
    <select class=" info " name="Quantite" style="height: 46px;">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="2">3</option>
        <option value="3">4</option>
        <option value="5">5</option>
    </select>
        </form>


<button class="info mx-2"  style="height: 46px;"><i class="bi bi-heart"></i></button>
<button class="info mx-2"  style="height: 46px;"><i class="bi bi-arrow-repeat " ></i></button>
</div>
</div>





<hr>



















































<!-- table1 -->
<div class="row">

    <table class="col-md table table-hover ">
        <tr>
<th colspan="2">Information générale</th>
        </tr>
<tr>
    <td><b class="tit">Avis Client :</b></td>
    <td><b class="bit">5</b></td>
    
</tr>
<tr>
    <td><b class="tit">HDMI : :</b></td>
    <td><b class="bit">HDMI</b></td>
    
</tr>
<tr>
    <td><b class="tit">Microphones intégrés :</b></td>
    <td><b class="bit">Microphones intégrés</b></td>
    
</tr>
<tr>
    <td><b class="tit">ndice de réparabilité (note sur 10) :</b></td>
    <td><b class="bit">6.1</b></td>
    
</tr>
<tr>
    <td><b class="tit">Marque :</b></td>
    <td><b class="bit">Asus</b></td>
    
</tr>
    </table>



    <table class="col-md table table-hover" >
        <tr>
<th colspan="2">Dimension</th>
        </tr>
<tr>
    <td><b class="tit">Poids kg :</b></td>
    <td><b class="bit">1.65</b></td>
    
</tr>

<tr>
    <td><b class="tit">Hauteur cm :</b></td>
    <td><b class="bit">22.3</b></td>
    
</tr>


<tr>
    <td><b class="tit">Largeur Cm :</b></td>
    <td><b class="bit">32.3</b></td>
    
</tr>


<tr>
    <td><b class="tit">Profondeur cm :</b></td>
    <td><b class="bit">1.99</b></td>
    
</tr>
<tr>
    <td><b class="tit">Poids kg :</b></td>
    <td><b class="bit">1.65</b></td>
    
</tr>
    </table>

</div>























<!-- table2 -->
<div class="row">

    <table class="col-md table table-hover ">
        <tr>
<th colspan="2">Communication / Réseau</th>
        </tr>
<tr>
    <td><b class="tit">Version Bluetooth </b></td>
    <td><b class="bit">5.0 Low Energy (LE)</b></td>
    
</tr>
<tr>
    <td><b class="tit">Bluetooth : </b></td>
    <td><b class="bit">Avec bluetooth</b></td>
    
</tr>
<tr>
    <td><b class="tit">Norme Wi-Fi : </b></td>
    <td><b class="bit">IEEE 802.11ax</b></td>
    
</tr>
<tr>
    <td><b class="tit">Wi-Fi :</b></td>
    <td><b class="bit">Wi-Fi </b></td>
    
</tr>
<tr>
    <td><b class="tit">Wi-Fi :</b></td>
    <td><b class="bit">Wi-Fi </b></td>
    
</tr>
<tr>
    <td><b class="tit">Wi-Fi :</b></td>
    <td><b class="bit">Wi-Fi </b></td>
    
</tr>


    </table>



    <table class="col-md table table-hover" >
        <tr>
<th colspan="2">Ecran</th>
        </tr>
<tr>
    <td><b class="tit">Taille standard d'écran d'ordinateur :</b></td>
    <td><b class="bit">14 pouces</b></td>
    
</tr>
<tr>
    <td><b class="tit">Ratio surface d'écran sur appareil :</b></td>
    <td><b class="bit">90</b></td>
    
</tr>
<tr>
    <td><b class="tit">Luminosité :</b></td>
    <td><b class="bit">300</b></td>
    
</tr>
<tr>
    <td><b class="tit">Ecran tactile :</b></td>
    <td><b class="bit">Ecran tactile</b></td>
    
</tr>
<tr>
    <td><b class="tit">Qualité max de la résolution de l'ordinateur :</b></td>
    <td><b class="bit">Full HD</b></td>
    
</tr>
<tr>
    <td><b class="tit">Technologie d'écran d'ordinateur :</b></td>
    <td><b class="bit">IPS</b></td>
    
</tr>


    </table>

</div>






















































<!-- table2 -->
<div class="row">

    <table class="col-md table table-hover ">
        <tr>
<th colspan="2">Stockage</th>
        </tr>
<tr>
    <td><b class="tit">Capacité totale de stockage (en Go) : </b></td>
    <td><b class="bit">512</b></td>
    
</tr>
<tr>
    <td><b class="tit">Capacité SSD :</b></td>
    <td><b class="bit">512</b></td>
    
</tr>
<tr>
    <td><b class="tit">ype de SSD : </b></td>
    <td><b class="bit">M.2 PCI Express - NVME</b></td>
    
</tr>
<tr>
    <td><b class="tit">Type de stockage :</b></td>
    <td><b class="bit">SSD</b></td>
    
</tr>
<tr>
    <td><b class="tit">Type de stockage :</b></td>
    <td><b class="bit">SSD</b></td>
    
</tr>
<tr>
    <td><b class="tit">Type de stockage :</b></td>
    <td><b class="bit">SSD</b></td>
    
</tr>
<tr>
    <td><b class="tit">Type de stockage :</b></td>
    <td><b class="bit">SSD</b></td>
    
</tr>
<tr>
    <td><b class="tit">Type de stockage :</b></td>
    <td><b class="bit">SSD</b></td>
    
</tr>
    </table>



    <table class="col-md table table-hover" >
        <tr>
<th colspan="2">Equipement</th>
        </tr>
<tr>
    <td><b class="tit">Norme du clavier :</b></td>
    <td><b class="bit">Azerty</b></td>
    
</tr>
<tr>
    <td><b class="tit">Type de clavier d'ordinateur portable :</b></td>
    <td><b class="bit">Chiclet</b></td>
    
</tr>
<tr>
    <td><b class="tit">Spécifications audio :</b></td>
    <td><b class="bit">Haut-Parleurs intégrés</b></td>
    
</tr>
<tr>
    <td><b class="tit">Rétroéclairage du clavier d'ordinateur portable :</b></td>
    <td><b class="bit">Rétroéclairage blance</b></td>
    
</tr>
<tr>
    <td><b class="tit">Capteur : Empreintes (Fingerprint) :</b></td>
    <td><b class="bit">Sans lecteur d'empreintes digitales</b></td>
    
</tr>
<tr>
    <td><b class="tit">Pavé numérique :</b></td>
    <td><b class="bit">Sans pavé numérique</b></td>
    
</tr>
<tr>
    <td><b class="tit">Webcam :</b></td>
    <td><b class="bit">Webcam</b></td>
    
</tr>
<tr>
    <td><b class="tit">Système de refroidissement :</b></td>
    <td><b class="bit">Ventilateurs</b></td>
    
</tr>



    </table>

</div>

















</div>




































































<div id="v3">
    <div class="row d-flex align-items-center" >
        <div class="col d-flex align-items-center">
    <img src="image/<?php echo $img1 ?>" style="width: 150px;" class="img-fluid  px-3">
    <div >
    <b class="py-3" style="font-size: 12px;"><?php echo $lib ?></b><br>
    <span  class="py-3" style="color: blue; font-size: 22px; font-weight: bold;"><?php echo $prix ?>$</span>
    </div>
    </div>';


    
    
    
    
    
    
    <div class="col ms-auto d-flex align-items-center justify-content-end py-4   " style="text-align: center;">
        <button class="mx-2" id="buy" ><i class="bi bi-bag-plus px-2" style="color: balck; font-size:17px;"></i></button>
        <form method="POST">
    <select class=" info " name="Quantite" style="height: 46px;">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="2">3</option>
        <option value="3">4</option>
        <option value="5">5</option>
    </select>
        </form>
    
    <button class="info mx-2"  style="height: 46px;"><i class="bi bi-heart"></i></button>
    <button class="info mx-2"  style="height: 46px;"><i class="bi bi-arrow-repeat " ></i></button>
    </div>
    </div>
    
    
    
    
    
    <hr>
    




   <div class="row  d-flex align-items-center">
       <div class="col-md-4 ">
           <h1><b style="font-size: 20px;""><?php echo $rev?> Reviews</b></h1>
           <div class="">
           <i class="bi bi-star-fill"></i>
           <i class="bi bi-star-fill"></i>
           <i class="bi bi-star-fill"></i>
           <i class="bi bi-star-fill"></i>
           <i class="bi bi-star-fill"></i>
           <i class="bi bi-star-fill"></i>
          
           <b style="font-size: 11px;" class="px-3">4.1 Overall rating</b>
        </div>
        <p style="font-weight: bold; font-size: 10px;">58 out of 74 (77%)<br>Customers recommended this product</p>
       </div>
<div class="col">
    
  
  
       <div class="progress my-4 " style="height: 4px;">
        <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
  
      </div>
      <div class="progress my-4" style="height: 4px;">
        <div class="progress-bar bg-danger" role="progressbar" style="width: 30%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        
      </div>
      <div class="progress my-4" style="height: 4px;">
        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        
      </div>
      <div class="progress my-4" style="height: 4px;">
        <div class="progress-bar bg-success" role="progressbar" style="width: 80%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        
      </div>
      <div class="progress my-4" style="height: 4px;">
        <div class="progress-bar bg-info" role="progressbar" style="width: 70%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        
      </div>
    </div>
       
   </div>



























<hr>





<div class="row">
    <!--profil1-->

    <div class="col-md-7 ">

    <?php
$sql1=$data->prepare("SELECT * FROM commentaire WHERE id_produit=$id");
$sql1->execute();



foreach($sql as $qs){
    foreach($sql1 as $m){
        $s=$m["id_user"];
        $use=$data->prepare("SELECT * FROM user WHERE idU=$s");
        $use->execute();
        foreach($use as $yh){
echo '
        <div class=" d-flex align-items-center mt-5 " >
<img src="image/'.$yh["imgU"].'" class="me-3" style="border-radius: 50%; width: 55px;">
<div>
<b style="font-size: 11px;">'.$yh["nomU"]."  ".$yh["prenomU"].'</b><br>
<b style="color: gray; font-size: 11px;">'.$m['dateC'].'</b><b style="color: gray; font-size: 10px;" class="mx-5">99% of users found this review helpful</b>
    </div>
</div>
<p style="font-weight: bold; font-size: 12px; " class="mt-2"  >'.$m['TextC'].'.</p>
<b style="font-size: 11px;">Pros:<b style="color: gray;">'.$m["Pros"].'</b></b><br>
<b style="font-size: 11px;">Cons:<b style="color: gray;">'.$m["Cons"].'</b></b><br>
<div class="d-flex">
<div class="d-flex align-items-center"   ><i class="bi bi-hand-thumbs-up " onclick="hani(this)"   style="font-size: 22px ;color: green; cursor: pointer; "><b id="contr" style="font-size: 10px;" class="ms-1"> 17</b></i></div>
<div class="d-flex align-items-center ms-3"><i class="bi bi-hand-thumbs-down"  onclick="hani(this)"    style="font-size: 22px ;color: rgb(255, 1, 1); cursor: pointer; "><b id="contr" style="font-size: 10px;" class="ms-1"> 5</b></i></div>
</div>';
}
}
}
?>

















































    </div>






















<div class="col-md-4 ms-auto py-5">
<form method="POST">
<h1><b style="font-size: 20px;">Write a review</b></h1>
<b style="font-size: 10px; color: gray;">Authentication only - we won't spam you.</b><br>
  <label class="py-2"><b style="font-size: 13px;">Review*</b></label>
  <textarea  class="form-control" style="height: 140px;" name='textC'></textarea>



  <label class="py-2"><b style="font-size: 13px;">Pros</b></label>
  <textarea  class="form-control" name='Pros'></textarea>




  <label class="py-2"><b style="font-size: 13px;">Cons</b></label>
  <textarea  class="form-control" name='Cons'></textarea>
  <button class=" mino " type="submit" name='rev'>submit Reviews</button>
  
</form>
</div>


























</div>
























































    </div>
    
    
    
    
    
    
    
    
    















































    <div id="v11">
<div class="row">
 
   

<div class="col-2 imagex ">
<img src="image/<?php echo $img2 ?>"  onmousemove="change(this)" class="img-fluid " style="width: 80px;">
         <img  src="image/<?php echo $img3 ?>" onmousemove="change(this)"  class="img-fluid " style="width: 80px;">
         <img src="image/<?php echo $img4 ?>"  onmousemove="change(this)" class="img-fluid " style="width: 80px;">
         <img src="image/<?php echo $img5 ?>" onmousemove="change(this)" class="img-fluid " style="width: 80px;">
    </div>
    <div class="col-6" style="margin: auto;">
        <img src="image/<?php echo $img1 ?>" class="zoom pub img-fluid"  data-magnify-src="image/<?php echo $img1 ?>"   >
    </div>
  
 
    <div class="col-md py-3">
        <div class="row">
    
       <div class="mt-3">
        <div class="row d-flex align-items-center ">
    <div class="col " ><b c style="color: blue;font-size: 22px; "  ><?php echo $prix ?>$</b></div>
    <div class="col  " style="margin-left: 20px;"> <span id="spanix"><i class="bi bi-patch-check px-2" style="color: white; font-size: 16px;"></i>Product available</span></div>
    </div>
    </div>
















       





<form method="POST">

    <div class="mt-3">
        <div class="row">
    <select class="col-2 info" name="Quantite">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    

   
   <button class="col" id="buy" value="<?php echo $id ?>" name="ajpanier" style="margin-left: 20px;"><i class="bi bi-bag-plus px-2" style="color: balck; font-size:17px;"></i>Add to card</button>';


</div>







<div class="mt-3">
    <div class="row">
<button class="col info "><i class="bi bi-heart px-2" style="color: balck; font-size:15px;"></i>Add to Wishlist</button>
<button class="col info  " style="margin-left: 20px;"><i class="bi bi-arrow-repeat px-2" style="color: balck; font-size:16px;"></i>Compart</button>
</div>
</div>
<!---name1-->
<div class="row">
<div class="col bobix my-3 py-3">
    <b class="d-flex align-items-center" style="font-size: 12px;"><i class="bi bi-truck px-3" style="font-size: 22px;" ></i>Shipping options</b>
    <hr>
    <div class="d-flex" style="width: 95%; padding-left: 10px;">
        <p  style="font-size: 11px; font-weight: bold;">Local courier shipping<br><b  style="color: gray;">2 - 4 days</b></p>
        <p class="ms-auto" style="font-size: 11px; font-weight: bold;">$16.50</p>
    </div>

    <div class="d-flex" style="width: 95%; padding-left: 10px;">
        <p  style="font-size: 11px; font-weight: bold;" >UPS ground shipping<br><b  style="color: gray;">2 - 4 days</b></p>
        <p class="ms-auto" style="font-size: 11px; font-weight: bold;">$19.00</p>
    </div>
    <div class="d-flex" style="width: 95%; padding-left: 10px;">
        <p  style="font-size: 11px; font-weight: bold;">Local pickup from store<br><b style="color: gray;">2 - 4 days</b></p>
        <p class="ms-auto" style="font-size: 11px; font-weight: bold;">$0.50</p>
    </div>
    <hr>
    <b class="d-flex align-items-center" style="font-size: 11px; font-weight: bold;" ><i class="bi bi-geo-alt px-3" style="font-size: 22px;" ></i>Find in local store</b>
    <select class=" m-auto info "  style="width: 100%;"  >
        <option selected>Select your Ville</option>
        <option value="1">safi</option>
        <option value="2">casa</option>
        <option value="3">agadir</option>
      </select>
</div>
</div>
</form>












<div style="display: flex; align-items: center; justify-content: start; " >
<b>Share:</b>
<div class="twitter mx-1">
<b class="bi bi-twitter "></b><b>twitter</b>
</div>
<div class="instagram mx-1">
    <b class="bi bi-instagram "></b><b>instagram</b>
    </div>
    <div class="facebook mx-1">
        <b class="bi bi-facebook"></b><b>facebook</b>
        </div>






</div>
    </div>


        </div>

</div>
</div>

</div>


























































<div class="container py-3">
    <h1 style="font-weight: bold; text-align: center; font-size: 23px;">You may also like</h1>
</div>




<!----card-->
<!-- <div class="lefex"><i class="bi bi-chevron-left"></i></div>
<div class="reghtix"><i class="bi bi-chevron-right"></i></div> -->
<div class="container my-5">
   <div class="row ">
    <div class="col-sm ckli">
        <div class="card bg-light text-dark mb-5 " style="border: none;">
            <img class="card-img-top img-fluid m-auto" src="image/pcc5.png" style="width: 250px;" >
            <div class="card-body">
                <div  style="font-size: 11px; color: rgb(126, 126, 126); font-weight: bold;">Computers</div>
                <div class="card-text py-2" style="font-size: 12px; font-weight: bold; ">pc portable hp victus professionnel</div>
         <span style="padding-right: 40px;font-size: 18px; color: blue;">1454$</span>
       
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star"></i>
        
             </div>
             <button class="bott"><i class="bi bi-cart"></i>shoop</button>
             <button class="bott1"><i class="bi bi-eye px-2" style="color: balck; "></i>Quick view</button>
        </div>
        
    </div>


 
       <div class="col-sm ckli">
        <div class="card bg-light text-dark mb-5" style="border: none;">
            <img class="card-img-top img-fluid m-auto" src="image/pcc5.png" style="width: 250px;">
            <div class="card-body">
                <div  style="font-size: 11px; color: rgb(126, 126, 126); font-weight: bold;">Computers</div>
                <div class="card-text py-2" style="font-size: 12px; font-weight: bold; ">pc portable hp victus professionnel</div>
         <span style="padding-right: 50px;font-size: 18px; color: blue;">1454$</span>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star"></i>
         
             </div>
             <button class="bott"><i class="bi bi-cart"></i>shoop</button>
             <button class="bott1"><i class="bi bi-eye px-2" style="color: balck; "></i>Quick view</button>
        </div>
    </div>




    <div class="col-sm ckli">
        <div class="card bg-light text-dark mb-5" style="border: none;">
            <img class="card-img-top img-fluid m-auto" src="image/pcc5.png" style="width: 250px;">
            <div class="card-body">
                <div  style="font-size: 11px; color: rgb(126, 126, 126); font-weight: bold;">Computers</div>
                <div class="card-text py-2" style="font-size: 12px; font-weight: bold; ">pc portable hp victus professionnel</div>
         <span style="padding-right: 50px;font-size: 18px; color: blue;">1454$</span>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star"></i>
         <i class="bi bi-star"></i>
         
             </div>
             <button class="bott"><i class="bi bi-cart"></i>shoop</button>
             <button class="bott1"><i class="bi bi-eye px-2" style="color: balck; "></i>Quick view</button>
        </div>
    </div>


















    <div class="col-sm ckli">
        <div class="card bg-light text-dark mb-5" style="border: none;">
            <img class="card-img-top img-fluid m-auto"src="image/pcc5.png" style="width: 250px;">
            <div class="card-body">
                <div  style="font-size: 11px; color: rgb(126, 126, 126); font-weight: bold;">Computers</div>
                <div class="card-text py-2" style="font-size: 12px; font-weight: bold; ">pc portable hp victus professionnel</div>
         <span style="padding-right: 50px;font-size: 20px; color: blue;">1454$</span>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star"></i>
             </div>
             <button class="bott"><i class="bi bi-cart"></i>shoop</button>
             <button class="bott1"><i class="bi bi-eye px-2" style="color: balck; "></i>Quick view</button>
        </div>
    </div>

































 











<div class="container py-5 " style="border: 1px solid rgb(234, 234, 234);">
    <div style="padding-bottom: 20px;"><h1 style="font-weight: bold; text-align: center; font-size: 23px;">Cheaper together</h1></div>
<div class="row d-flex align-items-center" >
    <div class="col m-auto" style="margin: auto ; text-align: center;">
<img src="image/pcc5.png" class="img-fluid" style="width: 200px;"><br>
<b>Your products</b><br>
<b>pc bureau</b><br>
<b style="color: blue;">$1412.1</b>
    </div>
    <div class="col-1">
        <b style="font-size: 40px; color: gray;">+</b>
    </div>



    <div class="col m-auto" style="margin: auto ; text-align: center;">
        <img src="image/LD0005523855_2_0005916680.jpg" class="img-fluid" style="width: 200px;"><br>
        <b>Your products</b><br>
        <b>Logitech G G502 SE Hero</b><br>
        <b style="color: blue;">$1412.1</b>
            </div>






            <div class="col-1 d-none d-lg-block">
                <b style="font-size: 40px; color: gray;">=</b>
            </div>
<div class="col-md-3 py-5 " style="text-align: center;">
<b style="color: blue; font-size: 25px;">$2000.5</b><br>
<button class="btn text-white my-3"  style="  background-image: linear-gradient(to left,rgb(255, 119, 0) , rgb(224, 111, 111)); padding: 10px 60px; font-weight: bold; font-size: 12px; border-radius: 10px;" >purchase together</button>
</div>












</div>

</div>















   </div>




   </div>
</div>



<?php
include "FOOTER.php";
?>
</div>
</div>
 

</body>
<script src="js/jquery.magnify.js"  charset="utf-8"></script>

<script src="js/Viepc.js"></script>

</html>