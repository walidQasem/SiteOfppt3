<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Index</title>
        <link rel="stylesheet" href="css/hamid.css">
        <link rel="shortcut icon" type="image/png" href="image/logoP.png">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/jcarousel.responsive.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
        <script type="text/javascript" src="js/jcarousel.responsive.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="js/jquery-3.6.0.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Mea+Culpa&family=Open+Sans:ital,wght@0,300;1,300&family=Spartan:wght@300&display=swap" rel="stylesheet">
<body >
<?php 
session_start();
include "BS.php";
$slq=$data->prepare("SELECT * FROM produite");
$slq->execute();
include "HEADER.php";
?>
<!----Hero-->
<section class=" text-dark  mt-4" style="background-color: rgb(255, 255, 255); ">
    <div class="container-fluid d-md-flex align-items-center justify-content-center text-center  px-4 text-md-start" style="width: 90%; ">
    <div >
    </div>
    <div class="row d-flex align-items-centere  ">



        <div class="col-lg-3">
<div class="maina my-3"><img src="image/pcc5.png" style="width: 110px;" class="img-fluid w-40"><div><b style="color: white; font-size: 12px;" class="banner">Bannière de vente de gadgets les mieux notées</b><br>    <div class="d-flex align-items-center py-2" ><a class="shopN" href="#" style="text-decoration: none; "><b  class="shop">Shop now</b></a><i  class="bi bi-chevron-right " style="font-size: 16px; margin-top: 5px; color: rgb(0, 34, 255); "></i></div></div> </div>
<div class="maina my-3"><img src="image/pcc5.png" style="width: 110px;" class="img-fluid w-40"><div><b style="color: white; font-size: 12px;" class="banner">Bannière de vente de gadgets les mieux notées</b><br>    <div class="d-flex align-items-center py-2" ><a  class="shopN" href="#" style="text-decoration: none; "><b class="shop">Shop now</b></a><i  class="bi bi-chevron-right " style="font-size: 16px; margin-top: 5px; color: rgb(0, 34, 255); "></i></div></div> </div>
<div class="maina my-3"><img src="image/pcc3.png" style="width: 110px;" class="img-fluid w-40"><div><b style="color: white; font-size: 12px;" class="banner">Bannière de vente de gadgets les mieux notées</b><br>    <div class="d-flex align-items-center py-2" ><a  class="shopN" href="#" style="text-decoration: none; "><b class="shop">Shop now</b></a><i  class="bi bi-chevron-right " style="font-size: 16px; margin-top: 5px; color: rgb(0, 34, 255); "></i></div></div> </div>
        </div>

<div class="col d-flex align-items-center ">
 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row d-flex align-items-center ">
      <div class="col-md  py-5 px-4   " >
            <p class="check" style="color: rgb(0, 0, 0); font-weight: bold;font-size:26px;" >Consultez notre énorme</p>
            <p class="display-5 ordi" style="font-weight: bold; color: rgb(0, 0, 0);">Des ordinateurs</p>
            <p class="display-5" style="font-size: 20px; color: rgb(0, 0, 0);font-weight: bold;">&Accessoier collection</p>
            <a href="shopNew.php" style="text-decoration: none;" class="ms-5"><button  class="btn1 mt-5 text-white"   style="height:40px ;">Shoop<i  class="bi bi-chevron-right " style="font-size: 18px; margin-top: 5px; color: white;"></i></button></a>
        </div>
<div class="col "><img src="image/272d197df3c6ec1716ea70b84da6c5b2.gif" style="width: 100%; " class="img-fluid w-100  "></div>
      </div>
    </div>

    <div class="carousel-item">
    <div class="row d-flex align-items-center">
      <div class="col-md  py-5 px-4   " >
      <p class="check" style="color: rgb(0, 0, 0); font-weight: bold;font-size:26px;" >Consultez notre énorme</p>
            <p class="display-5 ordi" style="font-weight: bold; color: rgb(0, 0, 0);">Des ordinateurs</p>
            <p class="display-5" style="font-size: 20px; color: rgb(0, 0, 0);font-weight: bold;">&Accessoier collection</p>
            <a href="shopNew.php" style="text-decoration: none;" class="ms-5"><button  class="btn1 mt-5 text-white  "   style="height:40px ;">Shoop<i  class="bi bi-chevron-right " style="font-size: 18px; margin-top: 5px; color: white;"></i></button></a>
        </div>
        <div class="col "><img src="image/272d197df3c6ec1716ea70b84da6c5b2.gif" style="width: 100%; " class="img-fluid w-100  "></div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>
