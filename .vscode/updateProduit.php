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

    if(isset($_POST['update'])){
        $id=$_POST['id'];
        $marque=$_POST['Marque'];
        $type=$_POST['type'];
        $prix=$_POST['prix'];
        $libelle=$_POST['libelle'];
        $Quantite=$_POST['Quantite'];
        $sl=$data->prepare("UPDATE produite SET typeP='$type',MarqueP='$marque',Quantity='$Quantite',prixP='$prix' WHERE idProduit=$id");
        $sl->execute();
        if($sl){
            header('location:updateProduit.php');
        }
    
    }








    include "headerAdmin.php";
   ?>

<?php   
ob_start();
   $id=$_SESSION['idP'];
   $sql=$data->prepare("SELECT * FROM produite WHERE idProduit=$id");
   $sql->execute();
   foreach($sql as $men){
      $id=$men['idProduit'];
      $libel=$men['libelleP'];
      $imgP=$men['imgP'];
      $img1=$men['img1'];
      $img2=$men['img2'];
      $img3=$men['img3'];
      $img4=$men['img4'];
       $descriptionP=$men['descriptionP'];
        $typeP=$men['typeP'];
        $marque=$men['MarqueP'];
         $prix=$men['prixP'];
        $Quantity=$men['Quantity'];
        $status=$men['status'];
   }
   










ob_end_flush();


?>





<div class="container mt-4">
    <h1>Update Produit</h1>
    
    







    <form method="POST">

<div class="row d-flex m-auto align-items-center" id="row">




<div class="col-md-3 py-3">
<input type='file'  name="img" id='img' style="display: none;"  class="form-control mt-2" id="customFile">
<label for="img" id='ffil'  >Add image Blog..<i class="bi bi-cloud-arrow-up mx-2" style="font-size: 40px;"></i></label>
</div>






<div class="col-md-1 py-3">
    <img id="plus" src="image/plus.png" style="width:70px;cursor: pointer;">
</div>




</div>
<div class="row mt-3">
    <div class="col-md py-2"><label>id Ordinateur</label><input value="<?php echo $id ?>" type="text" id="id" name="id" class="form-control p-2" readonly></div>
    <div class="col-md py-2"><label>libelle</label><input value="<?php echo $libel ?>" type="text" id="titre" name="libelle" class="form-control  p-2"></div>
</div>


<div class="row ">
    <div class="col-md py-2"><label>Marque</label><input value="<?php echo $marque ?>" type="text"   id="auteur" name="Marque" class="form-control p-2"></div>
    <div class="col-md py-2">
        <label>type</label><br>
        <select class="form-select" name='type' >
       
            <option value='pc portable'  >Pc Portable</option>
            <option value='pc bereau'  >pc bereau</option>
            <option value='mini pc' > mini pc</option>
        </select>
    </div>
</div>

<div class="row ">
    <div class="col-md py-2"><label>Prix</label><input value="<?php echo $prix ?>" type="text" id="auteur" name="prix" class="form-control p-2"></div>
    <div class="col-md py-2"><label>Quantite</label><input value="<?php echo $Quantity ?>"  name="Quantite"  type="number" class="form-control  p-2"></div>
</div>

<div class="row ">

    <div class="col-md-12 py-2">
        <label>Status</label>
        <select class="form-select" name='status'>
        <option value='EN STOCK'>EN STOCK</option>
        <option value='EN STOCK'>EN STOCK</option>
    </select>
</div>
  
</div>

<div class="row ">

    <div class="col-md-12 py-2"><label>Description</label><textarea value="<?php echo $descriptionP ?>" rows="8" id="desce" name="desc" style="resize: none;" class="form-control"></textarea></div>
  
</div>





<div class="row ">
    <button  class="col-md-4 btn  my-2 d-flex align-items-center justify-content-center" id="btn" name="update"><i class="bi bi-node-plus  mx-2 "  style="font-size:24px;"></i>Update</button>
    <button  class="col-md-2 btn btn-danger ms-2 my-2 close d-flex align-items-center justify-content-center" type="button" style="border-radius:10px;"><i class="bi bi-reply-all mx-2"  style="font-size:23px;"></i>Close</button>
  
</div>

</form>

















</div>
























<style>
    #ffil{
        font-weight:bold ;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color:white;
        border-radius: 7px;
        height: 120px;
        padding-left: 14px;
        cursor: pointer;
        font-size: 11px;
        transition: 0.2s;
        border: 1px dotted  grey;
    
    }
    #ffil:hover{
        box-shadow:none;
        transition: 0.2s;
        background-color:  #D3D3D3;
       
    }
    #btn {

background-image: linear-gradient(to right, #f46b45 0%, #eea849 51%, #f46b45 100%);
    margin: 10px;
    
    text-align: center;
    text-transform: uppercase;
    transition: 0.5s;
    background-size: 200% auto;
    color: white;            
    box-shadow: 0 0 20px #eee;
    border-radius: 10px;
    display: block;
  }

  #btn:hover {
    background-position: right center; /* change the direction of the change here */
    color: #fff;
    text-decoration: none;
  }
</style>

</body>
</html>