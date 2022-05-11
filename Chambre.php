<?php
class Chambre
{
    private $id;
    private $vue;
    private $prix;
    private $etage;
    private $id_hotel;
   
 
   
       
   
        function __construct(  $vue,$prix,$etage,$id_hotel){
     
        $this->prix=$prix;
        $this->vue=$vue;
        
        $this->etage=$etage;
        $this->id_hotel=$id_hotel;
        }
     
   
           
    
 
    function getid(){
        return $this->id;
    }
 
    function getvue(){
        return $this->vue;
    }
   
    function getprix(){
        return $this->prix;
    }
    function getetage(){
        return $this->etage;
    }
    function getid_hotel(){
        return $this->id_hotel;
    }
 
   
 
    function setvue(string $vue){
        $this->vue=$vue;
    }
 
    function setprix(string $prix){
        $this->prix=$prix;
    }
 
    function setetage(string $etage){
        $this->etage=$etage;
    }
    function setid_hotel(string $id_hotel){
        $this->id_hotel=$id_hotel;
    }
 
 

}
?>