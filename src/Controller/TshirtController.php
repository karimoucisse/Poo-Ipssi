<?php
    declare(strict_types = 1);
    namespace App\Controller;
    use App\Entity\Tshirt;
    use App\Controller\Abstract\AbstractController;
    use App\Interface\Comestible;

    final class TshirtController extends AbstractController  implements Comestible{
        private $tshirt;
        public function __construct(Tshirt $tshirt)
        {
            $this->tshirt = $tshirt;
        }
        
        public function estComestible(): bool{
          return false ;
        }

    }
?>

