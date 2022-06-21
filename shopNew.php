<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ordi</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
        <link rel="stylesheet" href="css/shopNew.css">
        <link rel="shortcut icon" type="image/png" href="image/aa1.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Mea+Culpa&family=Open+Sans:ital,wght@0,300;1,300&family=Spartan:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/magnify.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <script src="js/jquery-3.6.0.js"></script>
    </head>
<body>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     
 
 <?php
  session_start();
 if(isset($_POST['btn1'])){
     $_SESSION['idee']=$_POST['btn1'];
     header("Location:panier.php");
 }
 ?>
    
    
    
    
    
<?php
include "HEADER.php";
?>
    
    
    
    
    <!---head-->
    
    <div class="container-fluid py-3" style="width: 92%;" >
     <div class="row d-flex align-items-center ">
    
    
    
    
         <div class="col-sm-9 ">
    <h2 class="mt-4" style="font-weight: bold; color: rgb(92, 92, 92);">Shop grid left sidebar</h2>



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
           <div class="mt-5 " style="margin-left: 90px;">
           <i class="bi bi-grid mx-4"></i>
           <i class="bi bi-list-task"></i>
           
        </div>
       
    </div>

    <div class="d-flex align-items-center justify-content-center py-3  "><i class="bi bi-chevron-left mx-3"></i><b style="font-size:15px;">1/5</b><i class="bi bi-chevron-right mx-3" style="font-size: 16px; font-weight: bold;" ></i></div> 









  </div>






















    <div class="d-flex">
<div class="sideB  d-none d-lg-block " id="aside">
    <div class="m-auto text-center"><b>Menu</b></div>
<div class="py-3"><b style="font-size: 13px;" >Price</b></div>
<div class="m-auto text-center "><b class="mx-3" id="ran"></b><b onclick="afficher()" style="cursor: pointer;">-</b><b class="mx-3" id="lan"></b></div>
<!-- <input type="range" class="form-range" style="width: 100%;" min="100" max="9000" oninput="rejox(this)" class="mt-1"> -->
<div class="middle py-4"style="width: 100%;">
	<div class="multi-range-slider " style="width: 100%;">
		<input type="range" id="input-left"  oninput="rejox(this)" min="0" max="1000" value="0">
		<input type="range" id="input-right" oninput="febo(this)" min="0" max="1000" value="1000">

		<div class="slider">
			<div class="track"></div>
			<div class="range"></div>
			<div class="thumb left"></div>
			<div class="thumb right"></div>
		</div>
	</div>