</div>
</section>
<!----Marque-->
<div class="container marque py-4 ">
    <img  src="image/aa1.png">
    <img src="image/leno.png">
    <img src="image/llg.png">
    <img src="image/hhp.png">
    <img src="image/hh1.png">
    <img src="image/acc.png">
    <img src="image/download.png">
    <img src="image/hh1.png">
    <img src="image/aa1.png">
</div>
<!---Novo-->
<div class="container">
<div class="row mt-5">
    <!---card1-->
    <div class="col py-3">
        <div class="card">
         <div class="d-flex justify-content-center"><img src="image/laptop-mock-up-front-view_1310-198.webp" class="img-fluid  "></div>
            <div class="card-body">
                <div class="title">Portable</div>
                <div class="vaiber">
                    <a href="#">PC portables</a>
                    <a href="#">PMacbook</a>
                    <a href="#">Reconditionnés</a>
                    <a href="#">RAM PC portables</a>
                    <a href="#">Sacs & sacoches</a>
 
                </div>
            </div>
        </div>
    </div>
    <!---card1-->
    <div class="col py-3">
        <div class="card ">
            <div class="d-flex justify-content-center"><img src="image/laptop-mock-up-front-view_1310-198.webp" class="img-fluid "></div>
            <div class="card-body">
                <div class="title">Portable</div>
                <div class="vaiber">
                    <a href="#">PC de bureau</a>
                    <a href="#">Ordinateur Mac</a>
                    <a href="#">Garantie PC</a>
                    <a href="#">Serveur NAS</a>
                    <a href="#">Barebone</a>
      
                </div>
            </div>
        </div>
    </div>
        <!---card1-->
        <div class="col-md py-3 ">
            <div class="card">
                <div class="d-flex justify-content-center"><img src="image/laptop-mock-up-front-view_1310-198.webp" class="img-fluid  "></div>                <div class="card-body">
                    <div class="title">Compasent</div>
                    <div class="vaiber">
                    <a href="#">Stockage</a>
                    <a href="#">Carte graphique</a>
                    <a href="#">Processeur</a>
                    <a href="#">Mémoire PC</a>
                    <a href="#">Carte mère</a>
        
                </div>
                </div>
            </div>
        </div>
</div>
</div>
<!----card-->
<div class="container my-5">
    <div class="row d-flex align-items-center ">
    <div class="col-8 "><h1 class="py-4" style="font-size: 18px; margin-left: 20px;"><b>Trending products</b></h2></div>
       <div class="col-4 "> <a href="#" style="text-decoration: none;"><button class="boot">More Product</button> </a></div>
        <hr>
    </div>
   <div class="row ">
<!---caroussel---->
   <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
<?php
foreach($slq as $date){
   echo' <li><div class="col-sm ckli py-2">
        <i class="bi bi-heart main" style="margin-left: 250px;"></i>
        <div class="card bg-light text-dark mb-5" style="border: none;">
            <img class="card-img-top img-fluid m-auto"src="image/'.$date['imgP'].'" style="width: 250px;">
            <div class="card-body">
                <div  style="font-size: 11px; color: rgb(126, 126, 126); font-weight: bold;">Computers</div>
                <div class="card-text py-2" style="font-size: 12px; font-weight: bold; ">pc portable hp victus professionnel</div>
         <span style="padding-right: 50px;font-size: 14px; color: blue;">1454$</span>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star"></i>
             </div>
             <button class="bott"><i class="bi bi-cart"></i>Add to card</button>
    </div>
    </li>';
}
?>
    </ul>
