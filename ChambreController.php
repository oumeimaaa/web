<?php

	include_once '../config.php';
	include_once '../model/Chambre.php';

class ChambreController {

    
	function afficherChambre($id){
		$sql="SELECT * FROM Chambre INNER JOIN hotel ON chambre.id_hotel = hotel.id WHERE hotel.id = $id";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur:'. $e->getMessage());
		}
	}
	function ajouterChambre($Chambre){

		$sql="INSERT INTO Chambre (vue, prix ,etage,id_hotel) 
			VALUES (:vue,:prix,:etage,:id_hotel)";
			$db = config::getConnexion();
			try{
				
				$query = $db->prepare($sql);
				
				$query->execute([
					'vue' => $Chambre->getvue(),
					'prix' => $Chambre->getprix(),
					'etage' => $Chambre->getetage(),
					'id_hotel' => $Chambre->getid_hotel(),
				]);	
				//header('Location: afficherChambre.php');
				
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		
	}
	function supprimerChambre($id){

		$sql="DELETE FROM Chambre WHERE id_c=:id";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':id', $id);
		try{
			$req->execute();
			
		}
		catch(Exception $e){
			die('Erreur:'. $e->getMessage());
		}
	
	}

	function modifierChambre($hotel,$id){
		$db = config::getConnexion();
		$query = $db->prepare('UPDATE Chambre SET vue = :vue, prix = :prix, etage = :etage WHERE id_c= :id_c');
		try{

	$query->execute([
		'vue'=> $hotel->getvue(),
		'prix'=> $hotel->getprix(),
		'etage'=> $hotel->getetage(),
		'id_c'=> $id
	]);
		} catch (Exception $e){
			$e->getMessage();
	}

		
	}



	function recupererChambre($id){

		$sql="SELECT * from Chambre where id_c=$id";
		$db = config::getConnexion();
		try{
			$query=$db->prepare($sql);
			$query->execute();

			$Chambre=$query->fetch();
			return $Chambre;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}


    
    
    









    






    

    
    
    
    
    
    
    







    
    
    
    }



?>