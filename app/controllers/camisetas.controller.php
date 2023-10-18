<?php

include_once './app/models/camisetas.model.php';
include_once './app/views/camisetas.view.php';
include_once './app/helper/auth.helper.php';

class CamisetasController
{
    private $model;
    private $view;
    private $modelDecada;

    public function __construct()
    {
        AuthHelper::verify();
        $this->model = new CamisetasModel();
        $this->modelDecada = new DecadasModel();
        $this->view = new CamisetasView();

    }

    public function ShowCamisetas()
    {
        $camisetas = $this->model->getcamisetas();
        $decadas = $this->modelDecada->getdecadas();

        $this->view->ShowCamisetas($camisetas, $decadas);
    }
    public function ShowCamisetaById($id)
    {
        $camiseta = $this->model->getCamisetaById($id);
        $decadas = $this->modelDecada->getdecadas();
        if ($camiseta) {
            $this->view->ShowCamiseta($camiseta, $decadas);
        } else {
            echo ('404 - Not Found: El equipo seleccionado no existe.');
        }
    }
    public function ShowCamisetasByDecada($id)
    {

        $camisetas = $this->model->getCamisetasByDecada($id);
        $decada=$this->model->getDecadaById($id);
        if ($camisetas) {
            $this->view->ShowCamisetasByDecada($camisetas,$decada);
        } else {
            echo ('404 - Not Found: El equipo seleccionado no existe.');
        }
    }
    public function addCamiseta()
    {
    
        if (empty($_POST['nombreCamiseta']) || empty($_POST['categoriaCamiseta']) || empty($_POST['tipoCamiseta']) || empty($_POST['idCamiseta']) || empty($_POST['imagen'])) {
            echo 'error';
            die();
        }
        $this->model->addCamiseta();
        header('Location: ' . BASE_URL);
    }
    public function deleteCamisetaById($id)
    {
    
     
      if ($id !== null) {
            $result = $this->model->deleteCamisetaById($id);
            if ($result) {
                header('Location: ' . BASE_URL);
        
            } else {
                echo " failed.";
            }
        }
    }

    public function editCamisetaById($id){

        if (empty($_POST['nombreCamiseta']) || empty($_POST['categoriaCamiseta']) || empty($_POST['tipoCamiseta']) || empty($_POST['idCamiseta']) || empty($_POST['imagen'])) {
            echo 'error';
            die();
        }
        $this->model->editCamisetaById($id);
        header('Location: ' . BASE_URL);
      
}

}