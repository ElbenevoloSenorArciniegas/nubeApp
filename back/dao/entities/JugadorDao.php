<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Y pensar que Anarchy está hecho en código espagueti...  \\

include_once realpath('../../dao/interfaz/IJugadorDao.php');
include_once realpath('../../dto/Jugador.php');

class JugadorDao implements IJugadorDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Jugador en la base de datos.
     * @param jugador objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($jugador){
      $id=$jugador->getId();
$nombre=$jugador->getNombre();
$correo=$jugador->getCorreo();
$genero=$jugador->getGenero();
$edad=$jugador->getEdad();
$ocupacion=$jugador->getOcupacion();

      try {
          $sql= "INSERT INTO `jugador`( `id`, `nombre`, `correo`, `genero`, `edad`, `Ocupacion`)"
          ."VALUES ('$id','$nombre','$correo','$genero','$edad','$ocupacion')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Jugador en la base de datos.
     * @param jugador objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($jugador){
      $id=$jugador->getId();

      try {
          $sql= "SELECT `id`, `nombre`, `correo`, `genero`, `edad`, `Ocupacion`"
          ."FROM `jugador`"
          ."WHERE `id`='$id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $jugador->setId($data[$i]['id']);
          $jugador->setNombre($data[$i]['nombre']);
          $jugador->setCorreo($data[$i]['correo']);
          $jugador->setGenero($data[$i]['genero']);
          $jugador->setEdad($data[$i]['edad']);
          $jugador->setOcupacion($data[$i]['Ocupacion']);

          }
      return $jugador;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Jugador en la base de datos.
     * @param jugador objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($jugador){
      $id=$jugador->getId();
$nombre=$jugador->getNombre();
$correo=$jugador->getCorreo();
$genero=$jugador->getGenero();
$edad=$jugador->getEdad();
$ocupacion=$jugador->getOcupacion();

      try {
          $sql= "UPDATE `jugador` SET`id`='$id' ,`nombre`='$nombre' ,`correo`='$correo' ,`genero`='$genero' ,`edad`='$edad' ,`Ocupacion`='$ocupacion' WHERE `id`='$id' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Jugador en la base de datos.
     * @param jugador objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($jugador){
      $id=$jugador->getId();

      try {
          $sql ="DELETE FROM `jugador` WHERE `id`='$id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Jugador en la base de datos.
     * @return ArrayList<Jugador> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id`, `nombre`, `correo`, `genero`, `edad`, `Ocupacion`"
          ."FROM `jugador`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $jugador= new Jugador();
          $jugador->setId($data[$i]['id']);
          $jugador->setNombre($data[$i]['nombre']);
          $jugador->setCorreo($data[$i]['correo']);
          $jugador->setGenero($data[$i]['genero']);
          $jugador->setEdad($data[$i]['edad']);
          $jugador->setOcupacion($data[$i]['Ocupacion']);

          array_push($lista,$jugador);
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