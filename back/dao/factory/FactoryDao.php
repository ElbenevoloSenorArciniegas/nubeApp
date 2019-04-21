<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...Y como plato principal: ¡Código espagueti!  \\

include_once realpath('../../dao/conexion/Conexion.php');
include_once realpath('../../dao/interfaz/IFactoryDao.php');

class FactoryDao implements IFactoryDao{
	
     private $conn;
     public static $NULL_GESTOR = -1;
    public static $MYSQL_FACTORY = 0;
    public static $POSTGRESQL_FACTORY = 1;
    public static $ORACLE_FACTORY = 2;
    public static $DERBY_FACTORY = 3;

     public function __construct($gestor){
        $this->conn=new Conexion($gestor);
     }
     /**
     * Devuelve una instancia de JuegoDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de JuegoDao
     */
     public function getJuegoDao($dbName){
        return new JuegoDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de JuegojugadorDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de JuegojugadorDao
     */
     public function getJuegojugadorDao($dbName){
        return new JuegojugadorDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de JugadorDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de JugadorDao
     */
     public function getJugadorDao($dbName){
        return new JugadorDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de TipoDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de TipoDao
     */
     public function getTipoDao($dbName){
        return new TipoDao($this->conn->obtener($dbName));
    }

}
//That´s all folks!