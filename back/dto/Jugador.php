<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Era más fácil crear un framework que aprender a usar uno existente  \\


class Jugador {

  private $id;
  private $nombre;
  private $correo;
  private $genero;
  private $edad;
  private $Ocupacion;

    /**
     * Constructor de Jugador
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a id
     * @return id
     */
  public function getId(){
      return $this->id;
  }

    /**
     * Modifica el valor correspondiente a id
     * @param id
     */
  public function setId($id){
      $this->id = $id;
  }
    /**
     * Devuelve el valor correspondiente a nombre
     * @return nombre
     */
  public function getNombre(){
      return $this->nombre;
  }

    /**
     * Modifica el valor correspondiente a nombre
     * @param nombre
     */
  public function setNombre($nombre){
      $this->nombre = $nombre;
  }
    /**
     * Devuelve el valor correspondiente a correo
     * @return correo
     */
  public function getCorreo(){
      return $this->correo;
  }

    /**
     * Modifica el valor correspondiente a correo
     * @param correo
     */
  public function setCorreo($correo){
      $this->correo = $correo;
  }
    /**
     * Devuelve el valor correspondiente a genero
     * @return genero
     */
  public function getGenero(){
      return $this->genero;
  }

    /**
     * Modifica el valor correspondiente a genero
     * @param genero
     */
  public function setGenero($genero){
      $this->genero = $genero;
  }
    /**
     * Devuelve el valor correspondiente a edad
     * @return edad
     */
  public function getEdad(){
      return $this->edad;
  }

    /**
     * Modifica el valor correspondiente a edad
     * @param edad
     */
  public function setEdad($edad){
      $this->edad = $edad;
  }
    /**
     * Devuelve el valor correspondiente a Ocupacion
     * @return Ocupacion
     */
  public function getOcupacion(){
      return $this->Ocupacion;
  }

    /**
     * Modifica el valor correspondiente a Ocupacion
     * @param Ocupacion
     */
  public function setOcupacion($ocupacion){
      $this->Ocupacion = $ocupacion;
  }


}
//That´s all folks!