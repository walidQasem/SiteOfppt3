<?php 

include "BS.php";

$sql=$data->prepare("SELECT * FROM commentaire");
$sql->execute();
foreach($sql as $qs){
    echo $qs['idC'];
}

 ?>