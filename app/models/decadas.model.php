<?php

class DecadasModel{
    private $db;

function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=db_camisetas;charset=utf8', 'root', '');
}


function getdecadas(){
    $query = $this->db->prepare('SELECT * FROM decadas');
    $query->execute();

    $decadas = $query->fetchAll(PDO::FETCH_OBJ);
    return $decadas;
}
}