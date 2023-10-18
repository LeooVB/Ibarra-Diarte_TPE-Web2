<?php
require_once 'model.php';

class CamisetasModel extends Model{
    protected $db;

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
public function addCamiseta() {
    $query = $this->db->prepare('INSERT INTO camisetas (nombre_equipo, categoria_camiseta, tipo_camiseta, id_decada, imagen) VALUES (?, ?, ?, ?, ?)');
    $query->execute([$_POST['nombreCamiseta'], $_POST['categoriaCamiseta'], $_POST['tipoCamiseta'], $_POST['idCamiseta'], $_POST['imagen']]);
}
public function deleteCamisetaById($id){
    $query= $this->db->prepare('DELETE FROM camisetas WHERE camisetas.id = ?');
      $query->execute([$id]);
      return $query;
}
function editCamisetaById($id){

    $query = $this->db->prepare('UPDATE camisetas SET nombre_equipo=?, categoria_camiseta=?, tipo_camiseta=?, id_decada=?, imagen=? WHERE camisetas.id=?');
      $query->execute([$_POST['nombreCamiseta'], $_POST['categoriaCamiseta'], $_POST['tipoCamiseta'], $_POST['idCamiseta'], $_POST['imagen'], $id]);
  }

}