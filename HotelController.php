<?php

	include_once '../config.php';
	include_once '../model/hotel.php';

class HotelController {

    
	function afficherhotel(){
		$sql="SELECT * FROM hotel";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur:'. $e->getmessage());
		}
	}

	function ajouterhotel($hotel){

		$sql="INSERT INTO hotel (nom, adresse,nb_etoile) 
			VALUES (:nom,:adresse,:nb_etoile)";
			$db = config::getConnexion();
			try{
				
				$query = $db->prepare($sql);
				
				$query->execute([
					'nom' => $hotel->getnom(),
					'adresse' => $hotel->getadresse(),
					'nb_etoile' => $hotel->getnb_etoile(),
					
				]);	
				//header('Location: afficherhotel.php');
				
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		
	}

	function modifierhotel($hotel,$id){
		$db = config::getConnexion();
		$query = $db->prepare('UPDATE hotel SET nom = :nom, adresse = :adresse, nb_etoile = :nb_etoile WHERE id= :id');
		try{

	$query->execute([
		'nom'=> $hotel->getnom(),
		'adresse'=> $hotel->getadresse(),
		'nb_etoile'=> $hotel->getnb_etoile(),
		'id'=> $id
	]);
		} catch (Exception $e){
			$e->getMessage();
	}

		
	}

	function supprimerhotel($id){

		$sql="DELETE FROM hotel WHERE id=:id";
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

	function recupererhotel($id){

		$sql="SELECT * from hotel where id=$id";
		$db = config::getConnexion();
		try{
			$query=$db->prepare($sql);
			$query->execute();

			$hotel=$query->fetch();
			return $hotel;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}


    
    function triHotel(){
		$sql="SELECT * FROM hotel order by nom";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur:' . $e->getMessage());
		}
	}
	function searchHotel($string){
		$sql="SELECT * FROM hotel WHERE nom = '$string'";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur:' . $e->getMessage());
		}
	}
	function countEtoile($int){

		$sql="SELECT count(id) FROM rate WHERE nb_etoile=$int " ;
		$db = config::getConnexion();
		try{
			$query = $db->query($sql);
			$query->execute();
			   $prog_number =$query->fetchColumn();
			return $prog_number;
		}
		catch(Exception $e){
			die('Erreur: '.$e->getMessage());
		}   
	}
    









    






    

    
    
    
    
    
    
    







    
    
    
    }



?>