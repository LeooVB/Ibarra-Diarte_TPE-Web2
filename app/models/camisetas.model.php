<?php

class CamisetasModel{
    private $db;

function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=db_camisetas;charset=utf8', 'root', '');
}


function getcamisetas(){
    $query = $this->db->prepare('SELECT * FROM camisetas JOIN decadas ON camisetas.id_decada=decadas.id_decada');
    $query->execute();

    $camisetas = $query->fetchAll(PDO::FETCH_OBJ);
    return $camisetas;
}
function getCamisetaById($id){
    $query = $this->db->prepare('SELECT * FROM camisetas JOIN decadas ON camisetas.id_decada=decadas.id_decada WHERE camisetas.id=?');
    $query->execute([$id]);

    $camiseta = $query->fetchAll(PDO::FETCH_OBJ);
    return $camiseta;
}
function getCamisetasByDecada($decada){
    $query = $this->db->prepare('SELECT * FROM camisetas JOIN decadas ON camisetas.id_decada=decadas.id_decada WHERE camisetas.id_decada=?');
    $query->execute([$decada]);

    $camisetas = $query->fetchAll(PDO::FETCH_OBJ);
    return $camisetas;
}
}