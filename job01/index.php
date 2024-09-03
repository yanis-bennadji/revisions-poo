<?php 

include_once "./_Product.php";

$product = new Product(
    1,                         
    "T-Shirt",                
    ["insert img"], 
    1000,                       
    "A beautiful t-shirt.",     
    10,                        
    new DateTime(),             
    new DateTime()              
);

function prettyDump($variable, $label = '') {
    echo "<h3>$label</h3>";
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

// Vérification des valeurs initiales avec les getters
prettyDump($product->getId(), 'ID');
prettyDump($product->getName(), 'Name');
prettyDump($product->getPhotos(), 'Photos');
prettyDump($product->getPrice(), 'Price');
prettyDump($product->getDescription(), 'Description');
prettyDump($product->getQuantity(), 'Quantity');
prettyDump($product->getCreatedAt(), 'Created At');
prettyDump($product->getUpdatedAt(), 'Updated At');

// Modification des valeurs avec les setters
$product->setName("T-Shirt sale");
$product->setPrice(150);

// Vérification des modifications
prettyDump($product->getName(), 'Updated Name');
prettyDump($product->getPrice(), 'Updated Price');
?>