<?php
function mostrarcamisetas(){
    //abrir conexion con la db

    $db = new PDO('mysql:host=localhost;dbname=db_camisetas;charset=utf8', 'root', '');

    //enviar consulta

    $query = $db->prepare('SELECT * FROM camisetas');
    $query->execute();


    //obtener datos

    $camisetas = $query->fetchAll(PDO::FETCH_OBJ);
    echo "<ul>";
    foreach($camisetas as $camiseta) {
        echo "<li> $camiseta->nombre_equipo - $camiseta->categoria_camiseta - $camiseta->tipo_camiseta </li>";

    }
    echo "</ul>";



}
echo "<h1> HOLA M,UNDO</h1>";