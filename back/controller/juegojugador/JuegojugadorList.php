<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Recuerda, cuando enciendas la molotov, debes arrojarla  \\
include_once realpath('../../facade/JuegojugadorFacade.php');

$list=JuegojugadorFacade::listAll();
$rta="";
foreach ($list as $obj => $Juegojugador) {	
	$rta.="{
 	    \"idjuego_id\":\"{$Juegojugador->getidjuego()->getid()}\",
	    \"idjugador_id\":\"{$Juegojugador->getidjugador()->getid()}\"
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