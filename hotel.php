
   <?php
class Hotel
{
    private $id;
    private $adresse;
    private $nom;
    private $nb_etoile;
        function __construct(  $nom,$adresse,$nb_etoile){
     
     $this->nom=$nom;
     $this->adresse=$adresse;
     $this->nb_etoile=$nb_etoile;
     //$this->file_path=$file_path   ;
  

        
 }

 function getid(){
     return $this->id;
 }

 function getnom(){
     return $this->nom;
 }

 function getadresse(){
     return $this->adresse;
 }

 function getnb_etoile(){
     return $this->nb_etoile;
 }



 function setnom(string $nom){
     $this->nom=$nom;
 }

 function setadresse(string $adresse){
     $this->adresse=$adresse;
 }

 function setnb_etoile(string $nb_etoile){
     $this->nb_etoile=$nb_etoile;
 }










}




?>

