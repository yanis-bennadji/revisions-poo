<?php

require_once '_Product.php';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=draft_shop', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connexion échouée : ' . $e->getMessage());
}

$stmt = $pdo->prepare('SELECT * FROM product WHERE id = :id');
$stmt->execute(['id' => 7]);
$productData = $stmt->fetch(PDO::FETCH_ASSOC);

if ($productData) {
    $product = new Product(
        $productData['id'],
        $productData['name'],
        explode(',', $productData['photos']), 
        $productData['price'],
        $productData['description'],
        $productData['quantity'],
        new DateTime($productData['createdAt']),
        new DateTime($productData['updatedAt']),
        $productData['category_id']
    );

    echo "<h1>Détails du produit</h1>";
    echo "<p><strong>ID :</strong> " . $product->getId() . "</p>";
    echo "<p><strong>Nom :</strong> " . htmlspecialchars($product->getName()) . "</p>";
    echo "<p><strong>Description :</strong> " . htmlspecialchars($product->getDescription()) . "</p>";
    echo "<p><strong>Prix :</strong> " . number_format($product->getPrice() / 100, 2, ',', ' ') . " €</p>";
    echo "<p><strong>Quantité en stock :</strong> " . $product->getQuantity() . "</p>";
    echo "<p><strong>Créé le :</strong> " . $product->getCreatedAt()->format('d/m/Y H:i:s') . "</p>";
    echo "<p><strong>Mis à jour le :</strong> " . $product->getUpdatedAt()->format('d/m/Y H:i:s') . "</p>";
    echo "<p><strong>Catégorie ID :</strong> " . $product->getCategoryId() . "</p>";

    echo "<h3>Photos du produit :</h3>";
    echo "<ul>";
    foreach ($product->getPhotos() as $photo) {
        echo "<li>" . htmlspecialchars($photo) . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Aucun produit trouvé avec l'id 7.</p>";
}

?>
