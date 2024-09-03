<?php 

    class Category {
        //* Properties

        private int $id;
        private string $name;
        private string $description;
        private DateTime $createdAt;
        private DateTime $updatedAt;

        // ! Constructor

        public function __construct(
            int $id,
            string $name,
            string $description,
            DateTime $createdAt,
            DateTime $updatedAt
        ) {
            $this->id = $id;
            $this->name = $name;
            $this->description = $description;
            $this->createdAt = $createdAt;
            $this->updatedAt = $updatedAt;
        }

        //*Get
        public function getId(): int {
            return $this->id;
        }
    
        public function getName(): string {
            return $this->name;
        }

        public function getDescription(): string {
            return $this->description;
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

        public function setDescription (string $description): void {
            $this->description = $description;
        }

        public function setCreatedAt (DateTime $createdAt): void {
            $this->createdAt = $createdAt;
        }
    
        public function setUpdatedAt (DateTime $updatedAt): void {
            $this->updatedAt = $updatedAt;
        }
        
    }

?>