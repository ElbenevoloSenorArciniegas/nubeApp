<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Cansado de escribir bugs? tranquilo, los escribimos por ti  \\
include_once realpath('../../facade/JugadorFacade.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$genero = $_POST['genero'];
$edad = $_POST['edad'];
$Ocupacion = $_POST['Ocupacion'];
JugadorFacade::insert($id, $nombre, $correo, $genero, $edad, $Ocupacion);
echo "true";

//That´s all folks!