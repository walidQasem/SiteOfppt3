<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porfil</title>
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
session_start();
$bole=false;
    $bob='none';
    $red='none';
    $user='root';
    $ps="";
    $data= new PDO("mysql:host=localhost;dbname=ordishop",$user,$ps);
 if(isset($_COOKIE['email'])){
$sel=$data->prepare("SELECT * FROM user WHERE emailU=:email");
$sel->bindParam(":email",$_COOKIE['email']);
$sel->execute();

    foreach($sel as $m){
        $nom=$m['nomU'];
        $prenom=$m['prenomU'];
        $tel=$m['telU'];
        $email=$m['emailU'];
        $password=$m['passwordU'];
        $img=$m['imgU'];
        }




if(isset($_POST['singup'])){


   if($_POST['img']==""){
    $_POST['img']=$img;
   }
 $bob=$_COOKIE['email'];
    $sup=$data->prepare("UPDATE user SET nomU=:nom,prenomU=:prenom,telU=:tel,imgU=:img,passwordU=:pas  WHERE emailU='$bob'");
    $sup->bindParam(":nom",strip_tags($_POST['nom']));
    $sup->bindParam(":prenom",strip_tags($_POST['prenom']));
    $sup->bindParam(":tel",strip_tags($_POST['tel']));
    $sup->bindParam(":img",strip_tags($_POST['img']));
    $sup->bindParam(":pas",strip_tags($_POST['password']));
    $sup->execute();
        header("Location:profil.php");
        $bole=true;
    

    

 

    
}}
else{
    header('location:login.php');
}

if(isset($_POST['logo'])){
    unset($_COOKIE['email']);
    setcookie('email', '', time() - 3600, '/');
    header("location:login.php");
  
    
}
?>











<?php
include "HEADER.php";

?>












<div class="container-fluid py-3" style="width: 85%;" >
 <div class="row d-flex align-items-center">




     <div class="col-sm-9 ">
<h2 class="mt-4" style="font-weight: bold; color: rgb(92, 92, 92);">Your Profil </h2>
</div>





<div class="col-sm  py-3">
<style>
    .bi-chevron-right{
        font-size: 12px;
    }
    a{
        text-decoration: none;
        color: rgb(0, 0, 0);
    }
</style>

       <a href="index.html"><i class="bi bi-house px-2" style="font-size: 17px;"></i><b style="font-size: 12px; ">home</b></a>
       <i class="bi bi-chevron-right"></i>
       <a href="#"><b style="font-size: 12px; ">shop</b></a>
       <i class="bi bi-chevron-right"></i>
       <b style="font-size: 10px; color: rgb(102, 102, 102);">Product Page v.2</b>
   
</div>






















 </div>
</div>


















































<div class="container">






  <div class="row my-5">




<div class="col-md-4  p-4 ">
        <div class="d-flex align-items-center">
        <img src="image/<?php echo $img ?>" value="<?php echo $img ?>" style="width:80px;height: 80px; border-radius: 50%;">
        <div class="mx-3">
        <b><?php echo $nom ?><?php echo $prenom ?></b><br>
        <b style="color: blue; font-size: 11px;"><?php echo $email ?></b></div></div>

   <p class="mt-4"><b>Tableau de bord</b></p>

   <b><a href="order.php" class="lin"><i class="bi bi-bag me-3 "  style="font-size: 17px;"></i>Ordres</a></b><br><br>
   
   <b><a href="wishlist.php" class="lin"><i class="bi bi-heart me-3"  style="font-size: 17px;"></i>Liste de souhaits</a></b><br><br>
   <b><a href="#" class="lin"><i class="bi bi-broadcast me-3"  style="font-size: 17px;"></i></i>Billets d'assistance</a></b><br><br>
   <b>Account settings</b><br><br>
   <b><a href="#" class="lin" style="color: blue;"><i class="bi bi-person-circle me-3" style="font-size: 17px;"></i></i>Profile info</a></b><br><br>
   <b><a href="#" class="lin"><i class="bi bi-geo-alt me-3"  style="font-size: 17px;"></i></i>Adresse</a></b><br><br>
   <b><a href="#" class="lin"><i class="bi bi-credit-card-2-back me-3"  style="font-size: 17px;"></i></i>Payment methods</a></b><br><br>

