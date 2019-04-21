<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Le he dedicado más tiempo a las frases que al software interno  \\
include_once realpath('../../facade/JuegoFacade.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$Tipo_id = $_POST['tipo'];
$tipo= new Tipo();
$tipo->setId($Tipo_id);
JuegoFacade::insert($id, $nombre, $descripcion, $tipo);
echo "true";

//That´s all folks!