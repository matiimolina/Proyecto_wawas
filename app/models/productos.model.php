<?php

require_once 'config.php';

class productosModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host='. MYSQL_HOST .';dbname='. MYSQL_DB .';charset=utf8', MYSQL_USER, MYSQL_PASS);
    }

    public function getProductos(){
        $query=$this->db->prepare('SELECT * FROM productos');
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
}