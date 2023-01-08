<?php
    declare(strict_types = 1);
    namespace App\Controller;
    use App\Entity\Orange;
    use App\Controller\Abstract\AbstractController;
    use App\Interface\Comestible;

    class OrangeController extends AbstractController  implements Comestible{

        private $orange;
        public function __construct(Orange $orange)
        {
            $this->orange = $orange;
        }
        
        public function estComestible(): bool{
          return true ;
        }
    }
?>