</div>
<a href="#" class="jcarousel-control-prev">&lsaquo;</a>
<a href="#" class="jcarousel-control-next">&rsaquo;</a>
</div>
</div>
<!---pub-->
    <div class="d-sm-flex text-center  align-items-center py-3" id="main">
        <div class="ms-5">
<b text-danger" style="font-weight: bold;">All new</b><br>
<b  style="font-size: 30px;">Last Gen Alienware</b>
<p  style="font-size: 30px;">at discounted price. Hurry up!</p>
<p  style="font-size: 20px;"><b id="b1" class="mx-3">12</b>h<b id="b2" class="mx-3">1</b>m<b id="b3" class="mx-3">16</b>s</p>
<button class="btn  text-white px-5 " style="height: 45px; font-weight: bold; background-image: linear-gradient(to left,rgb(255, 162, 0),rgb(232, 126, 34)); border-radius: 5px;">view offers</button>
        </div>
<img src="image/kli.png" class="img-fluid w-50 ms-auto py-5 " >
    </div>
<!----card2-->
<div class="container my-2">
    <div class="row d-flex align-items-center ">
        <div class="col-8 "><h1 class="py-4" style="font-size: 18px; margin-left: 20px;"><b>Trending products</b></h2></div>
           <div class="col-4 "> <a href="#" style="text-decoration: none;"><button class="boot">More Product</button> </a></div>
            <hr>
        </div>
    <div class="row">
        <div class="col ckli">
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
                 <!-- <button class="bott1"><i class="bi bi-eye px-2" style="color: balck; "></i>Quick view</button> -->
            </div>
        </div>   
        <div class="col ckli">
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
                 <!-- <button class="bott1"><i class="bi bi-eye px-2" style="color: balck; "></i>Quick view</button> -->
            </div>
        </div>   
        <div class="col ckli">
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
                 <!-- <button class="bott1"><i class="bi bi-eye px-2" style="color: balck; "></i>Quick view</button> -->
            </div>
        </div>   
        <div class="col ckli">
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
                 <!-- <button class="bott1"><i class="bi bi-eye px-2" style="color: balck; "></i>Quick view</button> -->
            </div>
        </div>
    </div>
