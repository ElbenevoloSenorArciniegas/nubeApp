<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es una frase no referenciada  \\

include_once realpath('../../dao/entities/JuegoDao.php');
include_once realpath('../../dao/entities/JuegojugadorDao.php');
include_once realpath('../../dao/entities/JugadorDao.php');
include_once realpath('../../dao/entities/TipoDao.php');


interface IFactoryDao {
	
     /**
     * Devuelve una instancia de JuegoDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de JuegoDao
     */
     public function getJuegoDao($dbName);
     /**
     * Devuelve una instancia de JuegojugadorDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de JuegojugadorDao
     */
     public function getJuegojugadorDao($dbName);
     /**
     * Devuelve una instancia de JugadorDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de JugadorDao
     */
     public function getJugadorDao($dbName);
     /**
     * Devuelve una instancia de TipoDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de TipoDao
     */
     public function getTipoDao($dbName);

}
//That´s all folks!