<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Eres capaz de hackear mi Facebook?  \\
include_once realpath('../../facade/TipoFacade.php');

$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
TipoFacade::insert($id, $descripcion);
echo "true";

//That´s all folks!