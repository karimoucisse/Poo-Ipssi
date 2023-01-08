<?php

    require_once __DIR__ . '/vendor/autoload.php';

    use App\Entity\Orange;
    use App\Controller\OrangeController;
    use App\Entity\Pantallon;
    use App\Controller\PantallonController;
    use App\Entity\Tshirt;
    use App\Controller\TshirtController;
    use App\Entity\Tomate;
    use App\Controller\TomateController;

    $orange = new Orange();
    $orangeController =  new OrangeController($orange);

    $pantallon = new Pantallon();
    $pantallonController =  new PantallonController($pantallon);

    $tshirt = new Tshirt();
    $tshirtController =  new TshirtController($tshirt);

    $tomate = new Tomate();
    $tomateController = new TomateController($tomate);

    $orangeController->setPrix(4);
    $orangeController->setquantite(46);
    $orangeController->enStock();
    print_r($orangeController);

    $pantallonController->setPrix(45);
    $pantallonController->setquantite(76);
    $pantallonController->enStock();

    print_r($pantallonController);

    $tshirtController->setPrix(19);
    $tshirtController->setquantite(25);
    $tshirtController->enStock();
    print_r($tshirtController);

    $tomateController->setPrix(4);
    $tomateController->setquantite(700);
    $tomateController->enStock();
    print_r($tomateController);

?>