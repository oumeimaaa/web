<?php
include '../controller/HotelController.php';
$id=$_GET["id"];
$HotelC=new HotelController();
if(
    isset($_POST['nom'])&&isset($_POST['adresse'])
    &&isset($_POST['etoile'])
    
){
    $Hotel = new Hotel($_POST['nom'],$_POST['adresse'],$_POST['etoile']);
    $HotelC->modifierhotel($Hotel,$id);

}
else
echo 'erreur';
header("Location:DashAjouterHotel.php?temp=0");

?>