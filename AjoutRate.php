<?php
include '../controller/rateC.php';
$id=$_GET["id"];
$rateC=new RateC();

if (isset($_POST['Submit1'])) {

    $selected_radio = $_POST['rate'];
    
    if ($selected_radio == '1') {
        $rate = new Rate(1,$id);
    $rateC->ajouterrate($rate);
   header('Location: index.php');
    
    }
    else if ($selected_radio == '2') {
        $rate = new Rate(2,$id);
        $rateC->ajouterrate($rate);
       header('Location: index.php');
    
    }
    else if ($selected_radio == '3') {
        $rate = new Rate(3,$id);
        $rateC->ajouterrate($rate);
       header('Location: index.php');
    
    }
    else if ($selected_radio == '4') {
        $rate = new Rate(4,$id);
        $rateC->ajouterrate($rate);
       header('Location: index.php');
    
    }
    else if ($selected_radio == '5') {
        $rate = new Rate(5,$id);
        $rateC->ajouterrate($rate);
       header('Location: index.php');
    
    }
    else
{
echo 'el forum mazelll na9esss hooooooooooooooy';
}
    }


