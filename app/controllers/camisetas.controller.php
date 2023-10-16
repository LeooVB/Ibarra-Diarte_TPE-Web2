<?php

include_once './app/models/camisetas.model.php';
include_once './app/views/camisetas.view.php';

class CamisetasController{
    private $model;
    private $view;

public function __construct(){
    $this->model=new CamisetasModel();
    $this->view=new CamisetasView();
}

public function ShowCamisetas(){
    $camisetas = $this->model->getcamisetas();

    $this->view->ShowCamisetas($camisetas);
}
public function ShowCamisetaById($id) {
    $camiseta = $this->model->getCamisetaById($id);
    if($camiseta) {
        $this->view->ShowCamiseta($camiseta);
    } else {
        echo('404 - Not Found: El equipo seleccionado no existe.');
    } 
}
public function ShowCamisetasByDecada($id){
    $camisetas = $this->model->getCamisetasByDecada($id);
    if($camisetas) {
        $this->view->ShowCamisetasByDecada($camisetas);
    } else {
        echo('404 - Not Found: El equipo seleccionado no existe.');
    } 
}
}