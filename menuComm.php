<div class=" ">


<div class="text-center"><b>Order summary</b></div>
<?php
$T=unserialize($_COOKIE["panierid"]);


 $somm=0;
    foreach ($T as $key => $v){
        $dataCommade=$data->prepare("SELECT * FROM produite WHERE produite.idProduit in('$key')");
        $dataCommade->execute();
        foreach($dataCommade as $date){
     
            echo '<div class="d-flex align-items-center">
            <img src="image/'.$date["imgP"].'" style="width:80px;">
            <div>
                <b style="font-size:12px;">'.$date["libelleP"].'</b><br>
                <b style="color: blue;">'.$date["prixP"].'$</b>
            </div>
        </div>
        <hr style="color:DarkGray;">';
        }
    }

    foreach ($T as $key => $v){
        $see=$data->prepare("SELECT sum(prixP) as prix FROM produite WHERE produite.idProduit in('$key')");
        $see->execute();
        
        foreach($see as $m){
            $somm+=(int)($m['prix'])*$v;
        }
    }

    
    if(isset($_POST['apply']))
    if($_POST['codee']==555){
        $somm=$somm*10/100;
    }





?>

<b style="color:grey;font-size:11px;"  class="me-5">Subtotal:</b><b class="ms-auto mx-5"><b>$ <?php echo   $somm; ?>$</b><br>
<b style="color:grey;font-size:11px;" class="me-5" >Shipping::</b><b class="ms-auto mx-5">--</b><br>
<b style="color:grey;font-size:11px;" class="me-5">Taxes::</b><b class="ms-auto mx-5">22.02$</b><br>
<b style="color:grey;font-size:11px;" class="me-5">Discount::</b><b class="ms-auto mx-5">-</b>
<hr style="color:DarkGray;">
<h1 class="text-center my-5" style="font-size:20px;" ><b>$ <?php echo   $somm; ?></b></h1>
<form method="POST">
<input type="text" name='codee' class="form-control shadow-none" placeholder="Code Promo " style="font-size:11px; font-weight: bold; height: 45px;">
</form>
<input id="btn-progress" type="submit" name='apply' class="d-flex justify-content-center mt-3 hos tft shadow-none" value="apply Code">

    </div> 
    <style>
            .hos{
        background-image: linear-gradient(to left,rgb(255, 119, 0) , rgb(224, 111, 111));
        font-weight:bold ;
        font-size: 11px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        border: none;
        padding: 3px 0px;
        color: white;
        
    }
    .tft{
        border: 1px solid orange;
        border-radius: 5px;
        color: white;
     transition: 0.3s;
     font-weight: bold;
     width: 100%;
     padding: 10px;
     background-color:white;
    }
    .tft:hover{
        color: white;
        background-color:orange;
        transition: 0.3s;

    }
    </style>