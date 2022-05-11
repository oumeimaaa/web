<?php
	include '../controller/ChambreController.php';
	$ChambreC=new ChambreController ();
	$id=$_GET['id'];
	$ChambreC->supprimerChambre($id);
	$idd=$_GET['idd'];
	header("Location:dashChambre.php?id=$idd");
?>