<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La gente siempre me pregunta si conozco a Tyler Durden.  \\


interface IJugadorDao {

    /**
     * Guarda un objeto Jugador en la base de datos.
     * @param jugador objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($jugador);
    /**
     * Modifica un objeto Jugador en la base de datos.
     * @param jugador objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($jugador);
    /**
     * Elimina un objeto Jugador en la base de datos.
     * @param jugador objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($jugador);
    /**
     * Busca un objeto Jugador en la base de datos.
     * @param jugador objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($jugador);
    /**
     * Lista todos los objetos Jugador en la base de datos.
     * @return Array<Jugador> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!