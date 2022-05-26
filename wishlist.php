<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porfil</title>
    <link rel="stylesheet" href="css/Blog.css">
    <link rel="shortcut icon" type="image/png" href="image/aa1.png">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Mea+Culpa&family=Open+Sans:ital,wght@0,300;1,300&family=Spartan:wght@300&display=swap" rel="stylesheet">

</head>
<body>

<?php
    $bob='none';
    $red='none';
    $user='root';
    $ps="";
    $data= new PDO("mysql:host=localhost;dbname=ordishop",$user,$ps);
    session_start();
 if(!empty($_SESSION['email']))   {
$sel=$data->prepare("SELECT * FROM user WHERE emailU=:email");
$sel->bindParam(":email",$_SESSION['email']);
$sel->execute();

    foreach($sel as $m){
        $nom=$m['nomU'];
        $prenom=$m['prenomU'];
        $tel=$m['telU'];
        $email=$m['emailU'];
        $password=$m['passwordU'];
        $img=$m['imgU'];
        }





if(isset($_POST['singup'])){


   if($_POST['img']==""){
    $_POST['img']=$img;
   }
 $bob=$_SESSION['email'];
    $sup=$data->prepare("UPDATE user SET nomU=:nom,prenomU=:prenom,telU=:tel,imgU=:img WHERE emailU='$bob'");
    $sup->bindParam(":nom",strip_tags($_POST['nom']));
    $sup->bindParam(":prenom",strip_tags($_POST['prenom']));
    $sup->bindParam(":tel",strip_tags($_POST['tel']));
    $sup->bindParam(":img",strip_tags($_POST['img']));
    $sup->execute();  
    header("Location:profil.php");

    
}}
else{
    header('location:login.php');
}

if(isset($_POST['logo'])){
    session_unset();
    header('location:login.php');
    
}
?>











<?php
include "HEADER.php";

?>












<div class="container-fluid py-3" style="width: 85%;" >
 <div class="row d-flex align-items-center">




     <div class="col-sm-9 ">
<h2 class="mt-4" style="font-weight: bold; color: rgb(92, 92, 92);">Your wishlise </h2>
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


















































<div class="container">






  <div class="row my-5">




<div class="col-md-4 ">
        <div class="d-flex align-items-center">
        <img src="image/<?php echo $img ?>" value="<?php echo $img ?>" style="width:80px;height: 80px; border-radius: 50%;">
        <div class="mx-3">
        <b><?php echo $nom ?><?php echo $prenom ?></b><br>
        <b style="color: blue; font-size: 11px;"><?php echo $email ?></b></div></div>

   <p class="mt-4"><b>Tableau de bord</b></p>

   <b><a href="#" class="lin"><i class="bi bi-bag me-3 "  style="font-size: 17px;"></i>Ordres</a></b><br><br>
   
   <b><a href="wishlist.php" style=" color: blue;" class="lin"><i class="bi bi-heart me-3"  style="font-size: 17px;"></i>Liste de souhaits</a></b><br><br>
   <b><a href="#" class="lin"><i class="bi bi-broadcast me-3"  style="font-size: 17px;"></i></i>Billets d'assistance</a></b><br><br>
   <b>Account settings</b><br><br>
   <b><a href="profil.php" class="lin" ><i class="bi bi-person-circle me-3" style="font-size: 17px;"></i></i>Profile info</a></b><br><br>
   <b><a href="#" class="lin"><i class="bi bi-geo-alt me-3"  style="font-size: 17px;"></i></i>Adresse</a></b><br><br>
   <b><a href="#" class="lin"><i class="bi bi-credit-card-2-back me-3"  style="font-size: 17px;"></i></i>Payment methods</a></b><br><br>

</div>












  
<div class="col-md mt-5 m-auto text-center">
<img src="image/love (1).png" class="img-fluid m-auto pb-5" style="width: 150px; display: flex; justify-content: center;">
<b class="text-center">Votre liste d'envies est vide !</b><br>
<b style="width: 300px; font-size: 12px;">Vous avez trouvé quelque chose que vous aimez ? Tapez sur l'icône en forme de cœur à côté de l'article pour l'ajouter à votre liste d'envies! Tous vos articles sauvegardés apparaîtront ici.</b><br>
<a href="shopNew.php"><button class="btn  mt-3 px-2 p-3 text-white" id='khos'>POURSUIVEZ VOS ACHATS</button></a>
<style>
    #khos{
        font-weight: bold;
        font-size: 11px;
        background-image: linear-gradient(to left,rgb(255, 119, 0) , rgb(224, 111, 111));

    }
</style>
  </div>






















</div>











</div>



<?php
include "FOOTER.php";

?>





<style>
    .lin{
        text-decoration: none;
        color: grey;
        font-size: 12px;
    }
    #file{
        border: none;
    }
</style>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>