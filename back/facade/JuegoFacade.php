<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es una frase de prueba ¿Quieres ver la de verdad? ( ͡~ ͜ʖ ͡°)  \\

require_once realpath('../../facade/GlobalController.php');
require_once realpath('../../dao/interfaz/IFactoryDao.php');
require_once realpath('../../dto/Juego.php');
require_once realpath('../../dao/interfaz/IJuegoDao.php');
require_once realpath('../../dto/Tipo.php');

class JuegoFacade {

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
   * Crea un objeto Juego a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param nombre
   * @param descripcion
   * @param tipo
   */
  public static function insert( $id,  $nombre,  $descripcion,  $tipo){
      $juego = new Juego();
      $juego->setId($id); 
      $juego->setNombre($nombre); 
      $juego->setDescripcion($descripcion); 
      $juego->setTipo($tipo); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $juegoDao =$FactoryDao->getjuegoDao(self::getDataBaseDefault());
     $rtn = $juegoDao->insert($juego);
     $juegoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Juego de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $juego = new Juego();
      $juego->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $juegoDao =$FactoryDao->getjuegoDao(self::getDataBaseDefault());
     $result = $juegoDao->select($juego);
     $juegoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Juego  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param nombre
   * @param descripcion
   * @param tipo
   */
  public static function update($id, $nombre, $descripcion, $tipo){
      $juego = self::select($id);
      $juego->setNombre($nombre); 
      $juego->setDescripcion($descripcion); 
      $juego->setTipo($tipo); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $juegoDao =$FactoryDao->getjuegoDao(self::getDataBaseDefault());
     $juegoDao->update($juego);
     $juegoDao->close();
  }

  /**
   * Elimina un objeto Juego de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $juego = new Juego();
      $juego->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $juegoDao =$FactoryDao->getjuegoDao(self::getDataBaseDefault());
     $juegoDao->delete($juego);
     $juegoDao->close();
  }

  /**
   * Lista todos los objetos Juego de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Juego en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $juegoDao =$FactoryDao->getjuegoDao(self::getDataBaseDefault());
     $result = $juegoDao->listAll();
     $juegoDao->close();
     return $result;
  }


}
//That´s all folks!