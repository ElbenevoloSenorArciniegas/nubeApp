<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Los animales, asombrados, pasaron su mirada del cerdo al hombre, y del hombre al cerdo; y, nuevamente, del cerdo al hombre; pero ya era imposible distinguir quién era uno y quién era otro.  \\


class Juegojugador {

  private $idjuego;
  private $idjugador;

    /**
     * Constructor de Juegojugador
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idjuego
     * @return idjuego
     */
  public function getIdjuego(){
      return $this->idjuego;
  }

    /**
     * Modifica el valor correspondiente a idjuego
     * @param idjuego
     */
  public function setIdjuego($idjuego){
      $this->idjuego = $idjuego;
  }
    /**
     * Devuelve el valor correspondiente a idjugador
     * @return idjugador
     */
  public function getIdjugador(){
      return $this->idjugador;
  }

    /**
     * Modifica el valor correspondiente a idjugador
     * @param idjugador
     */
  public function setIdjugador($idjugador){
      $this->idjugador = $idjugador;
  }


}
//That´s all folks!