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
<h1 style='font-size: 20px;'><b>FAQ</b></h1>
<div class="accordion" id="accordionExample">
<?php 
include "BS.php";
$sql=$data->prepare("SELECT * FROM faq");
$sql->execute();
foreach($sql as $m){

echo '

<div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       '.$m['QesF'].'
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body"> '.$m['RepF'].'</div>
    </div>
  </div>

';





}



?>









</div>
    </div>






</div> 
</div>
</div>
























<?php
include "FOOTER.php";
?>







</body>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="css/panier.js"></script>
</html> 