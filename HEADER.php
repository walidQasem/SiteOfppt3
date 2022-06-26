


<?php
include "BS.php";
if(isset($_COOKIE['email'])){
$email=$_COOKIE['email'];
$go=$data->prepare("SELECT * FROM user WHERE emailU='$email'");
$go->execute();
foreach($go as $mom){
    $nom=$mom['nomU'];
    $prenom=$mom['prenomU'];
    $icon="bi bi-person-check";
    $gon="Bonjour";
}}
else{
    $nom="";
    $prenom="S'inscrire";
    $icon="bi bi-person";
    $gon="Bonjour";
}
if(isset($_SESSION['countNot'])){
$count=$_SESSION['countNot'];
}
else{
    $count=0;
}
?>










<div class="ras" style="height:40px;display: flex; align-items: center;" >
    <div class="container "  style="display: flex; align-items: center;">
<select class="form-control w-10" id="select" style="width:100px; background-color:transparent; border: none;">
        <option><i class="bi bi-translate" style="font-size:22px; color:white;"></i><b style="color: white; font-size: 10px;" class="mx-2">Translate</b></option>
        <option><b style="font-size:12px ;"><img src="image/la-france.png" style="width: 25px; ;" class="mx-3"><b style="color: white; font-size: 10px;" class="mx-2"></b>France</option>
        <option><b style="font-size:12px ;"><img src="image/maroc2.png" style="width: 25px; ;" class="mx-3"><b style="color: white; font-size: 10px;" class="mx-2"></b>العربية</option>
    </select>
 
<!-- <p><i class="bi bi-telephone px-2"  style="font-size: 20px;"></i><b style="font-size: 10px; color: #DCDCDC;">Available 24/7 at</b><a href="tel:(00) 33 169 7720">(00) 33 169 7720</a></p> -->
</div>
</div>
<style>
.ras{
    width: 100%;
    height: 35px;
    background-color: rgb(66, 69, 77);
    color: white;
    
}
.ras p {
    
    font-size: 12px;
}
.ras a{
    
    font-size: 12px;
    font-weight: bold;
    text-decoration: none;
    color: white;
}
</style>


<header class="header bg-white navbar-white text-white px-3    ">
    <div class="container-fluid d-flex align-items-center " style="width:93%;">
    <a href="index.php" ><img src="image/logo14.png" class="img-fluid " width="170px"></a>
    <input class=" ms-5 d-none d-lg-block  " type="search" placeholder="search for products" style="height: 43px;border-radius: 5px; outline:  none; padding-left: 10p; border: 1px solid rgb(206, 206, 206); padding-left: 40px; width: 670px; font-weight: bold; font-size: 12px;">

    <!-- <i class="bi bi-search d-none d-lg-block"  style="position: absolute; font-size: 20px; cursor: pointer; color : rgb(255, 106, 0); margin-left: 283px;"></i> -->
    <button class="navbar-toggler d-lg-none    "  data-bs-toggle="collapse" data-bs-target="#mainmenu"><i class="bi bi-list" style="font-size: 30px;"></i></button>
 
    <a href="login.php"   class="ms-auto d-flex align-items-center" style="text-decoration: none;"><i class=" <?php echo $icon ?> px-2" style="font-size: 25px;  color: rgb(128, 128, 128);"></i>  <p class="text-black d-none d-sm-block " style="font-weight: 500; font-size: 12px;"><span style="font-size: 9px;color: rgb(94, 94, 94) ; font-weight: bold;"><?php echo $gon; ?></span><br><b style="font-size: 11px;"><?php echo $nom." ".$prenom?></b></p> </a>
  
 <a href="panier.php"   class="ms-auto d-flex align-items-center p" style="text-decoration: none;"><div id="num"><?php echo $count; ?></div><i class="bi bi-cart2 px-2 mx-2" style="font-size: 25px; color: rgb(133, 133, 133);"></i>  <p class="text-black d-none d-sm-block dropdown-toggle " style="font-size: 12px;"><span  style="font-size: 9px;color: rgb(97, 97, 97) ; font-weight: bold;">le panier</span><br><b style="font-size:10px;">$1,247.00</b> </p> </a>
  

    
</div>

<!--search sm-->
<div id="searchsm" style="display: none;"><input class="form-control  d-lg-none  m-auto mt-3" type="search" style="width: 80%;" placeholder="search for products"></div>

