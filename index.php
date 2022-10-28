<?php
 require_once('Controller/Item.php');
 require_once('Controller/ShoppingCart.php');
    
$Article = new Item("corn flakes", 500);
echo $Article->phrase(). "<br>";

$chewingGum = new Item("chewing gum",403);
echo $chewingGum->phrase();

// Ajout dans le tableau
$item1 = new Item("corn flakes", 1500);
$item2 = new Item("chewing gum", 700);
$item3 = new Item("spaguetti", 600);

$panier = new ShoppingCart;
$panier -> addItem($item1);
$panier -> addItem($item2);
$panier -> addItem($item3);
var_dump($panier);

//supprimer un element du panier
$panier = new ShoppingCart;
$panier->removeItem($Item, $Item);
var_dump($panier);

//Compter les éléments du panier
$panier = new ShoppingCart;
$panier->itemCount($Item);
var_dump($panier);










