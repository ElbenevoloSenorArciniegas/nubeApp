<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    They call me Mr. Espagueti  \\


interface IJuegoDao {

    /**
     * Guarda un objeto Juego en la base de datos.
     * @param juego objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($juego);
    /**
     * Modifica un objeto Juego en la base de datos.
     * @param juego objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($juego);
    /**
     * Elimina un objeto Juego en la base de datos.
     * @param juego objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($juego);
    /**
     * Busca un objeto Juego en la base de datos.
     * @param juego objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($juego);
    /**
     * Lista todos los objetos Juego en la base de datos.
     * @return Array<Juego> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!