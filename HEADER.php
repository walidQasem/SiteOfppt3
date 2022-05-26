


<?php
$user='root';
$ps="";
$data= new PDO("mysql:host=localhost;dbname=ordishop",$user,$ps);
if(!isset($_SESSION)){

session_start();
if(!empty($_SESSION['email'])){
$go=$data->prepare("SELECT * FROM user WHERE emailU=:email");
$go->bindParam(':email',$_SESSION['email']);
$go->execute();
foreach($go as $mom){
    $nom=$mom['nomU'];
    $prenom=$mom['prenomU'];
    $icon="bi bi-person-check";
    $gon="Bonjour";
}}
else{
    $nom="sing";
    $prenom="in";
    $icon="bi bi-person";
    $gon="Hello,Sign in";
}

}
else{
    $icon="bi bi-person-check";
    $gon="Bonjour";
}
?>










<div class="ras">
    <div class="container "  style="display: flex; align-items: center;">
        <p><i class="bi bi-telephone px-2"  style="font-size: 20px;"></i>Available 24/7 at<a href="tel:(00) 33 169 7720">(00) 33 169 7720</a></p>
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


<header class="header bg-white navbar-white text-white px-3 py-2  ">
    <div class="container-fluid d-flex align-items-center " style="width:93%;">
    <a href="#" ><img src="image/logo24.png" class="img-fluid " width="190px"></a>
    <input class=" ms-5 d-none d-lg-block  " type="search" placeholder="search for products" style="height: 43px;border-radius: 5px; outline:  none; padding-left: 10p; border: 1px solid rgb(206, 206, 206); padding-left: 40px; width: 670px;">

    <i class="bi bi-search d-none d-lg-block"  style="position: absolute; font-size: 20px; cursor: pointer; color : rgb(255, 106, 0); margin-left: 283px;"></i>
    <button class="navbar-toggler d-lg-none    "  data-bs-toggle="collapse" data-bs-target="#mainmenu"><i class="bi bi-list" style="font-size: 30px;"></i></button>
 
    <a href="login.php"   class="ms-auto d-flex align-items-center" style="text-decoration: none;"><i class=" <?php echo $icon ?> px-2" style="font-size: 25px;  color: rgb(128, 128, 128);"></i>  <p class="text-black d-none d-sm-block " style="font-weight: 500; font-size: 12px;"><span style="font-size: 9px;color: rgb(94, 94, 94) ; font-weight: bold;"><?php echo $gon; ?></span><br><b style="font-size: 11px;"><?php echo $nom." ".$prenom?></b></p> </a>
  

<!-- <div id="brr" class="d-sm-none d-lg-block" >No products in the cart</div> --> <a href="panier.php"   class="ms-auto d-flex align-items-center p" style="text-decoration: none;"><div id="num">0</div><i class="bi bi-cart2 px-2 mx-2" style="font-size: 25px; color: rgb(133, 133, 133);"></i>  <p class="text-black d-none d-sm-block dropdown-toggle " style="font-size: 12px;"><span  style="font-size: 9px;color: rgb(97, 97, 97) ; font-weight: bold;">My cart</span><br>$1,247.00 </p> </a>
  

    
</div>

<!--search sm-->
<div id="searchsm" style="display: none;"><input class="form-control  d-lg-none  m-auto mt-3" type="search" style="width: 80%;" placeholder="search for products"></div>

<div class="navbar navbar-expand-lg bg-white navbar-dark text-black ">
    <div class="container ">


    <div class="collapse navbar-collapse" id="mainmenu" >
       



    <ul class="navbar-nav ">
        <li class="nav-item d-flex align-items-center  "><i class="bi bi-house px-2" style="font-size: 23px; "></i><a href="index.php" class="nav-link text-dark" style=" font-size: 13px; font-weight: bold;">Home</a></li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" style=" font-size:13px;font-weight: bold">Nos ordinateur</a>
            <ul class="dropdown-menu">
                <li><a href="#" class="nav-link dropdown-item text-dark text-dark "><b style="font-size:12px ;">Nos ordinateurs de bureau</b></a></li>
                <li><a href="#" class="nav-link dropdown-item text-dark  text-dark"><b style="font-size:12px ;">Mini pc</b></a></li>
                <li><a href="#" class="nav-link dropdown-item text-dark  text-dark"><b style="font-size:12px ;">Ordinateur Poartable</b></a></li>
            </ul>
        </li>
       


        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" style=" font-size:13px;font-weight: bold ">Nos cofrrer</a>
            <ul class="dropdown-menu">
                <li><a href="#" class="nav-link dropdown-item text-dark text-dark "><b style="font-size:12px ;">Cofrret Entreprise/Ecole</b></a></li>
                <li><a href="#" class="nav-link dropdown-item text-dark  text-dark"><b style="font-size:12px ;">Coffret ordinateur bureau avec accessoires</b></a></li>
            </ul>
        </li>






        <li class="nav-item"><a href="#" class="nav-link text-dark" style=" font-size: 13px; font-weight: 600;">Nos fournisseur</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-dark" style=" font-size: 13px; font-weight: bold;">Qui sommes-noun?</a></li>
        <li class="nav-item"><a href="Blog.php" class="nav-link text-dark" style=" font-size: 14px; font-weight: bold;">Blog</a></li>





        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" style=" font-size:13px;font-weight: bold ">Espace Client</a>
            <ul class="dropdown-menu">
                <li><a href="login.php" class="nav-link dropdown-item text-dark text-dark "><b style="font-size:12px ;">s'inscrire</b></a></li>
                <li><a href="profil.php" class="nav-link dropdown-item text-dark  text-dark"><b style="font-size:12px ;">Profil<i class="bi bi-person ms-1" style="font-size:17px;"></i></a></b></li>
                <li><a href="#" class="nav-link dropdown-item text-dark  text-dark"><b style="font-size:12px ;">Sortie<i class="bi bi-box-arrow-in-left ms-2" style="font-size:17px;"></i></b></a></li>
                
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























































































