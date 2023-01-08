<?php
    declare(strict_types = 1);
    namespace App\Entity\Abstract;
    
    abstract class AbstractProduit{
    
        protected string $nom;
        protected bool $enStock;
        protected int $prix;
        protected int $quantite;
    
        public function __construct(){
            $this->nom = "Produit";
            $this->enStock = true;
            $this->prix = 4;
            $this->quantite = 123;
        }
     
        public function getNom(): ?string {
            return $this->nom;
        }
     
        public function getenStock(): ?bool {
            return $this->enStock;
        }
     
        public function getPrix(): ?int {
            return $this->prix;
        }
        public function getQuantite(){
            return $this->quantite;
        }
    
    }
?>