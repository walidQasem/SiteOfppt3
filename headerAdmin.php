
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/png" href="image/aa1.png">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Mea+Culpa&family=Open+Sans:ital,wght@0,300;1,300&family=Spartan:wght@300&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<?php 
include "BS.php";
       session_start();
       if(!empty($_SESSION['email'])){
       $email=$_SESSION['email'];
       $ee=$data->prepare("SELECT * FROM user WHERE emailU= '$email'");
       $ee->execute();
       foreach($ee as $me){
           $om=$me['nomU'];
           $prenom=$me['prenomU'];
           $img=$me['imgU'];
       }
      }
      else{
        header('location:login.php');
      }
?>











<div id="mySidenav" class="sidenav">
<img src="image/pcadmin.png" class="py-4" style="width: 140px; margin-left: 50px;">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            
    <a href="#" class="kok"><i class="bi bi-house-door mx-3" style="font-size:20px ;"></i><b style="font-size:12px ;">Dashboard</b></a>
    

























    


    <div class="dropdown my-4">
    <a  class="dropdown-toggle" data-bs-toggle="dropdown" style="color: white;font-size:15px;cursor: pointer;"><b><i class="bi bi-people  mx-3"></i>user</b></a>
    <ul class="dropdown-menu jp ms-5" >
      <li><a class="dropdown-item p-0 gom" href="utilasateurAdmin.php"><b style="font-size:13px;">utilisateur</b></a></li>
      <li><a class="dropdown-item p-0 gom" href="#"><b style="font-size:13px;">Admin</b></a></li>
      <li><a class="dropdown-item p-0 gom" href="login.php"><b style="font-size:13px;">Log out</b></a></li>
    </ul>
  </div>


  <div class="dropdown my-4">
    <a  class="dropdown-toggle" data-bs-toggle="dropdown" style="color: white;font-size:15px;cursor: pointer;"><b><i class="bi  bi-bag mx-3"></i>Produit</b></a>
    <ul class="dropdown-menu jp ms-5">
      <li><a class="dropdown-item p-0 gom" href="#"><b style="font-size:13px;">Activity Log</b></a></li>
      <li><a class="dropdown-item p-0 gom" href="#"><b style="font-size:13px;">Setting</b></a></li>
      <li><a class="dropdown-item p-0 gom" href="login.php"><b style="font-size:13px;">Log out</b></a></li>
    </ul>
  </div>



  <div class="dropdown my-4">
    <a  class="dropdown-toggle" data-bs-toggle="dropdown" style="color: white;font-size:15px;cursor: pointer;"><b><i class="bi bi-bookmark  mx-3"></i>Blog</b></a>
    <ul class="dropdown-menu jp ms-5">
      <li><a class="dropdown-item p-0 gom" href="#"><b style="font-size:13px;">Activity Log</b></a></li>
      <li><a class="dropdown-item p-0 gom" href="#"><b style="font-size:13px;">Setting</b></a></li>
      <li><a class="dropdown-item p-0 gom" href="login.php"><b style="font-size:13px;">Log out</b></a></li>
    </ul>
  </div>


  <div class="dropdown my-4">
    <a  class="dropdown-toggle" data-bs-toggle="dropdown" style="color: white;font-size:15px;cursor: pointer;"><b><i class="bi bi-bookmark  mx-3"></i>Blog</b></a>
    <ul class="dropdown-menu jp ms-5">
      <li><a class="dropdown-item p-0 gom" href="BlogAdmin.php"><b style="font-size:13px;">Liste de Blog</b></a></li>
      <li><a class="dropdown-item p-0 gom" href="addBlog.php"><b style="font-size:13px;">Add Blog</b></a></li>
      <li><a class="dropdown-item p-0 gom" href="login.php"><b style="font-size:13px;">Log out</b></a></li>
    </ul>
  </div>








    
</div>



<div class="container-fluid">
<div class="row py-3" id="main">
    <div class="col">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>
  
<div class="col d-flex align-items-center">
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" onclick="myFunction()" style="width:35px;height: 18px;">
</div>
</div>






<div class="col d-flex align-items-center">
<i class="bi bi-bell" style="font-size:27px;"></i>
</div>
<div class="col d-flex align-items-center">
    <img src="image/<?php echo $img?>" style="width: 55px; border-radius:50% ;">

 







  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


                                     
  <div class="dropdown">
    <b type="button" class="dropdown-toggle" data-bs-toggle="dropdown">
    
        <b style="font-size: 11px;display: block;"><?php echo $om." ".$prenom?></b>
        <b style="font-size: 10px; color: grey;"><?php echo $email?></b>
   
    </b>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#"><b style="font-size:11px;">Activity Log</b></a></li>
      <li><a class="dropdown-item" href="#"><b style="font-size:11px;">Setting</b></a></li>
      <li><a class="dropdown-item" href="login.php"><b style="font-size:11px;">Log out</b></a></li>
    </ul>
  </div>








</div>
<script>

    function openNav() {
  document.getElementById("mySidenav").style.width = "270px";
  document.getElementById("main").style.marginLeft = "270px";
  document.querySelector('body').style.overflowX="hidden"
}
openNav()

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}

function myFunction() {
   var element =document.querySelector('body');
   element.classList.toggle("dark-mode");
  

}

</script>
<style>
    body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}
.jp{
  background-color: black;
}
.gom:hover{
background-color: #111;
color: white;
margin-left: 10px;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
color: white;
  display: block;
  transition: 0.3s;
}



.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.fox{
    background-image: linear-gradient(to left,orange,#F0E68C);
    padding: 40px ;
    border-radius: 10px;
    display: flex;
    align-items: center;
    
    
}



.dark-mode {
  background-color: black;
  color: white;
}
.test{
    font-size:30px;
}
</style>