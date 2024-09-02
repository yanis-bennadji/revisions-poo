<?php 

    class Product {
        //* Properties 

        private int $id;
        private string $name;
        private array $photos;
        private int $price;
        private string $description;
        private int $quantity;
        private DateTime $createdAt;
        private DateTime $updatedAt;

        // ! Construct

        public function __construct(
            int $id,
            string $name,
            array $photos,
            int $price,
            string $description,
            int $quantity,
            DateTime $createdAt,
            DateTime $updatedAt
        )
        {
            $this->id = $id;
            $this->name = $name;
            $this->photos = $photos;
            $this->price = $price;
            $this->description = $description;
            $this->quantity = $quantity;
            $this->createdAt = $createdAt;
            $this->updatedAt = $updatedAt;            
        }

        //* Get

        public function getId(): int {
            return $this->id;
        }

        public function getName(): string {
            return $this->name;
        }

        public function getPhotos(): array {
            return $this->photos;
        }
        
        public function getPrice (): int {
            return $this->price;
        }

        public function getDescription(): string {
            return $this->description;
        }
        
        public function getQuantity (): int {
            return $this->quantity;
        }

        public function getCreatedAt(): DateTime {
            return $this->createdAt;
        }

        public function getUpdatedAt(): Datetime {
            return $this->updatedAt;
        }

        //*Set

        public function setId (int $id): void {
            $this->id = $id;
        }

        public function setName (string $name): void {
            $this->name = $name;
        }

        public function setPhotos (array $photos): void {
            $this->photos = $photos;
        }

        public function setPrice (int $price): void {
            $this->price = $price;
        }

        public function setDescription (string $description): void {
            $this->description = $description;
        }

        public function setQuantity (int $quantity): void {
            $this->quantity = $quantity;
        }

        public function setCreatedAt (DateTime $createdAt): void {
            $this->createdAt = $createdAt;
        }

        public function setUpdatedAt (DateTime $updatedAt): void {
            $this->updatedAt = $updatedAt;
        }
    }




$product = new Product(
    1,                         
    "T-Shirt",                
    ["photo1.jpg", "photo2.jpg"], 
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