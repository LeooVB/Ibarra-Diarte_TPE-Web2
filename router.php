<?php
require_once './app/controllers/decadas.controller.php';
require_once './app/controllers/camisetas.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
$action = 'home';
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}


$params = explode('/', $action);

switch ($params[0]){
  

    case 'home':
        $controller = new DecadasController();
        $controller->ShowDecadas();
        break;
  
    case 'camisetas':
         $controller = new CamisetasController();
         $controller->ShowCamisetas();
         break;

    case 'camiseta' :
        $controller = new CamisetasController();
        $controller->ShowCamisetaById($params[1]);
        break;
        
    case 'decada' :
            $controller = new CamisetasController();
            $controller->ShowCamisetasByDecada($params[1]);
            break;    

    default: 
         echo "404 Page Not Found";
         break;

}