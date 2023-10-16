<?php

include_once './app/models/decadas.model.php';
include_once './app/views/decadas.view.php';

class DecadasController{
    private $model;
    private $view;

public function __construct(){
    $this->model=new DecadasModel();
    $this->view=new DecadasView();
}

public function ShowDecadas(){
    $decadas = $this->model->getdecadas();

    $this->view->ShowDecadas($decadas);
}
}