</div>
<form method="POST">
<b style="font-size: 13px;" class="mt-2">Marque</b><br>
<input type="search" class="form-control" style="height: 28px;">
<div id="scor" class="mt-2">
<div class="d-flex align-items-center py-1"><b style="font-size: 13px;">Asus</b><input type="checkbox" class="ms-auto"></div>
<div class="d-flex align-items-center py-1"><b style="font-size: 13px;">Php</b><input type="checkbox" class="ms-auto"></div>
<div class="d-flex align-items-center py-1"><b style="font-size: 13px;">Delle</b><input type="checkbox" class="ms-auto"></div>
<div class="d-flex align-items-center py-1"><b style="font-size: 13px;">Asus</b><input type="checkbox" class="ms-auto"></div>
<div class="d-flex align-items-center py-1"><b style="font-size: 13px;">Asus</b><input type="checkbox" class="ms-auto"></div>
</div>
<style>
    .btn12{
        background-image: linear-gradient(to left ,#DAA520,#FFD700);
        color: white;
        margin-left: 100px;
    }
</style>



<div class="mt-4">
<b style="font-size: 13px;" class="mt-3">Pc Portbale</b><br>
<input type="search" class="form-control" style="height: 28px;">
<div id="scor" class="mt-2">
<div class="d-flex align-items-center py-1"><b style="font-size: 13px;">Asus</b><input type="checkbox" class="ms-auto"></div>
<div class="d-flex align-items-center py-1"><b style="font-size: 13px;">Php</b><input type="checkbox" class="ms-auto"></div>
<div class="d-flex align-items-center py-1"><b style="font-size: 13px;">Dell</b><input type="checkbox" class="ms-auto"></div>
<div class="d-flex align-items-center py-1"><b style="font-size: 13px;">Asus</b><input type="checkbox" class="ms-auto"></div>
<div class="d-flex align-items-center py-1"><b style="font-size: 13px;">Asus</b><input type="checkbox" class="ms-auto"></div>
</div>
</div>










<div class="mt-4">
    <b style="font-size: 13px;" class="mt-3">Pc berau</b><br>
    <input type="search" class="form-control" style="height: 28px;">
    <div id="scor" class="mt-2">
    <div class="d-flex align-items-center py-1"><b style="font-size: 13px;">Asus</b><input type="checkbox" class="ms-auto"></div>
    <div class="d-flex align-items-center py-1"><b style="font-size: 13px;">Php</b><input type="checkbox" class="ms-auto"></div>
    <div class="d-flex align-items-center py-1"><b style="font-size: 13px;">Dell</b><input type="checkbox" class="ms-auto"></div>
    <div class="d-flex align-items-center py-1"><b style="font-size: 13px;">Asus</b><input type="checkbox" class="ms-auto"></div>
    <div class="d-flex align-items-center py-1"><b style="font-size: 13px;">Asus</b><input type="checkbox" class="ms-auto"></div>
    </div>
    </div>





    <div class="mt-4">
        <b style="font-size: 13px;" class="mt-3">Mini PC</b><br>
        <input type="search" class="form-control" style="height: 28px;">
        <div id="scor" class="mt-2">
        <div class="d-flex align-items-center py-1"><b style="font-size: 13px;">Asus</b><input type="checkbox" class="ms-auto"></div>
        <div class="d-flex align-items-center py-1"><b style="font-size: 13px;">Php</b><input type="checkbox" class="ms-auto"></div>
        <div class="d-flex align-items-center py-1"><b style="font-size: 13px;">Dell</b><input type="checkbox" class="ms-auto"></div>
        <div class="d-flex align-items-center py-1"><b style="font-size: 13px;">Asus</b><input type="checkbox" class="ms-auto"></div>
        <div class="d-flex align-items-center py-1"><b style="font-size: 13px;">Asus</b><input type="checkbox" class="ms-auto"></div>
  
        </div>
        <button class='btn btn12 mt-5'>Valide</button>
        </form>

        </div>










</div>



<div class="container-fluid  my-5" style="width:100%;">













<form method="POST">
    <div class="row rowix" >
        <?php
        include "BS.php";
    $var=$data->prepare("select * from Produite");
    $var->execute();
    foreach($var as $te){
  echo  '
 
<div class="col-12 col-lg-4 col-sm-6 col-md-6 ckli " id="pro">
       <div class="card bg-light text-dark " style="border: none;">
       <a href="viePC.php?id='.$te['idProduit'].'" class="m-auto">
             <img class="card-img-top img-fluid  m-auto" src="image/'.$te['imgP'].'" style="width: 250px;" >
             </a>
             <div class="card-body">
                 <div  style="font-size: 11px; color: rgb(126, 126, 126); font-weight: bold;">'.$te['typeP'].'</div>
                 <div class="title">'.$te['libelleP'].'</div>
          <span class="tmn"><b>'.$te['prixP'].'</b>$</span>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
              </div>
              <button class="bott" style="border-radius:5px;" name="btn1"  value="'.$te['idProduit'].'"><i class="bi bi-cart"></i>ajouter au panier</button>
             
         </div>
         
         <hr class="hrex">
     
















        </div>';
    }
    ?>
  <!-- <button class="bott1" ><i class="bi bi-eye px-2" style="color: balck; "></i>Quick view</button>     -->
       </div>
    
</div>
    
 
</form>
 
 

 
 

 
 
 
 
 
 
 
 
</div>










    </div>




<style>
    .slider > .range {
	position: absolute;

	left: 25%;
	right: 25%;
	top: 0;
	bottom: 0;
	border-radius: 5px;
	background-color:orange;
    cursor: pointer;
}

.slider > .thumb {
	position: absolute;
	
	width: 25px;
	height: 25px;
	background-color:orange;
	border-radius: 50%;
	box-shadow: 0 0 0 0 rgba(214, 214, 214, 0.1);
	transition: box-shadow .3s ease-in-out;
    
}
</style>





<div style="margin-top: 200px;">
    <?php

include "FOOTER.php";
?>
</div> 


</div>
</div>
</body>
<script src="js/shopNew.js">


//   $("p").mouseout(function(){
//     $("p").css("background-color", "lightgray");
//   });

</script>
<script>
    
</script>
</html>