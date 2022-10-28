<?php 

class Item {
    private $Nom;
    private $Price;

public function __construct($Nom, $Price){
        $this->Nom = $Nom;
       $this->Price = $Price;
       // return $this->Nom . ":" .$this->Price . "$";
    }

public function phrase (){
    echo $this->Nom . " : " .$this->Price . "$";
}

public function getNom(): string {
            return $this->Nom;
         }

public function getPrice(): int {
            return $this->Price;
         }     

}