<div class="navbar navbar-expand-lg bg-white navbar-dark text-black ">
    <div class="container ">


    <div class="collapse navbar-collapse" id="mainmenu" >
       



    <ul class="navbar-nav py-2">
        <li class="nav-item d-flex align-items-center  "><i class="bi bi-house px-2" style="font-size: 23px; "></i><a href="index.php" class="nav-link text-dark linked" style=" font-size: 13px; font-weight: bold;" >accueil</a></li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-dark mx-2 linked" data-bs-toggle="dropdown" style=" font-size:12px;font-weight: bold">Nos ordinateur</a>
            <ul class="dropdown-menu">
                <li><a href="shopNew.php?type=bureau" class="nav-link dropdown-item text-dark text-dark "><b style="font-size:12px ;">Nos ordinateurs de bureau</b></a></li>
                <li><a href="shopNew.php?type=mini" class="nav-link dropdown-item text-dark  text-dark"><b style="font-size:12px ;">Mini pc</b></a></li>
                <li><a href="shopNew.php?type=portable" class="nav-link dropdown-item text-dark  text-dark"><b style="font-size:12px ;">Ordinateur Poartable</b></a></li>
            </ul>
        </li>
       


        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-dark mx-2 linked" data-bs-toggle="dropdown" style=" font-size:12px;font-weight: bold ">Nos cofrrer</a>
            <ul class="dropdown-menu">
                <li><a href="#" class="nav-link dropdown-item text-dark text-dark "><b style="font-size:12px ;">Cofrret Entreprise/Ecole</b></a></li>
                <li><a href="#" class="nav-link dropdown-item text-dark  text-dark"><b style="font-size:12px ;">Coffret ordinateur bureau avec accessoires</b></a></li>
            </ul>
        </li>






        <li class="nav-item"><a href="Nos fourniseur.php" class="nav-link text-dark mx-2 linked" style=" font-size: 13px; font-weight: 600;">Nos fournisseur</a></li>
        <li class="nav-item"><a href="sommeNous.php" class="nav-link text-dark linked" style=" font-size: 13px; font-weight: bold;">Qui sommes-nous?</a></li>
        <li class="nav-item"><a href="Blog.php" class="nav-link text-dark linked" style=" font-size: 14px; font-weight: bold;">Blog</a></li>





        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-dark mx-2 linked" data-bs-toggle="dropdown" style=" font-size:12px;font-weight: bold ">Espace Client</a>
            <ul class="dropdown-menu">
                <li><a href="login.php" class="nav-link dropdown-item text-dark text-dark "><b style="font-size:12px ;">s'inscrire</b></a></li>
                <li><a href="profil.php" class="nav-link dropdown-item text-dark  text-dark"><b style="font-size:12px ;">Profil<i class="bi bi-person ms-1" style="font-size:17px;"></i></a></b></li>
                <li><a href="#" class="nav-link dropdown-item text-dark  text-dark"><b style="font-size:12px ;">Sortie<i class="bi bi-box-arrow-in-left ms-2" style="font-size:17px;"></i></b></a></li>
                
            </ul>
        </li>



        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-dark mx-2 linked" data-bs-toggle="dropdown" style=" font-size:12px;font-weight: bold ">Aide</a>
            <ul class="dropdown-menu">
                <li><a href="FAQ.php" class="nav-link dropdown-item text-dark text-dark "><b style="font-size:12px ;">FAQ</b></a></li>
                <li><a href="#" class="nav-link dropdown-item text-dark  text-dark"><b style="font-size:12px ;">Mentions legales</b></a></li>
                <li><a href="Contact.php" class="nav-link dropdown-item text-dark  text-dark"><b style="font-size:12px ;">Contact</b></a></li>
            </ul>
        </li>


    </ul>
</div>    
</div>
</div>
</header>
<!--header tel sm-->
<div class="d-lg-none align-items-center  " style="height: 70px; padding-bottom: 20px; width: 100%; background-color: rgb(255, 255, 255); position: fixed;bottom: 0; z-index: 1; border-top: 1px solid rgb(222, 222, 222);">
    <div class="row d-flex  d-lg-none align-items-center   " style="margin: auto;">
<div class="col-4" ><button  style="border: none ;outline: none;" class="px-5 btnmin py-2"><i class="bi bi-house" style="font-size: 23px;"></i><p style="font-size: 12px; font-weight: bold; ">Home</p></button></div>
<div class="col-4" ><button class="btnmin px-5"  style="border: none ;outline: none;  "  data-bs-toggle="collapse" data-bs-target="#mainmenu"><i class="bi bi-list" style="font-size: 30px;"></i><p style="font-size: 12px; font-weight: bold; border: none;">Category</p></button></div>
<div class="col-4" ><button  style="border: none ;outline: none;  " class="btnmin px-5 py-2" onclick="visible('searchsm')"><i class="bi bi-search" style="font-size: 23px;"></i><p style="font-size: 12px; font-weight: bold;">Search</p></button></div>
</div></div>

<style>  
.btnmin{
    background-color: white;
    transition: 0.3s;
    outline: none;
    box-shadow: 0px;
    width: 100%;
}
.btnmin:hover{

background-color: rgb(231, 231, 231);
transition: 0.3s;
box-shadow: inset;
 box-shadow: 1px 1px 1px white;
}
</style>























































































