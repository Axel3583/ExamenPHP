<?php 

class Item {

    public $id;
    
    public function __construct(string $Name, float $Price, float $Weight)
    {
        //$Price = number_format($this->Price, 2);
        $this->id;
        $this->Name = $Name;
        $this->Price = $Price;
        $this->Weight = $Weight;
       
    }
    /*
    public function Item(){
    return $this->Name . " : " .$this->Price. " $ ";
    }
    */
    public function getName(): string{
        return $this->Name;
    }

    public function getPrice(): float{
        return $this->Price;
    }

    public function getWeight(): float{
        return $this->Weight;
    }

    public function getId(){
        return $this->id++;
    }
}