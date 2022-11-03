<?php 

class ShoppingCart {
  
    public array $panier = [];
    public int $id = 1;
   
    public function __construct()
    {     

    }


    public function addItem($Item){
            if ($Item->Weight > 10000){
                echo $Item->Name. " Trop lourd";
            }else{
                $Item->id = $this->getId();
                array_push($this->panier, $Item);
                echo $Item->Name. " Ajouté au panier\n</br>";
            }
        }           
    

    public function removeItem($index = NULL){
      if ($index){
        unset($this->panier[array_search($index, $this->panier)]);
        echo "Supprimé";
    }else{
        return false;
    }
}

    public function itemCount(){
      echo "Il Y'a ". count($this->panier, COUNT_RECURSIVE) . " articles dans le panier";
    }


    public function getTotalPrice(){ 
    $montant_total = 0;
    foreach($this->panier as $article) {
    $montant_total += $article->Price;
       //"<p>". $values->getPrice()  . "<p>""<p>";
    }
    echo "Le prix total du panier est  : " . $montant_total . "$";
}


    public function getId(){
        return $this->id++;
    }

    public function parseJson(){
        for($i = 0; $i < count($this->panier); $i++ ){
            return json_encode($this->panier[$i]);
        }
    }

    public function __toString(): string
    {
        $total = count($this->panier, COUNT_RECURSIVE);
        return "<p>" . $this->parseJson(). "<p>
            <p> Il Y'a " . json_encode($total) . " articles dans le panier :)<p>";
        
    }
}