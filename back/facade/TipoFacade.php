<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Has encontrado la frase #1024 ¡Felicidades! Ahora tu proyecto funcionará a la primera  \\

require_once realpath('../../facade/GlobalController.php');
require_once realpath('../../dao/interfaz/IFactoryDao.php');
require_once realpath('../../dto/Tipo.php');
require_once realpath('../../dao/interfaz/ITipoDao.php');

class TipoFacade {

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
   * Crea un objeto Tipo a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param descripcion
   */
  public static function insert( $id,  $descripcion){
      $tipo = new Tipo();
      $tipo->setId($id); 
      $tipo->setDescripcion($descripcion); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tipoDao =$FactoryDao->gettipoDao(self::getDataBaseDefault());
     $rtn = $tipoDao->insert($tipo);
     $tipoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Tipo de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $tipo = new Tipo();
      $tipo->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tipoDao =$FactoryDao->gettipoDao(self::getDataBaseDefault());
     $result = $tipoDao->select($tipo);
     $tipoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Tipo  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param descripcion
   */
  public static function update($id, $descripcion){
      $tipo = self::select($id);
      $tipo->setDescripcion($descripcion); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tipoDao =$FactoryDao->gettipoDao(self::getDataBaseDefault());
     $tipoDao->update($tipo);
     $tipoDao->close();
  }

  /**
   * Elimina un objeto Tipo de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $tipo = new Tipo();
      $tipo->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tipoDao =$FactoryDao->gettipoDao(self::getDataBaseDefault());
     $tipoDao->delete($tipo);
     $tipoDao->close();
  }

  /**
   * Lista todos los objetos Tipo de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Tipo en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tipoDao =$FactoryDao->gettipoDao(self::getDataBaseDefault());
     $result = $tipoDao->listAll();
     $tipoDao->close();
     return $result;
  }


}
//That´s all folks!