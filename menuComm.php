<div class=" ">
<div class="text-center"><b>Order summary</b></div>


<?php
 $somm=0;
$T=unserialize($_COOKIE["panierid"]);

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
            $somm+=(int)($m['prix']);
        }
    }





?>



<b style="color:grey;font-size:11px;"  class="me-5">Subtotal:</b><b class="ms-auto mx-5"><b>$ <?php echo   $somm; ?>$</b><br>
<b style="color:grey;font-size:11px;" class="me-5" >Shipping::</b><b class="ms-auto mx-5">--</b><br>
<b style="color:grey;font-size:11px;" class="me-5">Taxes::</b><b class="ms-auto mx-5">22.02$</b><br>
<b style="color:grey;font-size:11px;" class="me-5">Discount::</b><b class="ms-auto mx-5">-</b>

<hr style="color:DarkGray;">
<h1 class="text-center my-5" style="font-size:20px;" ><b>$ <?php echo   $somm; ?></b></h1>

<input type="text" name='code' class="form-control" placeholder="Code Promo" style="font-size:11px; font-weight: bold; height: 45px;">
<input id="btn-progress" type="submit" class="d-flex justify-content-center mt-3 tft" value="apply Code">

    </div>