<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Puedes sugerirnos frases nuevas, se nos están acabando ( u.u)  \\
include_once realpath('../../facade/JugadorFacade.php');

$list=JugadorFacade::listAll();
$rta="";
foreach ($list as $obj => $Jugador) {	
	$rta.="{
 	    \"id\":\"{$Jugador->getid()}\",
	    \"nombre\":\"{$Jugador->getnombre()}\",
	    \"correo\":\"{$Jugador->getcorreo()}\",
	    \"genero\":\"{$Jugador->getgenero()}\",
	    \"edad\":\"{$Jugador->getedad()}\",
	    \"Ocupacion\":\"{$Jugador->getOcupacion()}\"
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