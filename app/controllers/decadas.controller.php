<?php

include_once './app/models/decadas.model.php';
include_once './app/views/decadas.view.php';
include_once './app/helper/auth.helper.php';

class DecadasController{
    private $model;
    private $view;

public function __construct(){
    AuthHelper::verify();
    $this->model=new DecadasModel();
    $this->view=new DecadasView();
}

public function ShowDecadas(){
    $decadas = $this->model->getdecadas();

    $this->view->ShowDecadas($decadas);
}
public function addDecada()
{

    if (empty($_POST['decada'])) {
        echo 'error';
        die();
    }
    $this->model->addDecada();
    header('Location: ' . BASE_URL);
}
public function editDecada($id){

    if (empty($_POST['decada'])) {
        echo 'error';
        die();

    }
    $this->model->editDecadaById($id);
    header('Location: ' . BASE_URL);
}
}