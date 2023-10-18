<?php
class UserModel{
private $db;

function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=db_camisetas;charset=utf8', 'root', '');
}
public function getUserByName($usuario){
    $query = $this->db->prepare('SELECT * FROM usuarios WHERE nombre_usuario = ?');
    $query->execute([$usuario]);
    $usuario = $query->fetchAll(PDO::FETCH_OBJ);
    return $usuario;
}
}