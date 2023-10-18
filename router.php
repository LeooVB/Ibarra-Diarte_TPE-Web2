<?php
require_once './app/controllers/decadas.controller.php';
require_once './app/controllers/camisetas.controller.php';
require_once './app/controllers/auth.controller.php';
require_once './app/helper/auth.helper.php';

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

    case 'login':
        $controller = new authController();
        $controller->ShowLogin();
        break;

    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;

    case 'verify':
        $controller = new authController();
        $controller->VerifyUser();
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
    case 'add-camiseta' :
        $controller = new CamisetasController();
        $controller->addCamiseta();
        break;
    case 'delete' :
        $controller = new CamisetasController();
        $controller->deleteCamisetaById($params[1]);
        break;
    case 'edit' :
        $controller = new CamisetasController();
        $controller->editCamisetaById($params[1]);
    case 'add-decada' :
        $controller = new DecadasController();
        $controller->addDecada();
        break;
    case 'edit-decadas' :
        $controller = new DecadasController();
        $controller->editDecada($params[1]);
        break;
    default: 
         echo "404 Page Not Found";
         break;

}