<?php
	include '../controller/ChambreController.php';
$id=$_GET["id"];

$ChambreC=new ChambreController();
if(
    isset($_POST['vue'])&&isset($_POST['prix'])
    &&isset($_POST['etage'])
    
){
    $idd=$_GET['idd'];
    $Chambre = new Chambre($_POST['vue'],$_POST['prix'],$_POST['etage'],$idd);
    $ChambreC->modifierChambre($Chambre,$id);
    header("Location:dashChambre.php?id=1");
}
else
echo 'erreur';


?>