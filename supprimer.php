<?php
include "BS.php";
$id=$_POST['code'];
$ajouter=$con->prepare("DELETE FROM oridshoop WHERE id='$id'");
    $ajouter->execute();
    ?>