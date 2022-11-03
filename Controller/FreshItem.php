
<?php

class FreshItem extends Item{

    public function __construct(string $Name, float $Price, float $Weight, string $bestBeforeDate = "YYYY-MM-DD")
    {
        $this->bestBeforeDate = $bestBeforeDate;
        $this->Name = $Name;
        $this->Price = $Price;
        $this->Weight = $Weight;
    }

}