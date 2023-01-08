<?php
declare(strict_types = 1);
namespace App\Entity;

use App\Entity\Abstract\AbstractProduit;

class Tomate extends AbstractProduit{

    public function __construct(){
        parent::__construct();
        $this->nom = "Tomate";
    }
}