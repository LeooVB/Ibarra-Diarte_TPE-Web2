<?php
require_once 'model.php';
class DecadasModel extends Model{
    protected $db;

function getdecadas(){
    $query = $this->db->prepare('SELECT * FROM decadas');
    $query->execute();

    $decadas = $query->fetchAll(PDO::FETCH_OBJ);
    return $decadas;
}
public function addDecada() {
    $query = $this->db->prepare('INSERT INTO decadas (numero_decada) VALUES (?)');
    $query->execute([$_POST['decada']]);
    $decadas = $query->fetchAll(PDO::FETCH_OBJ);
    return $this->db->lastInsertId();
}
function editDecadaById($id){

    $query = $this->db->prepare('UPDATE decadas SET numero_decada=? WHERE decadas.id_decada=?');
      $query->execute([$_POST['decada'], $id]);
  }

}