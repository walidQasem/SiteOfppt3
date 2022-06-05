<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Index</title>
        <link rel="stylesheet" href="css/hamid.css">
        <link rel="shortcut icon" type="image/png" href="image/aa1.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Mea+Culpa&family=Open+Sans:ital,wght@0,300;1,300&family=Spartan:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <?php include "HEADER.php" ?>

<div class="container">


    <div class="row mt-5">
        <div class="col-10 "><h3><b>Contacts</b></h3></div>
    <div class="col"><a href="#" class="allo">Home</a> > <a href="#" class="allo">Contacts</a></div>
    </div>



<div class="row">



    <div class="col-md py-3 text-center">
        <div class="cart">
    <i class="bi bi-clock" style="color:orange; font-size:30px;"></i><br><br>
    <b>Heures d'ouverture</b><br><br>
    <b  style="color:grey; font-size:11px;">Lun - Ven: 10h00 - 19h00</b><br><br>
    <b  style="color:grey; font-size:11px;">sta: 11h00 - 17h00</b>
    </div>
    </div>
    <div class="col-md py-3 text-center">
        <div class="cart">
    <i class="bi bi-telephone" style="color:orange; font-size:30px;"></i><br><br>
    <b>Les numéros de téléphone</b><br><br>
    <b   style="color:grey; font-size:11px;">Pour les clients :<a class="allo" href="tel:+108044357260">+1 (080) 44 357 260</a></b><br></br>
    <b  style="color:grey; font-size:11px;">Support technique :<a class="allo" href="tel:+108044357260">+1 (080) 44 357 260</a></b>
    </div>
    </div>


    <div class="col-md py-3 text-center">
        <div class="cart">
    <i class="bi bi-envelope" style="color:orange; font-size:30px;"></i><br><br>
    <b>Heures d'ouverture</b><br><br>
    <b  style="color:grey; font-size:11px;">Pour les clients :<a class="allo" href="mailto:+108044357260">client@exemple.com<a></b><br><br>
    <b  style="color:grey; font-size:11px;">Tech support:<a class="allo" href="mailto:+108044357260">client@exemple.com<a></b>
    </div>
    </div>

    </div>
</div>
<div class="container-fluid" style="width:93%;">
<form method="POST">
<div class="row mt-5">
    <div class="col-md-6"><img src="image/personnes-travaillant-dans-centre-appels_23-2148094830.jpg" class="img-fluid w-100" style="width:600px; border-radius:20px;"></div>
    <div class="col">
        <h4 class="my-2"><b>Drop us a line</b></h4>
        <div class="row mt-2">
            <div class="col"><label>Your name: *</label><input type="text" class="form-control py-3" placeholder="Walid" required></div>
            <div class="col"><label>Email address: *</label><input type="text" class="form-control py-3" placeholder="Qasem" required></div>
        </div>
        <div class="row mt-2">
            <div class="col"><label>Your phone: *</label><input type="text" class="form-control py-3" placeholder="0621542411" required></div>
            <div class="col"><label>Subject:</label><input type="text" class="form-control py-3" placeholder="Provide" required></div>
        </div>
        <div class="row mt-2">
            <div class="col"><label>Message:*</label><textarea placeholder="Please describe" class="form-control py-3" rows="8" required></textarea></div>
        </div>
        <button class="btn btn-danger text-white mt-3 p-2"><b style="font-size:12px;">Send message<b></b></button>
    </div>
</div>
</form>
</div>






<?php include "FOOTER.php"  ?>
<style>
    .allo{
        text-decoration: none;
        font-size: 11px;
        color: grey;

    }
    .cart{
        border:1px solid #DCDCDC;
        padding:20px;
       
    }
    .form-control{
        font-size:11px;
        font-weight: bold;
    }
</style>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>