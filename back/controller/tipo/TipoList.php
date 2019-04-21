<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No hay de qué so no más de papa  \\
include_once realpath('../../facade/TipoFacade.php');

$list=TipoFacade::listAll();
$rta="";
foreach ($list as $obj => $Tipo) {	
	$rta.="{
 	    \"id\":\"{$Tipo->getid()}\",
	    \"descripcion\":\"{$Tipo->getdescripcion()}\"
	},";
}

if($rta!=""){
	$rta = substr($rta, 0, -1);
	$msg="{\"msg\":\"exito\"}";
}else{
	$msg="{\"msg\":\"MANEJO DE EXCEPCIONES AQUÍ\"}";
	$rta="{\"result\":\"No se encontraron registros.\"}";	
}
echo "[{$msg},{$rta}]";

//That´s all folks!