</div>












  
<div class="col-md mt-5">
    
<?php
if($bole==true){
    echo '<div class="alert success">
    <span class="closebtn">&times;</span>  
    <strong>Success!</strong><b>Le défi a été relevé avec succès.</b></div>';
}



?>


<div class="d-flex align-items-center">

        <img src="image/<?php echo $img ?>" style="width:80px;height: 80px; border-radius: 50%;">
        <div class="mx-3">
     
<form method='POST'>
        <input type='file'  name="img" id='img' style="display: none;" class="form-control" id="customFile">
       
<label for="img" id='ffil' >change profil<i class="bi bi-file-earmark-arrow-down mx-2" style="font-size: 20px;"></i></label>
        <br>
        <b style="color: gray; font-size: 11px;">Upload JPG, GIF or PNG image. 300 x 300 required.</b></div>

        <button name='logo' class="btn btn-danger text-white ms-auto p-1 d-flex justify-content-center" style="border-radius:50%;"><i class="bi bi-box-arrow-in-right mx-2" style="font-size:20px;"></i></button>
    </div>






<style>
    .alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #04AA6D;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
    #ffil{
        font-weight:bold ;
        display: flex;
        align-items: center;
        
        border-radius: 7px;
        width: 135px;
        padding-left: 14px;
        cursor: pointer;
        font-size: 11px;
        box-shadow: 1px 1px 13px #D3D3D3;
        transition: 0.2s;
    
    }
    #ffil:hover{
        box-shadow:none;
        transition: 0.2s;
        background-color:  #D3D3D3;
       
    }
</style>














        <div class="row ">





<div class="col-sm-6 py-2">
<b class="b8">Nom</b>
<input class='form-control in'  value="<?php echo $nom ?>" type='text' name='nom' required>
</div>

<div class="col-sm-6 py-2">
    <b class="b8">Prenom</b>
    <input class="form-control in" type="text" value="<?php echo $prenom ?>" name='prenom' required>
</div>

</div>







<div class="row ">
<div class="col-sm-6 py-2">
    <b class="b8">Email-Adresse</b>
    <input class="form-control in" id='email' type="email" value="<?php echo $email ?>" readonly name='email' >
</div>

<div class="col-sm-6 py-2">
    <b class="b8">Tel*</b>
    <input class="form-control in" type="tel" value="<?php echo $tel ?>" name='tel' required>
</div>

</div>








<div class="row ">

<div class="col-sm-6 py-2">
    <b class="b8">Mot de passe</b>
    <input class="form-control in " type="password" value="<?php echo $password ?>" name='password' required>
</div>



<div class="col-sm-6 py-2">
    <b class="b8">Confirmer Mot de passe</b>
    <input class="form-control in" type="password" value="<?php echo $password ?>" name='password1' required>
</div>

</div>






<style>
    .b8{
        font-size: 11px;
    }
    #b82{
        font-weight: 500;
        background-image: linear-gradient(to left,rgb(255, 119, 0) , rgb(224, 111, 111));
        color: white;
        border-radius: 5px;
        border: none;
        font-size: 10px;
        display: flex;
        align-items: center;
        text-align: center;
        font-weight: bold;
        
    }
    .in{
        height: 50px;
        font-weight: bold;
        font-size: 12px;
      
    }
    #email{
        cursor:not-allowed;
    }
</style>





      <button  class="btn mt-3 " type="submit" id="b82" name='singup'>Update Profil<i class="bi bi-arrow-repeat mx-2" style="font-size: 17px;"></i></button>
 
</div>
</form>













</div>

  </div>






















</div>















<?php
include "FOOTER.php";

?>





<style>
    .lin{
        text-decoration: none;
        color: grey;
        font-size: 12px;
    }
    #file{
        border: none;
    }
</style>



</body>

<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; },1000);
  }
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>