<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    El código es tuyo, modifícalo como quieras  \\

require_once realpath('../../facade/GlobalController.php');
require_once realpath('../../dao/interfaz/IFactoryDao.php');
require_once realpath('../../dto/Jugador.php');
require_once realpath('../../dao/interfaz/IJugadorDao.php');

class JugadorFacade {

  /**
   * Para su comodidad, defina aquí el gestor de conexión predilecto para esta entidad
   * @return idGestor Devuelve el identificador del gestor de conexión
   */
  private static function getGestorDefault(){
      return DEFAULT_GESTOR;
  }
  /**
   * Para su comodidad, defina aquí el nombre de base de datos predilecto para esta entidad
   * @return dbName Devuelve el nombre de la base de datos a emplear
   */
  private static function getDataBaseDefault(){
      return DEFAULT_DBNAME;
  }
  /**
   * Crea un objeto Jugador a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param nombre
   * @param correo
   * @param genero
   * @param edad
   * @param ocupacion
   */
  public static function insert( $id,  $nombre,  $correo,  $genero,  $edad,  $ocupacion){
      $jugador = new Jugador();
      $jugador->setId($id); 
      $jugador->setNombre($nombre); 
      $jugador->setCorreo($correo); 
      $jugador->setGenero($genero); 
      $jugador->setEdad($edad); 
      $jugador->setOcupacion($ocupacion); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $jugadorDao =$FactoryDao->getjugadorDao(self::getDataBaseDefault());
     $rtn = $jugadorDao->insert($jugador);
     $jugadorDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Jugador de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $jugador = new Jugador();
      $jugador->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $jugadorDao =$FactoryDao->getjugadorDao(self::getDataBaseDefault());
     $result = $jugadorDao->select($jugador);
     $jugadorDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Jugador  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param nombre
   * @param correo
   * @param genero
   * @param edad
   * @param ocupacion
   */
  public static function update($id, $nombre, $correo, $genero, $edad, $ocupacion){
      $jugador = self::select($id);
      $jugador->setNombre($nombre); 
      $jugador->setCorreo($correo); 
      $jugador->setGenero($genero); 
      $jugador->setEdad($edad); 
      $jugador->setOcupacion($ocupacion); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $jugadorDao =$FactoryDao->getjugadorDao(self::getDataBaseDefault());
     $jugadorDao->update($jugador);
     $jugadorDao->close();
  }

  /**
   * Elimina un objeto Jugador de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $jugador = new Jugador();
      $jugador->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $jugadorDao =$FactoryDao->getjugadorDao(self::getDataBaseDefault());
     $jugadorDao->delete($jugador);
     $jugadorDao->close();
  }

  /**
   * Lista todos los objetos Jugador de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Jugador en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $jugadorDao =$FactoryDao->getjugadorDao(self::getDataBaseDefault());
     $result = $jugadorDao->listAll();
     $jugadorDao->close();
     return $result;
  }


}
//That´s all folks!