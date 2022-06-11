<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link rel="stylesheet" href="css/Blog.css">
    <link rel="shortcut icon" type="image/png" href="image/aa1.png">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Mea+Culpa&family=Open+Sans:ital,wght@0,300;1,300&family=Spartan:wght@300&display=swap" rel="stylesheet">


    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
   
</head>
















<?php
$bob='none';
$red='none';
$user='root';
$bre="";
$ps="";
$data= new PDO("mysql:host=localhost;dbname=ordishop",$user,$ps);
if(isset($_POST['singin'])){
    $email=$_POST['email1'];
    $password=$_POST['password1'];
    $go=$data->prepare("SELECT * FROM user WHERE emailU=:email AND passwordU=:password");
    $go->bindParam(':email',$email);
    $go->bindParam(':password',$password);
    $go->execute();

    if($go->rowCount()===1){
        foreach($go as $role){
            session_start();
            if($role['role']=="admin"){
                $_SESSION['email']=$role['emailU'];
                setcookie('email',$_SESSION['email'],time() + (86400 * 30), "/");
                header('Location:admin.php');
               
                
            }
            else{
                if($role['role']=="user"){
                $_SESSION['email']=$role['emailU'];
                setcookie('email',$_SESSION['email'],time() + (86400 * 30), "/");
                header('Location:index.php');
                
                }


            }
        }
    }


    else{
    $bre="Password in valide";
    }
    }
?>














<?php
include "HEADER.php";
?>









<?php
$bob='none';
$red='none';
$redbo="";
$user='root';
$ps="";
$data= new PDO("mysql:host=localhost;dbname=ordishop",$user,$ps);



if(isset($_POST['singup'])){
$name=strip_tags($_POST['nom']);
$prenom=strip_tags($_POST['prenom']);
$email=strip_tags($_POST['email']);
$tel=strip_tags($_POST['tel']);
$password=$_POST['password'];
$password1=$_POST['password1'];


$test=$data->prepare("SELECT * FROM user WHERE emailU=:email");
$test->bindParam(':email',$email);
$test->execute();
if($test->rowCount()>0){
   $red='block';
   $bob='none';
   $redbo="Email deja existe!!";
}
else{
    if($password===$password1){
$var=$data->prepare("INSERT INTO user(nomU,prenomU,ageU,emailU,telU,passwordU,adresseU,role,imgU)VALUES(:nom,:prenom,null,:email,:tel,:password,null,'user','maj.jpg')"); 
$var->bindParam(":nom",$name);
$var->bindParam(":prenom",$prenom);
$var->bindParam(":email",$email);
$var->bindParam(":tel",$tel);
$var->bindParam(":password",$password);
$var->execute();
$bob='block';
$red='none';
}
else{
    $red='block';
    $bob='none';
    $redbo="Le deuxième mot de passe n'est pas le même!!";
}
}
}

?>














<body>
    <div class="container-fluid" style="width: 98%;"> 
        <div class=" row needs-validation "   >





















        <form method="post" class="col-md my-5 p-5" style="border-radius:20px; background-color: white;" action="">
    <div class="py-4"> <b class="mt-5 " style="font-size: 16px;color:  rgb(66, 69, 77);">Sign in Odishoop</b><br></div>

    <div class="d-flex " style="display: flex;justify-content: center;">
    <div class="google"><i class="bi bi-linkedin" style="font-size: 23px; color:  rgb(66, 69, 77);"></i></i></div>
    <div class="google"><i class="bi bi-google" style="color:  rgb(66, 69, 77);"></i></div>
    <div class="google"><i class="bi bi-facebook" style="font-size: 25px;color:  rgb(66, 69, 77);"></i></div>
</div>
<style>
    .google{
 
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    margin: 6px;
}
</style>
<div class="py-3"><b class="py-3" style="font-size: 12px;color: rgb(66, 69, 77);">Ou via le formulaire ci-dessous</b></div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
  <input style="font-weight: bold; font-size:11px ;" name='email1' type="text" class="form-control py-3 " placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>



