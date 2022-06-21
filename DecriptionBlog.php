<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Blog.css">
    <link rel="shortcut icon" type="image/png" href="image/aa1.png">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Mea+Culpa&family=Open+Sans:ital,wght@0,300;1,300&family=Spartan:wght@300&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    


<?php 
session_start();
include "HEADER.php" 

?>


<div class='container'>
<div class="mt-5">

<?php
include "BS.php";
$id=$_SESSION['id'];
$vae=$data->prepare("select * from Bloge where idB=$id");
$vae->execute();
foreach($vae as $tes){
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
<?php include "FOOTER.php" ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>