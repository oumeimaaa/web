<?php
include_once('..\config.php');
include '..\model\rate.php';
class RateC {
    function afficherrates($id){
        $sql="SELECT * FROM rate";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function ajouterrate($rates){

       $sql = "INSERT INTO rate (nb_etoile,id_hotel)
                 VALUES (:nb_etoile,:id_hotel)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'nb_etoile'=> $rates->getrate(),
            'id_hotel'=> $rates->getid_hotel(),
        ]);
        $_SESSION['error']="data add seccsesfuly";
} catch (Exception $e){
    $e->getMessage();
}

    }

}
?>