</div>
</div>
<!---les bass-->
<div class="container">
    <div class="row ">
        <div class="col">
            <b>Bestsellers</b>
            <!---article-->
            <div class="d-flex align-items-center">
                <img src="image/pcc5.png"  style="width: 80px;">
                <div>
                    <b style="font-size: 12px;">Wireless Bluetooth Headphones</b><br>
                    <b style="color: blue;">123,2$</b>
                </div> 
            </div>
            <!---article-->
            <div class="d-flex align-items-center">
                <img src="image/pcc5.png"  style="width: 80px;">
                <div>
                    <b style="font-size: 12px;">Wireless Bluetooth Headphones</b><br>
                    <b style="color: blue;">123,2$</b>
                </div> 
            </div>
            <!---article-->
            <div class="d-flex align-items-center">
                <img src="image/pcc3.png"  style="width: 80px;">
                <div>
                    <b style="font-size: 12px;">Wireless Bluetooth Headphones</b><br>
                    <b style="color: blue;">123,2$</b>
                </div> 
            </div>
            <!---article-->
            <div class="d-flex align-items-center">
                <img src="image/pcc5.png"  style="width: 80px;">
                <div>
                    <b style="font-size: 12px;">Wireless Bluetooth Headphones</b><br>
                    <b style="color: blue;">123,2$</b>
                </div> 
            </div>
            <a href="#" class="d-flex align-items-center" style="text-decoration: none; font-weight: bold; font-size: 12px;" >View more<i class="bi bi-box-arrow-in-right" style="font-size: 22px;"></i></a>
        </div>
        <div class="col">
            <b>Bestsellers</b>
            <!---article-->
            <div class="d-flex align-items-center">
                <img src="image/pcc5.png"  style="width: 80px;">
                <div>
                    <b style="font-size: 12px;">Wireless Bluetooth Headphones</b><br>
                    <b style="color: blue;">123,2$</b>
                </div> 
            </div>
            <!---article-->
            <div class="d-flex align-items-center">
                <img src="image/pcc5.png" style="width: 80px;">
                <div>
                    <b style="font-size: 12px;">Wireless Bluetooth Headphones</b><br>
                    <b style="color: blue;">123,2$</b>
                </div> 
            </div>
            <!---article-->
            <div class="d-flex align-items-center">
                <img src="image/pcc5.png"  style="width: 80px;">
                <div>
                    <b style="font-size: 12px;">Wireless Bluetooth Headphones</b><br>
                    <b style="color: blue;">123,2$</b>
                </div> 
            </div>
            <!---article-->
            <div class="d-flex align-items-center">
                <img src="image/pcc5.png"  style="width: 80px;">
                <div>
                    <b style="font-size: 12px;">Wireless Bluetooth Headphones</b><br>
                    <b style="color: blue;">123,2$</b>
                </div> 
            </div>

            <a href="#" class="d-flex align-items-center" style="text-decoration: none; font-weight: bold; font-size: 12px;" >View more<i class="bi bi-box-arrow-in-right" style="font-size: 22px;"></i></a>

        </div>
        <div class="col">
            <b>Bestsellers</b>
            <!---article-->
            <div class="d-flex align-items-center">
                <img src="image/pcc5.png"  style="width: 80px;">
                <div>
                    <b style="font-size: 12px;">Wireless Bluetooth Headphones</b><br>
                    <b style="color: blue;">123,2$</b>
                </div> 
            </div>
            <!---article-->
            <div class="d-flex align-items-center">
                <img src="image/pcc5.png" style="width: 80px;">
                <div>
                    <b style="font-size: 12px;">Wireless Bluetooth Headphones</b><br>
                    <b style="color: blue;">123,2$</b>
                </div> 
            </div>
            <!---article-->
            <div class="d-flex align-items-center">
                <img src="image/pcc5.png" style="width: 80px;">
                <div>
                    <b style="font-size: 12px;">Wireless Bluetooth Headphones</b><br>
                    <b style="color: blue;">123,2$</b>
                </div> 
            </div>
            <!---article-->
            <div class="d-flex align-items-center">
                <img src="image/pcc5.png" style="width: 80px;">
                <div>
                    <b style="font-size: 12px;"> Wireless Bluetooth Headphones</b><br>
                    <b style="color: blue;">123,2$</b>
                </div> 
            </div>

            <a href="#" class="d-flex align-items-center" style="text-decoration: none; font-weight: bold; font-size: 12px;" >View more<i class="bi bi-box-arrow-in-right" style="font-size: 22px;"></i></a>
        </div>
    </div>

</div>
<!---intagrame-->
<div class="container row m-auto mt-4  ">
    <div class="col-sm text-center  py-3 "  id="pp1">
        <img src="image/instagram (2).png" class="img-fluid w-10" style="width:120px;" >
        <p id="p1">Follow on Instagram</p>
        <p class="p2">#ordishop</p>
    </div>
    <div class="col-sm text-center py-3 " id="pp2" >
        <img src="image/instagram (2).png" class="img-fluid w-10" style="width: 120px;" >
        <p id="p1">Follow on Instagram</p>
        <p class="p2">#ordishop</p>
    </div>
</div> 

<?php include "FOOTER.php";?>
</div>
</div>
</body>
<script src="js/boo.js">
    
