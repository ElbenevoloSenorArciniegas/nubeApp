<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Yo tengo un sueño. El sueño de que mis hijos vivan en un mundo con un único lenguaje de programación.  \\

require_once realpath('../../facade/GlobalController.php');
require_once realpath('../../dao/interfaz/IFactoryDao.php');
require_once realpath('../../dto/Juegojugador.php');
require_once realpath('../../dao/interfaz/IJuegojugadorDao.php');
require_once realpath('../../dto/Juego.php');
require_once realpath('../../dto/Jugador.php');

class JuegojugadorFacade {

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
   * Crea un objeto Juegojugador a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idjuego
   * @param idjugador
   */
  public static function insert( $idjuego,  $idjugador){
      $juegojugador = new Juegojugador();
      $juegojugador->setIdjuego($idjuego); 
      $juegojugador->setIdjugador($idjugador); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $juegojugadorDao =$FactoryDao->getjuegojugadorDao(self::getDataBaseDefault());
     $rtn = $juegojugadorDao->insert($juegojugador);
     $juegojugadorDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Juegojugador de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idjuego
   * @param idjugador
   * @return El objeto en base de datos o Null
   */
  public static function select($idjuego, $idjugador){
      $juegojugador = new Juegojugador();
      $juegojugador->setIdjuego($idjuego); 
      $juegojugador->setIdjugador($idjugador); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $juegojugadorDao =$FactoryDao->getjuegojugadorDao(self::getDataBaseDefault());
     $result = $juegojugadorDao->select($juegojugador);
     $juegojugadorDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Juegojugador  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idjuego
   * @param idjugador
   */
  public static function update($idjuego, $idjugador){
      $juegojugador = self::select($idjuego, $idjugador);

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $juegojugadorDao =$FactoryDao->getjuegojugadorDao(self::getDataBaseDefault());
     $juegojugadorDao->update($juegojugador);
     $juegojugadorDao->close();
  }

  /**
   * Elimina un objeto Juegojugador de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idjuego
   * @param idjugador
   */
  public static function delete($idjuego, $idjugador){
      $juegojugador = new Juegojugador();
      $juegojugador->setIdjuego($idjuego); 
      $juegojugador->setIdjugador($idjugador); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $juegojugadorDao =$FactoryDao->getjuegojugadorDao(self::getDataBaseDefault());
     $juegojugadorDao->delete($juegojugador);
     $juegojugadorDao->close();
  }

  /**
   * Lista todos los objetos Juegojugador de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Juegojugador en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $juegojugadorDao =$FactoryDao->getjuegojugadorDao(self::getDataBaseDefault());
     $result = $juegojugadorDao->listAll();
     $juegojugadorDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Juegojugador de la base de datos a partir de idjuego.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idjuego
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByIdjuego($idjuego){
      $juegojugador = new Juegojugador();
      $juegojugador->setIdjuego($idjuego); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $juegojugadorDao =$FactoryDao->getjuegojugadorDao(self::getDataBaseDefault());
     $result = $juegojugadorDao->listByIdjuego($juegojugador);
     $juegojugadorDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Juegojugador de la base de datos a partir de idjugador.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idjugador
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByIdjugador($idjugador){
      $juegojugador = new Juegojugador();
      $juegojugador->setIdjugador($idjugador); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $juegojugadorDao =$FactoryDao->getjuegojugadorDao(self::getDataBaseDefault());
     $result = $juegojugadorDao->listByIdjugador($juegojugador);
     $juegojugadorDao->close();
     return $result;
  }


}
//That´s all folks!