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
                header('Location:admin.php');
               
                
            }
            else{
                if($role['role']=="user"){
                $_SESSION['email']=$role['emailU'];
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

<body>
    <div class="container-fluid" style="width: 100%;"> 
        <div class="row" id="revers">

   

        <div class="col-md my-5 ">
    <form method="post" action="">
   <div class="py-4"> <b class="mt-5 " style="font-size: 16px;">Pas de compte? S'inscrire</b><br></div>
<b class="py-3" style="font-size:11px ;">L'inscription prend moins d'une minute mais vous donne un contrôle total sur vos commandes.</b>



<div class="row mt-3">

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
$password=sha1($_POST['password']);
$password1=sha1($_POST['password1']);


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

<div style="display:<?php echo $bob ;?>; background-color: green; color: white;  font-weight: bold; font-size: 12px; "  id="VRE" class="container alert"  role="alert">enregistré avec succès</div>

<div style="display:<?php echo $red ;?>; background-color: red; color: white; font-weight: bold;  font-size: 12px;"  id="VRE" class="container alert"  role="alert"><?php echo $redbo?></div>
<div class="col">



    <b class="b8">Nom*</b>
    <input class="form-control py-2  low"  type="text" name='nom' required value="<?php if(isset($_GET['singup']) AND isset($_GET['nom'])){echo $_GET['nom'];} ?>">
</div>

<div class="col">
    <b class="b8">Prenom*</b>
    <input class="form-control py-2 low" type="text" name='prenom' required>
</div>

</div>







<div class="row mt-3">
<div class="col-6">
    <b class="b8">Email-Adresse*</b>
    <input class="form-control py-2 low" type="email" name='email' required>
</div>

<div class="col-6">
    <b class="b8">Tel*</b>
    <input class="form-control py-2 low" type="tel" name='tel' required>
</div>

</div>








<div class="row mt-3">

<div class="col-6">
    <b class="b8">Mot de passe*</b>
    <input class="form-control py-2 low" type="password" name='password' required>
</div>



<div class="col-6">
    <b class="b8">Confirmer Mot de passe*</b>
    <input class="form-control py-2 low" type="password" name='password1' required>
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
        font-size: 12px;
        display: flex;
        align-items: center;
        
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





































<div class="col-md my-5 ">
    <form method="post" action="">
    <div class="py-4"> <b class="mt-5 " style="font-size: 16px;">Sign in Odishoop</b><br></div>

    <div class="d-flex " style="display: flex;justify-content: center;">
    <div class="google"><i class="bi bi-linkedin" style="font-size: 23px;"></i></i></div>
    <div class="google"><i class="bi bi-google"></i></div>
    <div class="google"><i class="bi bi-facebook" style="font-size: 25px;"></i></div>
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
<div class="py-3"><b class="py-3" style="font-size: 12px;">Ou via le formulaire ci-dessous</b></div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
  <input style="font-weight: bold;" name='email1' type="text" class="form-control py-3 low" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>



<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock" style="font-size:22px ;"></i></span>
  <input style="font-weight: bold;" name='password1'  type="password" class="form-control py-3 low" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div ><b style="color: red; font-size:12px;" ><?php echo  $bre; ?></b></div>
<div class="d-flex align-items-center my-2">
    <input required type="checkbox"><b class="b8 mx-3">Souviens-toi de moi</b>
    <a href="#" class="b8 ms-auto" style="text-decoration: none;">mot de passe oublié?</a>
</div>
<button  class="btn mt-3 " name='singin' type="submit" id="b82"><i class="bi bi-box-arrow-in-right mx-2 " style="font-size: 22px;" ></i>
Sing In</button>
</div>






       




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