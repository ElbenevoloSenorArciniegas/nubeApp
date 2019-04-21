<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Sabías que hay una vida afuera de tu cuarto?  \\

include_once realpath('../../dao/interfaz/IJuegoDao.php');
include_once realpath('../../dto/Juego.php');
include_once realpath('../../dto/Tipo.php');

class JuegoDao implements IJuegoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Juego en la base de datos.
     * @param juego objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($juego){
      $id=$juego->getId();
$nombre=$juego->getNombre();
$descripcion=$juego->getDescripcion();
$tipo=$juego->getTipo()->getId();

      try {
          $sql= "INSERT INTO `juego`( `id`, `nombre`, `descripcion`, `tipo`)"
          ."VALUES ('$id','$nombre','$descripcion','$tipo')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Juego en la base de datos.
     * @param juego objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($juego){
      $id=$juego->getId();

      try {
          $sql= "SELECT `id`, `nombre`, `descripcion`, `tipo`"
          ."FROM `juego`"
          ."WHERE `id`='$id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $juego->setId($data[$i]['id']);
          $juego->setNombre($data[$i]['nombre']);
          $juego->setDescripcion($data[$i]['descripcion']);
           $tipo = new Tipo();
           $tipo->setId($data[$i]['tipo']);
           $juego->setTipo($tipo);

          }
      return $juego;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Juego en la base de datos.
     * @param juego objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($juego){
      $id=$juego->getId();
$nombre=$juego->getNombre();
$descripcion=$juego->getDescripcion();
$tipo=$juego->getTipo()->getId();

      try {
          $sql= "UPDATE `juego` SET`id`='$id' ,`nombre`='$nombre' ,`descripcion`='$descripcion' ,`tipo`='$tipo' WHERE `id`='$id' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Juego en la base de datos.
     * @param juego objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($juego){
      $id=$juego->getId();

      try {
          $sql ="DELETE FROM `juego` WHERE `id`='$id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Juego en la base de datos.
     * @return ArrayList<Juego> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id`, `nombre`, `descripcion`, `tipo`"
          ."FROM `juego`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $juego= new Juego();
          $juego->setId($data[$i]['id']);
          $juego->setNombre($data[$i]['nombre']);
          $juego->setDescripcion($data[$i]['descripcion']);
           $tipo = new Tipo();
           $tipo->setId($data[$i]['tipo']);
           $juego->setTipo($tipo);

          array_push($lista,$juego);
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