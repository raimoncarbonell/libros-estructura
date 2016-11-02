<?php

$id=$_GET['id'];//recuperar el valor identificado como "id" que llega a través del método get
require_once "datos/libros.php";// lamada al fichero libros

$libro=$libros[$id]; // recuperamos la pos del array del array de objetos libro indicadas por el id

header('Content-type: application/json; charset=utf-8');
 echo json_encode($libro);//escribir en la salida el json que representa al libro que ocupa la posición "id"
    

   
    
?>
