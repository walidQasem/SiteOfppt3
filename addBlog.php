<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Mea+Culpa&family=Open+Sans:ital,wght@0,300;1,300&family=Spartan:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    
<div class="container">
    <?php include "headerAdmin.php";
    
    ?>

<form method="POST">
<div class="row mt-4">
<label>id</label>
<div class="col"><input class="form-control py-3" type="number" disabled></div>
<div class="col"><input class="form-control py-3" type="File"></div>
</div>











<div class="row mt-4">

<div class="col-sm"><label>Nom</label><input class="form-control py-3" type="text"></div>

<div class="col-sm"><label>Nom</label><input class="form-control py-3" type="text"></div>
</div>


<div class="row mt-4">

<div class="col-sm"><label>Nom</label><input class="form-control py-3" type="text"></div>

<div class="col-sm"><label>Date</label><input class="form-control py-3" value='<?php echo date("Y/m/d") ?>'  type="text" disabled></div>
</div>


<div class="row mt-4">

<div class="col-sm"><label>Nom</label><input class="form-control py-3" type="text"></div>

<div class="col-sm"><label>Nom</label><input class="form-control py-3" type="text"></div>
</div>
<div class="row mt-4">

<div class="col-sm"><label>Decription</label><textarea class="form-control"></textarea></div>

</div>

<div class="row mt-4">

<button class="col-12 btn btn-success p-2 text-white">Ajouter Blog</button>

</div>






</form>




</div>


</body>
</html>