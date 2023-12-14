<?php
// Cargar el controlador y vista según la solicitud
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

require_once 'controllers/LoteriaController.php';

$controller = new LoteriaController();

switch ($page) {
    case 'resultado1':
        $controller->resultado1();
        break;
    case 'resultado2':
        $controller->resultado2();
        break;
    case 'resultado3':
        $controller->resultado3();
        break;
    case 'resultado4':
        $controller->resultado4();
        break;
    case 'resultado5':
        $controller->resultado5();
        break;
    case 'resultado6':
        $controller->resultado6();
        break;
    case 'resultado7':
        $controller->resultado7();
        break;
    case 'resultado8':
        $controller->resultado8();
        break;
    case 'resultado9':
        $controller->resultado9();
        break;
    case 'resultado10':
        $controller->resultado10();
        break;

    case 'resultado11':
        $controller->resultado11();
        break;

    case 'resultado12':
        $controller->resultado12();
        break;

    case 'resultado13':
        $controller->resultado13();
        break;

    case 'resultado14':
        $controller->resultado14();
        break;

    case 'resultado15':
        $controller->resultado15();
        break;

    case 'resultado16':
        $controller->resultado16();
        break;

    case 'resultado17':
        $controller->resultado17();
        break;

    case 'resultado18':
        $controller->resultado18();
        break;

    case 'resultado19':
        $controller->resultado19();
        break;

    case 'resultado20':
        $controller->resultado20();
        break;

    case 'resultado21':
        $controller->resultado21();
        break;

    case 'resultado22':
        $controller->resultado22();
        break;

    case 'resultado23':
        $controller->resultado23();
        break;

    case 'resultado24':
        $controller->resultado24();
        break;

    case 'resultado25':
        $controller->resultado25();
        break;

    case 'resultado26':
        $controller->resultado26();
        break;

    case 'resultado27':
        $controller->resultado27();
        break;

    case 'resultado28':
        $controller->resultado28();
        break;

    case 'resultado30':
        $controller->resultado30();
        break;

    case 'resultado31':
        $controller->resultado31();
        break;

    case 'resultado32':
        $controller->resultado32();
        break;

    case 'resultado33':
        $controller->resultado33();
        break;

    case 'resultado35':
        $controller->resultado35();
        break;

    case 'resultado36':
        $controller->resultado36();
        break;

    default:
        $controller->Home();
        break;
}
?>