<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock" style="font-size:22px ;"></i></span>
  <input style="font-weight: bold; font-size:11px ;" name='password1'  type="password" class="form-control  py-3 " placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div ><b style="color: red; font-size:12px;" ><?php echo  $bre; ?></b></div>
<div class="d-flex align-items-center my-2">
    <input required type="checkbox"><b class="b8 mx-3">Souviens-toi de moi</b>
    <a href="#" class="b8 ms-auto" style="text-decoration: none;">mot de passe oublié?</a>
</div>
<hr>
<button  class="btn mt-3 " name='singin' type="submit" id="b82"><i class="bi bi-box-arrow-in-right mx-2 " style="font-size: 22px;" ></i>Sing In</button>
    </form>


















    <form method="post"  class="col-md-7 was-validated   p-5" style="border-radius:20px; background-color: white;" >
   <div class="py-4"> <b class="mt-5 " style="font-size: 20px;">Pas de compte? S'inscrire</b><br></div>
<b class="py-3" style="font-size:11px ;color: grey;">L'inscription prend moins d'une minute mais vous donne un contrôle total sur vos commandes.</b>



<div class="row ">

<div style="display:<?php echo $bob ;?>; background-color: green; color: white;  font-weight: bold; font-size: 12px; "  id="VRE" class="container alert"  role="alert">enregistré avec succès</div>

<div style="display:<?php echo $red ;?>; background-color: red; color: white; font-weight: bold;  font-size: 12px;"  id="VRE" class="container alert"  role="alert"><?php echo $redbo?></div>
<div class="col-sm-6  py-2">



<label for="validationTextarea" class="form-label">Nom</label>
    <input class="form-control py-4  low"  type="text"    id="validationTextarea"  name='nom' required value="<?php if(isset($_GET['singup']) AND isset($_GET['nom'])){echo $_GET['nom'];} ?>">
    <div class="invalid-feedback">Please enter le Nom</div>
</div>

<div class="col-sm-6  py-2">
<label for="validationTextarea" class="form-label">Prenom</label>
    <input class="form-control  low py-4" type="text" name='prenom' required>
    <div class="invalid-feedback">Please enter le prenom</div>
</div>

</div>



      <div class="invalid-feedback">
        Please choose a username.
      </div>



<div class="row ">
<div class="col-sm-6  py-2">
<label for="validationTextarea" class="form-label">Email-Adresse</label>
    <input class="form-control py-4 low" type="email" name='email' required>
    <div class="invalid-feedback">Please enter le Email</div>
</div>

<div class="col-sm-6  py-2">
<label for="validationTextarea" class="form-label">Tel</label>
    <input class="form-control py-4 low" type="tel" name='tel' required>
    <div class="invalid-feedback">Please enter le Telephon </div>
</div>

</div>








<div class="row ">

<div class="col-sm-6  py-2">
<label for="validationTextarea" class="form-label">Mot de pass</label>
    <input class="form-control py-4 low" type="password" name='password' required>
    <div class="invalid-feedback">Please enter le Mot de pass</div>
</div>



<div class="col-sm-6  py-2">
<label for="validationTextarea" class="form-label">Confirmer Mot de passe</label>
    <input class="form-control py-4 low" type="password" name='password1' required>
    <div class="invalid-feedback">Please confirmer le mot de pass</div>
</div>

</div>






<style>
    .b8{
        font-size: 11px;
    }
    #b82{
        font-weight: 50;
        background-image: linear-gradient(to left,rgb(255, 119, 0) , rgb(224, 111, 111));
        color: white;
        border-radius: 7px;
        border: none;
        font-size: 11px;
        display: flex;
        align-items: center;
        height: 34px;
        font-weight: bold;
        
    }
    .low{
        font-size: 11px;
        font-weight: bold;
        height: 40px;
    }
</style>





      <button  class="btn mt-3 " type="submit" id="b82" name='singup'><i class="bi bi-person mx-1"></i>Sing Up</button>
    </form>



































</div>






       


 
  </div>















  <?php
include "FOOTER.php";
?> 
</body>
<script src="js/login.js">

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>