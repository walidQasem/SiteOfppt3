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


</head>
<body>













<?php 
include "BS.php";
$counCommande;
$sl=$data->prepare("SELECT * FROM cmmande WHERE status='In Progress'");
$sl->execute();
$counCommande=$sl->rowCount();

if(isset($_POST['valide'])){
    $id=$_POST['valide'];
    $up=$data->prepare("UPDATE `cmmande` SET status='Delivered' WHERE idCM=$id");
    $up->execute();
    header("location:admin.php");
}

if(isset($_POST['supprimer'])){
    $id=$_POST['supprimer'];
    $up=$data->prepare("UPDATE `cmmande` SET status='Canceled' WHERE idCM=$id");
    $up->execute();
    header("location:admin.php");
}

$de=$data->prepare("SELECT * FROM produite");
$user=$data->prepare("SELECT * FROM user");
$de->execute();
$user->execute();
$var=$de->rowCount();

$usere=$user->rowCount();

?>































<?php 
include "headerAdmin.php";
 
?>

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
    <div class="s1"><b><?php echo $counCommande ?></b><br><b>Commande</b></div>
</div>
</div>









</div>






















<div class="row">
    <div class="col">
        <table class="table table-hover mt-5">
         <tr>
            <th>ID Commmande</th>
            <th>Date Commande</th>
            <th>PrixTotal Commmande</th>
            <th>Mode paiment</th>
            <th >ID User</th>
         </tr>

<?php   

$sl=$data->prepare("SELECT * FROM cmmande WHERE status='In Progress'");
$sl->execute();
foreach($sl as $com){
    echo "
    <form method='POST'>
    <tr>
    <td>".$com['idCM']."</td>
    <td>".$com['dateC']."</td>
    <td>".$com['prixTotal']."</td>
    <td>".$com['modePaiment']."</td>
    <td>".$com['id_userComm']."</td>
    <td><button class='btn' value='".$com['idCM']."'  name='valide'><i style='font-size:30px;color:green;' class='bi bi-bag-check'></i></button></td>
    <td><button class='btn' value='".$com['idCM']."' name='supprimer'><i style='font-size:30px;color:red;' class='bi bi-bag-x'></i></button></td>
    <td><button class='btn' value='".$com['idCM']."' name='regarder'><i style='font-size:30px;color:green;' class='bi bi-eye'></i></button></td>
    </tr>
    </form>
    ";
}






?>
        </table>
    </div>
</div>










</div>





















   
</body>
</html> 










   
</body>
</html> 



    
</body>

</html>