<?php

require_once './app/models/productos.model.php';
require_once './app/views/productos.view.php';

class productosController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new productosModel();
        $this->view = new productosView();
    }

    public function showProductos(){
        $productos = $this->model->getProductos();
        $this->view->showProductos($productos);
    }
}