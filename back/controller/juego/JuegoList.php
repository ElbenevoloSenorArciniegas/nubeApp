<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La segunda regla de Anarchy es no hablar de Anarchy  \\
include_once realpath('../../facade/JuegoFacade.php');

$list=JuegoFacade::listAll();
$rta="";
foreach ($list as $obj => $Juego) {	
	$rta.="{
 	    \"id\":\"{$Juego->getid()}\",
	    \"nombre\":\"{$Juego->getnombre()}\",
	    \"descripcion\":\"{$Juego->getdescripcion()}\",
	    \"tipo_id\":\"{$Juego->gettipo()->getid()}\"
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