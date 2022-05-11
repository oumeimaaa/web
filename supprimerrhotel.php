<?php
	include '../controller/HotelController.php';
	$HotelC=new HotelController ();
	$HotelC->supprimerhotel($_GET["id"]);
	header('Location:DashAjouterHotel.php?temp=0');
?>