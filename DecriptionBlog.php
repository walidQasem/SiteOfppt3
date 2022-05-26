


    <link rel="shortcut icon" type="image/png" href="image/aa1.png">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Mea+Culpa&family=Open+Sans:ital,wght@0,300;1,300&family=Spartan:wght@300&display=swap" rel="stylesheet">



<div class='container'>
<div class="mt-5">

<?php
include "BS.php";
session_start();
$id=$_SESSION['id'];
$vae="select * from Bloge where idB=$id";
$se=mysqli_query($cont,$vae);
foreach($se as $tes){
    echo '<div class="geeks"><img  src="image/'.$tes['imgB'].'" class="card-img-top  m-auto" alt="..."></div>
    ';
    echo "<i class='bi bi-calendar ms-3 mx-2 '></i><a href='#' style='text-decoration:none;'>".$tes['DateB']."</a>"."<br>";
    echo $tes['DecB'];
}

?>

</div>
</div>
<style>
    .geeks img{
        height: 500px;
    }
</style>