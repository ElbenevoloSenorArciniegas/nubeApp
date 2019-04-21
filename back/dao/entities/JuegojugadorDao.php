<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Se buscan memeros profesionales. Contacto: El benévolo señor Arciniegas  \\

include_once realpath('../../dao/interfaz/IJuegojugadorDao.php');
include_once realpath('../../dto/Juegojugador.php');
include_once realpath('../../dto/Juego.php');
include_once realpath('../../dto/Jugador.php');

class JuegojugadorDao implements IJuegojugadorDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Juegojugador en la base de datos.
     * @param juegojugador objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($juegojugador){
      $idjuego=$juegojugador->getIdjuego()->getId();
$idjugador=$juegojugador->getIdjugador()->getId();

      try {
          $sql= "INSERT INTO `juegojugador`( `idjuego`, `idjugador`)"
          ."VALUES ('$idjuego','$idjugador')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Juegojugador en la base de datos.
     * @param juegojugador objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($juegojugador){
      $idjuego=$juegojugador->getIdjuego()->getId();
$idjugador=$juegojugador->getIdjugador()->getId();

      try {
          $sql= "SELECT `idjuego`, `idjugador`"
          ."FROM `juegojugador`"
          ."WHERE `idjuego`='$idjuego' AND`idjugador`='$idjugador'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $juego = new Juego();
           $juego->setId($data[$i]['idjuego']);
           $juegojugador->setIdjuego($juego);
           $jugador = new Jugador();
           $jugador->setId($data[$i]['idjugador']);
           $juegojugador->setIdjugador($jugador);

          }
      return $juegojugador;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Juegojugador en la base de datos.
     * @param juegojugador objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($juegojugador){
      $idjuego=$juegojugador->getIdjuego()->getId();
$idjugador=$juegojugador->getIdjugador()->getId();

      try {
          $sql= "UPDATE `juegojugador` SET`idjuego`='$idjuego' ,`idjugador`='$idjugador' WHERE `idjuego`='$idjuego' AND `idjugador`='$idjugador' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Juegojugador en la base de datos.
     * @param juegojugador objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($juegojugador){
      $idjuego=$juegojugador->getIdjuego()->getId();
$idjugador=$juegojugador->getIdjugador()->getId();

      try {
          $sql ="DELETE FROM `juegojugador` WHERE `idjuego`='$idjuego' AND`idjugador`='$idjugador'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Juegojugador en la base de datos.
     * @return ArrayList<Juegojugador> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idjuego`, `idjugador`"
          ."FROM `juegojugador`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $juegojugador= new Juegojugador();
           $juego = new Juego();
           $juego->setId($data[$i]['idjuego']);
           $juegojugador->setIdjuego($juego);
           $jugador = new Jugador();
           $jugador->setId($data[$i]['idjugador']);
           $juegojugador->setIdjugador($jugador);

          array_push($lista,$juegojugador);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Juegojugador en la base de datos.
     * @param juegojugador objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Juegojugador> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByIdjuego($juegojugador){
      $lista = array();
      $idjuego=$juegojugador->getIdjuego()->getId();

      try {
          $sql ="SELECT `idjuego`, `idjugador`"
          ."FROM `juegojugador`"
          ."WHERE `idjuego`='$idjuego'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $juegojugador = new Juegojugador();
           $juego = new Juego();
           $juego->setId($data[$i]['idjuego']);
           $juegojugador->setIdjuego($juego);
           $jugador = new Jugador();
           $jugador->setId($data[$i]['idjugador']);
           $juegojugador->setIdjugador($jugador);

          array_push($lista,$juegojugador);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Juegojugador en la base de datos.
     * @param juegojugador objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Juegojugador> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByIdjugador($juegojugador){
      $lista = array();
      $idjugador=$juegojugador->getIdjugador()->getId();

      try {
          $sql ="SELECT `idjuego`, `idjugador`"
          ."FROM `juegojugador`"
          ."WHERE `idjugador`='$idjugador'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $juegojugador = new Juegojugador();
           $juego = new Juego();
           $juego->setId($data[$i]['idjuego']);
           $juegojugador->setIdjuego($juego);
           $jugador = new Jugador();
           $jugador->setId($data[$i]['idjugador']);
           $juegojugador->setIdjugador($jugador);

          array_push($lista,$juegojugador);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

      public function insertarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $sentencia = null;
          return $this->cn->lastInsertId();
    }
      public function ejecutarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $data = $sentencia->fetchAll();
          $sentencia = null;
          return $data;
    }
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close(){
      $cn=null;
  }
}
//That´s all folks!