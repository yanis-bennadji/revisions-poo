<?php

// Inclure la classe Product
require_once '_Product.php';

// Connexion à la base de données
try {
    $pdo = new PDO('mysql:host=localhost;dbname=draft_shop', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connexion échouée : ' . $e->getMessage());
}

// Créer une nouvelle instance de Product avec la connexion PDO
$product = new Product(0, '', [], 0, '', 0, new DateTime(), new DateTime(), 0);

// Appeler la méthode findOneById pour récupérer le produit avec l'ID 7
$productInstance = $product->findOneById(4, $pdo);

if ($productInstance) {
    // Si le produit est trouvé, afficher ses informations
    echo "<h2>Produit trouvé :</h2>";
    echo "<p><strong>Nom :</strong> " . htmlspecialchars($productInstance->getName()) . "</p>";
    echo "<p><strong>Description :</strong> " . htmlspecialchars($productInstance->getDescription()) . "</p>";
    echo "<p><strong>Prix :</strong> " . number_format($productInstance->getPrice() / 100, 2, ',', ' ') . " €</p>";
    echo "<p><strong>Quantité en stock :</strong> " . $productInstance->getQuantity() . "</p>";
    echo "<p><strong>Date de création :</strong> " . $productInstance->getCreatedAt()->format('d/m/Y H:i:s') . "</p>";
    echo "<p><strong>Date de mise à jour :</strong> " . $productInstance->getUpdatedAt()->format('d/m/Y H:i:s') . "</p>";
} else {
    // Si aucun produit n'est trouvé
    echo "<p>Aucun produit trouvé avec l'ID 7.</p>";
}

?>
