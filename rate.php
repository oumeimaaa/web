<?php
class Rate
{ 
    private string $id;
    private string $rate;
    private string $id_hotel;
public function __construct($d,$f){
    $this->rate = $d;
    $this->id_hotel = $f;

}
public function getid(){
    return $this->id ;
}
public function getrate(){
    return $this->rate ;
}
public function getid_hotel(){
    return $this->id_hotel ;
}





public function setrate($rate){
    $this->rate = $rate ;
}
public function setid_hotel($id_hotel){
    $this->id_hotel = $id_hotel ;
}


}
?>