<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Blog.css">
    <link rel="shortcut icon" type="image/png" href="image/aa1.png">
    <link rel="stylesheet" href="js/">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Mea+Culpa&family=Open+Sans:ital,wght@0,300;1,300&family=Spartan:wght@300&display=swap" rel="stylesheet">

</head>
<body>













<?php 
include "BS.php";
$de=$data->prepare("SELECT * FROM produite");
$user=$data->prepare("SELECT * FROM user");
$de->execute();
$user->execute();
$var=$de->rowCount();

$usere=$user->rowCount();

?>































<?php include "headerAdmin.php" ?>

<div class="container mt-5">

<div class="row">


<div class="col  py-2">

    <div class="fox">
    <i class="bi bi-people-fill me-4 test" ></i>
    <div class="s1"><b><?php echo $usere ?></b><br><b>Peapele</b></div>
</div>
</div>

<div class="col py-2">
    <div class=" fox">
    <i class="bi bi-cart-fill me-4 test " ></i>
    <div class="s1"> <b><?php echo $var ?></b><br><b>Produits</b></div>
</div>
</div>




<div class="col  py-2">
    <div class="fox">
    <i class="bi bi-people-fill me-4 test" ></i>
    <div class="s1"><b>450</b><br><b>Commande</b></div>
</div>
</div>

</div>


</div>





















   
</body>
</html> 










   
</body>
</html> 



    
</body>

</html>