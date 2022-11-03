<?php
require_once('./Controller/Item.php');
require_once('./Controller/ShoppingCart.php');
require_once('./Controller/FreshItem.php');


$cornFlakes = new Item("Corn flakes", 800, 1);
$bonbon = new Item("Bonbon", 50, 5);
$chewingGum = new Item("Chewing gum",503, 3);
$scheppes = new Item("Scheppes",200, 1);


/*
var_dump($cornFlakes);
var_dump($chewingGum);
var_dump($scheppes);
*/

$freshItem = new FreshItem("Pomme de terre",700, 50, "2022-02-17");

var_dump($freshItem);

$cart = new ShoppingCart;

/*
var_dump($cornFlakes->getPrice());
var_dump($chewingGum->getPrice());
var_dump($scheppes->getPrice());
*/

$cart->addItem($scheppes);
$cart->addItem($chewingGum);
$cart->addItem($cornFlakes);
$cart->addItem($bonbon);
$cart->addItem($freshItem);






  $delete = $cart->removeItem();
  var_dump($delete);




var_dump($cart->panier);
var_dump($cart->itemCount());

var_dump($cart->getTotalPrice());

echo $cart->__toString();