<?php
require_once 'model.php';
class UserModel extends Model{
protected $db;

public function getUserByName($usuario){
    $query = $this->db->prepare('SELECT * FROM usuarios WHERE nombre_usuario = ?');
    $query->execute([$usuario]);
    $usuario = $query->fetch(PDO::FETCH_OBJ);
    return $usuario;
}
}