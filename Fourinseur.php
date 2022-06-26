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




       $sel=$data->prepare("SELECT * FROM fournisseur ");
       $sel->execute();
       $c=$sel->rowCount();
       if(isset($_POST['supprimere'])){
        $marque=$_POST['supprimere'];
        $rol=$data->prepare("DELETE FROM fournisseur WHERE marque ='$marque'");
        $rol->execute();
        header('Location:Fourinseur.php');
      
    }
    $dex="none";
    if(isset($_POST['add'])){
    $marque=$_POST['qes'];
    $adresse=$_POST['rep'];
    $tel=$_POST['date'];
    $creat=$data->prepare("INSERT INTO `fournisseur` (`marque`, `adresseF`, `telF`) VALUES ('$marque', '$adresse', '$tel');");
    $creat->execute();
    if($creat){
        $dex="block";
        $sec = "2.3";
        header("Refresh:$sec; url=Fourinseur.php");
    }
    }
    if(isset($_POST["update"])){
        $marque=$_POST['qes'];
        $adresse=$_POST['rep'];
        $tel=$_POST['date'];
    $ce=$data->prepare("UPDATE fournisseur set marque='$marque',adresseF='$adresse',telF='$tel' Where marque=$marque");
    $ce->execute();
    header('Location:Fourinseur.php');
    }


       
    ?>
    <?php
    include "headerAdmin.php";
   ?>
   <div class="container">

<div class="d-flex align-items-center mt-4">
   <button class="lole my-3">Add New<i class="bi bi-plus-circle mx-2"></i></button>
   

</div>

      <div class="alert w-50" style="display: <?php echo $dex ?>;    background-image: linear-gradient(to right, #1D976C 0%, #1D976C 100%); color: white;" id="alert"><div style="display: flex; align-items: center;"><i>opération réussie<i><i class="bi bi-patch-check-fill mx-3" style="font-size:25px;"></i></div></div>
















<div class="add mt-5">


      <form method="POST">

<div class="row d-flex m-auto"><div class="col-12">



       
</div></div>
<div class="row mt-3">
    <div class="col-md py-2"><label>Marque</label><input type="text" id="id" name="qes" class="form-control p-2" ></div>
    <div class="col-md py-2"><label>Adresse</label><input type="text" id="qeu" name="rep" class="form-control  p-2"></div>
</div>
<div class="row ">
<div class="col-md py-2"><label>telphon</label><input type="text" id="rep" name="date" class="form-control  p-2"></div>
</div>









<div class="row ">
    <button  class="col-md-4 btn  my-2 d-flex align-items-center justify-content-center " id="btn" name="add"    ;
"    ><i class="bi bi-node-plus  mx-2 "  style="font-size:24px;"></i>Add Blog</button>
    <button  class="col-md-2 btn btn-danger ms-2 my-2 close d-flex align-items-center justify-content-center" type="button" style="border-radius:10px;"><i class="bi bi-reply-all mx-2"  style="font-size:23px;"></i>Close</button>
  
</div>

</form>

</div>












<div style="overflow-x:auto;">

       <table class="table table-hover mt-4 table-responsive " >
  




      <form method='POST'>
     
           <tr >

               <th>Marque</th>
               <th>Adresse</th>
               <th >telephon</th>
           </tr>
           <tbody id='myTable' >
           <?php
           foreach($sel as $me){
            
               echo "
            
               <tr >
               <td>".$me['marque']."</td>
               <td><textarea disabled>".$me['adresseF']."</textarea></td>
               <td><textarea disabled>".$me['telF']."</textarea></td>
                <td><button  class='btn' type='button' onclick='app(this)' value='".$me['marque']."'><i class='bi bi-pencil-square text-success' style='font-size:22px;'></i></button></td>
                <td><button  class='btn'   onclick='supprimer(this)'   name='supprimere' type='button'  value='".$me['marque']."'><i class='bi bi-trash3-fill text-danger' style='font-size:22px;'></i></button></td>
               </tr>
               ";
           }

           ?>
            </tbody>
        

       </table>
       
       <?php
         echo "<b style='font-size:11px;color:'grey''>Showing 1 to 10 of ".$c." entries</b>";
       ?>























   </div>
   </form>
   <style>
       .cont{
           display: flex;
          
           justify-content: center;
           align-items: center;
           
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
         
    .gop{
        font-size: 12px;
        color:black;
    }
    .lole{
        border: none;
    padding: 10px 20px;
    border-radius:5px;
    background-image: linear-gradient(to left,#ED6E31,orange);
    color: white;
    }

    .info{
    border: none;
    outline: none;
    border: 1px solid rgb(218, 218, 218);
    padding: 10px 10px;
    background-color: transparent;
    max-width: 100%;
    word-wrap: break-word;
    border-radius: 5px;
    font-size: 12px;
    font-weight: bold;
}
.info:hover{
    background-color: rgb(236, 236, 236);
    transition: 0.2s;
}
#ffil{
        font-weight:bold ;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color:  #D3D3D3;
        border-radius: 7px;
        height: 40px;
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
   






   </div>






















</body>
<script>
  

    function supp(){
        alert('ok');
    }
        function supprimer(x){
        let text = 'Vraiment?.';
        if (confirm(text)==true){
           x.type="submit";
           
        
           
        } 
        else{
            x.type="button";
        }
          
    
    }
    $('.add').hide();
    $(".lole").click(function(){
        $(".add").slideToggle("slow");
        document.getElementById('id').value="";
        document.getElementById('titre').value="";
        document.getElementById('desce').value="";
        document.getElementById('auteur').value="";
        document.getElementById('btn').innerHTML="<i class='bi bi-node-plus  mx-2 'style='font-size:24px;'></i>Add Blog"
        document.getElementById('btn').name='add'
   
    });
    $('.close').click(function(){
        $(".add").slideUp("slow")
    })
//  $('.lole').hide();
 



function app(x){
    document.getElementById('btn').innerHTML="<i class=' bi bi-arrow-repeat mx-2 'style='font-size:24px;'></i>Update artice"
    document.getElementById('btn').name='update'
 
    $(".add").slideDown("slow");
     document.getElementById('id').value=x.parentNode.parentNode.children[0].innerHTML
     document.getElementById('qeu').value=x.parentNode.parentNode.children[1].children[0].innerHTML
     document.getElementById('rep').value=x.parentNode.parentNode.children[2].children[0].innerHTML
    // document.getElementById('ffil').innerHTML=x.parentNode.parentNode.parentNode.children[5].innerHTML   
     
    }
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


</script>
</html>