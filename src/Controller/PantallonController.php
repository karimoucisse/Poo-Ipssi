<?php
    declare(strict_types = 1);
    namespace App\Controller;
    use App\Entity\Pantallon;
    use App\Controller\Abstract\AbstractController;
    use App\Interface\Comestible;

    final class PantallonController extends AbstractController  implements Comestible{
        
        private $pantallon;

        public function __construct(Pantallon $pantallon)
        {
            $this->pantallon = $pantallon;
        }
        
        public function estComestible(): bool{
          return false ;
        }
    }
?>

