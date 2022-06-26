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
<script src="js/jquery-3.6.0.js"></script>

</head>
<body>
<?php
include "BS.php";
include "headerAdmin.php";
if(isset($_SESSION['id'])){
  $id=$_SESSION['id'];
    $sel=$data->prepare("SELECT * FROM user WHERE idU=$id");
    $sel->execute();
    if($sel){
    foreach($sel as $me){
        $id=$me['idU'];
        $nom=$me['nomU'];
        $prenom=$me['prenomU'];
        $email=$me['emailU'];
        $tel=$me['telU'];
        // $adresse=$_POST['adresseU'];
        // $role=$_POST['role'];
        $img=$me['imgU'];
        $role=$me['role'];
    }
  }
  else{
    header("location:index.php");
  }
}
  else{
    header("location:index.php");
  }
   ?>
<div class="container">
    <div class="main-body mt-5">
          <nav aria-label="breadcrumb" class="main-breadcrumb">
          </nav>
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="image/<?php echo $img  ?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo  $nom." ".$prenom ?></h4>
                      <button class="btn btn-danger shadow-none">Supprimer</button>
                      <button class="btn btn-outline-primary shadow-none">Message</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo  $nom." ".$prenom ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo  $email?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">0<?php echo  $tel ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">0<?php echo  $tel ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Role</h6>
                    </div>
                    <form method="POST">
                    <div class="col-sm-9 text-secondary">
                    <?php
$rol=$role;
if(isset($_POST['edit'])){   

  $rol=$_POST['rolee']  ;
  $sel=$data->prepare("UPDATE user SET role='$rol' Where idU=$id");
  $sel->execute();
}
?>
                   <input type="text" class="form-control" name="rolee" required value="<?php echo $rol?>">
                    </div>
                  </div>
            <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <form method="POST">
                      <button class="btn btn-success text-white " name='edit'>Edit</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row ">
                <div class="col-sm-12 mb-3">
                <table  class="table table-hover" style="width:100%;">
                                <tr>
                                  <th>id</th>
                                  <th>Date Purchased</th>
                                  <th>Status</th>
                                  <th>Mode paiment</th>
                                  <th>Total</th>
                   <?php 
                   $t=$data->prepare("SELECT * FROM cmmande WHERE id_userComm=$id");
                   $t->execute();
                   foreach($t as $com){
                    $var ="";
                       if($com['status']=='In Progress'){
                           $var="<b style='color:blue;'>".$com['status']."</b>";
                       }
                       if($com['status']=='Delivered'){
                           $var="<b style='color:green;'>".$com['status']."</b>";
                       }
                       if($com['status']=='Delayed'){
                           $var="<b style='color:orange;'>".$com['status']."</b>";
                       }
                       if($com['status']=='Canceled'){
                           $var="<b style='color:red;'>".$com['status']."</b>";
                       }
                       echo "<tr>
                       <form method='POST'>
                       <td>".$com['idCM']."</td>
                       <td>".$com['dateC']."</td>
                       <td style='color:green;'>".$var."</td>
                       <td style='color:red;'>".$com['modePaiment']."</td>
                       <td>".$com['prixTotal']." $</td>
                       </form>
                       </tr>";
                   }
                   ?>
                  </table>
                  </div>
                </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
</body>
</html>