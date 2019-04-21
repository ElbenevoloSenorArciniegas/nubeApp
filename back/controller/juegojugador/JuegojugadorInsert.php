<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Cuando la gente cree que está muriendo, te escucha en lugar de esperar su turno para hablar.  \\
include_once realpath('../../facade/JuegojugadorFacade.php');

$Juego_id = $_POST['idjuego'];
$juego= new Juego();
$juego->setId($Juego_id);
$Jugador_id = $_POST['idjugador'];
$jugador= new Jugador();
$jugador->setId($Jugador_id);
JuegojugadorFacade::insert($juego, $jugador);
echo "true";

//That´s all folks!