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
    <title>Document</title>
    <link rel="stylesheet" href="css/Blog.css">
    <link rel="shortcut icon" type="image/png" href="image/aa1.png">
    <link rel="stylesheet" href="js/">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Mea+Culpa&family=Open+Sans:ital,wght@0,300;1,300&family=Spartan:wght@300&display=swap" rel="stylesheet">

</head>
<body>
    <?php
       include "BS.php";
       $sel=$data->prepare("SELECT * FROM produite");
       $sel->execute();
       $c=$sel->rowCount();

       
    ?>
    <?php
    include "headerAdmin.php";
   ?>
   <div class="container">
       <button name='addP' class="btn btn-dark text-white">Add Produit</button>
      <div class="py-4"><b style="font-size:18px;" >PRODUCT LIST</b><br></div>
      <b style="font-size: 11px; color: grey;" class="mx-2"> Show</b>
      <select class=" m-auto info "   >
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
        
      </select>
       <table class="table table-hover mt-5  table-striped ">
      
           <tr >

               <th>Produit ID</th>
               <th>Produit Name</th>
               <th>Quantity</th>
               <th>Status</th>
               <th>Price</th>
           </tr>
 
           <?php
           foreach($sel as $me){
               echo "
            
               <tr >
               <td><b  scope='row' class='gop'>".$me['idProduit']."$</b></td>
               <td><b class='gop'>".$me['libelleP']."</b></td>
               <td><b class='gop'>".$me['Quantity']."</b></td>
               <td><b class='gop'>".$me['status']."</b></td>
               <td><b class='gop'>".$me['prixP']."$</b></td>
               </tr>
               
               ";
           }
           ?>

       </table>
       <?php
         echo "<b style='font-size:11px;color:'grey''>Showing 1 to 10 of ".$c." entries</b>";
       ?>
   </div>
   
   <style>
    .gop{
        font-size: 12px;
        color:black;
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
   </style>
   <script>
    
   </script>
</body>
</html>