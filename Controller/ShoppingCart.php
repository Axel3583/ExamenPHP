<?php 

class ShoppingCart{

    var $Items = array(); // Tableau des articles du Panier;
   
    public function __construct()
    {
        if (!isset($GLOBALS['idShoppingCart'])) {
            $GLOBALS['idShoppingCart'] = 1 ;
            $this->id = $GLOBALS['idShoppingCart'];
        }else{

            $GLOBALS['idShoppingCart'] = $GLOBALS['idShoppingCart'] + 1;
            $this->id =  $GLOBALS['idShoppingCart'];
        }
        
    } 

    /*
      public function addItem($item){
        $weight = $item->getWeight();
        if ($weight < 10000 ){
          $this->items[] = $item;
        } else {
          echo '<br>';
          //echo "Item must weight less than 10kg";
          echo '<br>';
        }
      }
      */

      public function addItem($items)
    {
      $this->Items[] = $items;
      return $this; 
    }
    

    function removeItem($Items, $Item) {
        if ($this->items[$Item] > $Item) {
            $this->items[$Item] -= $Item;
            return true;
        } elseif ($this->Items[$Items] == $Item) {
            unset($this->Items[$Items]);
            return true;
        } else {
            return false;
        }
    }

    public function itemCount($Items){
        $axel = sizeof($Items);
        return $axel;
    }

    /*
    public function totalPrice($Items){
        $total = 0
        
    }

    */


    public function __toString(){
        return 'Contenu panier : ' .$this->Items. '<br>' .$this->Items['id']. '<br>'.$this->Items['item'] ;
    }
       

}