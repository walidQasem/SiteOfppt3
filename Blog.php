<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>panier</title>
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
if(isset($_GET['dec'])){
  session_start();
  $_SESSION['id']=$_GET['dec'];
  header('Location:DecriptionBlog.php');
  
}
?>

<?php

include "HEADER.php";
?>


 <div class="container py-5" > 
<h1 style='font-size: 20px;'><b>Le Blog ordishoop Web Services</b></h1>
<form method='GET' >
<div class="row mt-5"> 
<?php
include "BS.php";
$da=$data->prepare("select * from Bloge order by DateB DESC LIMIT 7");
$da->execute();
foreach($da as $in){
  
  echo '<div class="col-md col-xl-4 col-lg-4 my-3 ">
  <div class="card ">
      <div class="geeks"><img  src="image/'.$in['imgB'].'" class="card-img-top  m-auto" alt="..."></div>
      <div class="card-body">
        <h5 class="card-title"><b>'.$in['titleP'].'</b></h5>
        <i class="bi bi-person"></i><a href="#" class="li">'.$in['NomL'].'</a>
        <i class="bi bi-calendar-date ms-3 mx-2"></i><a href="#" class="li">'.$in['DateB'].'</a>
        <p class="card-text pard"><b>'.$in['disctiptionB'].'</b></p>
      </div>
      <div class="card-body">
        <button type="submit" name="dec" value="'.$in['idB'].'" class="btn btn15 text-white">Read More</button>
      </div>
    </div>
  </div>';
}




// include "FOOTER.php";

?>
    </form>





</div>

</div> 




















</div>





<style>
        .geeks {
       
            overflow: hidden;
            margin: 0 auto;
        }
     
        .geeks img {
            width: 100%;
            transition: 0.5s all ease-in-out;
        }
     
        .geeks:hover img {
            transform: scale(1.1);
        }
    </style>











</div>
























<?php
include "FOOTER.php";
?>







</body>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="css/panier.js"></script>
</html> 