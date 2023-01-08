<?php
declare(strict_types = 1);
namespace App\Controller\Abstract;

use Exception;
use App\Entity\Abstract\AbstractProduit;

abstract class AbstractController extends AbstractProduit 
{   
    public function setPrix(int $prix){
        $this->prix = $prix;
    }
    
    public function setquantite(int $quantite){
        $this->quantite = $quantite;
    }

    public function enStock(){
        $this->enStock = false;
    }
}