</script>
<script>
    var select=document.getElementById('select');
    select.onchange=function(){
    var i = select.selectedIndex;
    var title=document.querySelectorAll(".check");
    var text1=document.querySelectorAll('.banner');
    var shop=document.querySelectorAll('.shop');
    var btnshop=document.querySelectorAll('.bott');
    var link=document.querySelectorAll(".linked");
  var ord=document.querySelectorAll(".ordi");
  var shopN=document.querySelectorAll(".shopN");



//json traduction francer
    var Frdata=[
    {

    "home":"accueil",
    "nosOrinateur":"Nos ordinateurs",
    "nosCoffret":"nos coffre",
    "fourniseur":"nos fournisseur",
    "quiSommeNous":"Qui sommes-nous?",
    "blog":"Blog",
    "EspaceClient":"Espace Client",
    "Aide":"Aide",
    "titreSlider":"Bannière de vente de gadgets les mieux notées",
    "btnShop":"Ajouter à la carte",
    "check":"Consultez notre énorme",
    "ordi":"Des ordinateurs",
    "shopN":"boutique nouveau"

    }];
    //json traduction Arabe
    var Ardata=[
   
    {
    "home":"استقبال",
    "nosCoffret":"خزائننا",
    "nosOrinateur":"أجهزة الكمبيوتر لدينا",
    "fourniseur":"موردينا",
    "quiSommeNous":"من نحن؟",
    "blog":"المدونة",
    "EspaceClient":"منطقة العملاء",
    "Aide":"مساعدة",
    "titreSlider":"بيع الأداة أعلى تصنيف بانر",
    "btnShop":"اضف الى البطاقة",
    "check":"تحقق لدينا ضخمة",
    "ordi":"أجهزة الكمبيوتر",
    "shopN":"تسوق جديد"
    }];





//confition select arab ou france
    if(select[i].innerHTML=="العربية"){
        for(var i = 0 ; i<Ardata.length;i++){
            for(var j=0;j<text1.length;j++){
                text1[j].innerHTML=Ardata[i].titreSlider
            }
            for(var k=0;k<btnshop.length;k++){
                btnshop[k].innerHTML=Ardata[i].btnShop;
            }
            for(var k=0;k<title.length;k++){
                title[k].innerHTML=Ardata[i].check;
            }
            for(var k=0;k<ord.length;k++){
                ord[k].innerHTML=Ardata[i].ordi;
            }
            for(var k=0;k<shopN.length;k++){
                shopN[k].innerHTML=Ardata[i].shopN;
            }
            link[0].innerHTML=Ardata[i].home;
            link[1].innerHTML=Ardata[i].nosOrinateur;
            link[2].innerHTML=Ardata[i].nosCoffret;
            link[3].innerHTML=Ardata[i].fourniseur;
            link[4].innerHTML=Ardata[i].quiSommeNous;
            link[5].innerHTML=Ardata[i].blog;
            link[6].innerHTML=Ardata[i].EspaceClient;
            link[7].innerHTML=Ardata[i].Aide;


        }
    }
    else{
    if(select[i].innerHTML=="France"){
        for(var i = 0 ; i<Frdata.length;i++){
            for(var j=0;j<text1.length;j++){
                text1[j].innerHTML=Frdata[i].titreSlider
            }
            for(var k=0;k<btnshop.length;k++){
                btnshop[k].innerHTML=Frdata[i].btnShop;
            }
            for(var k=0;k<title.length;k++){
                title[k].innerHTML=Frdata[i].check;
            }
            for(var k=0;k<ord.length;k++){
                ord[k].innerHTML=Frdata[i].ordi;
            }
            for(var k=0;k<shopN.length;k++){
                shopN[k].innerHTML=Frdata[i].shopN;
            }
            link[0].innerHTML=Frdata[i].home;
            link[1].innerHTML=Frdata[i].nosOrinateur;
            link[2].innerHTML=Frdata[i].nosCoffret;
            link[3].innerHTML=Frdata[i].fourniseur;
            link[4].innerHTML=Frdata[i].quiSommeNous;
            link[5].innerHTML=Frdata[i].blog;
            link[6].innerHTML=Frdata[i].EspaceClient;
            link[7].innerHTML=Frdata[i].Aide;
        }
    }
    }
    }
</script>

<style>
.maina{
    width: 100%;
    height: 120px;
    background-image: linear-gradient(to left,rgb(241, 156, 151),rgb(252, 207, 162));
    border-radius: 20px;
    display: flex;
    align-items: center;
    padding-left: 10px;
}
</style>
<script src="js/bootstrap.bundle.min.js"></script>
</html>