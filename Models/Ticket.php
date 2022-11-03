<?php 

class Ticket {

    public string $reference;
    public float $price;

    public function __construct(string $reference, float $price)
    {
        $this->reference = $reference;
        $this->price = $price;
    }


}