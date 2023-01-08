<?php
    declare(strict_types = 1);
    namespace App\Controller;
    use App\Entity\Tomate;
    use App\Controller\Abstract\AbstractController;
    use App\Interface\Comestible;

    final class TomateController extends AbstractController  implements Comestible{
        private $tomate;
        public function __construct(Tomate $tomate)
        {
            $this->tomate = $tomate;
        }
        
        
        public function reduction(){
            if(($this->quantite - $this->nbrProduitAcheter) > 70){
                printf($this->nom . "a une reduction de 20%");
            }
        }
        
        public function estComestible(): bool{
          return true ;
        }
    }
?>

