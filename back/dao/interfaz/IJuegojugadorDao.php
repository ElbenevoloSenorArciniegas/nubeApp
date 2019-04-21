<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Querido programador: Al escribir esto estoy triste. Nuestro presidente ha sido derrocado Y REEMPLAZADO POR EL BENÉVOLO SEÑOR ARCINIEGAS. TODOS AMAMOS A ARCINIEGAS Y A SU GLORIOSO RÉGIMEN. CON AMOR, EL EQUIPO DE ANARCHY  \(x.x)/  \\


interface IJuegojugadorDao {

    /**
     * Guarda un objeto Juegojugador en la base de datos.
     * @param juegojugador objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($juegojugador);
    /**
     * Modifica un objeto Juegojugador en la base de datos.
     * @param juegojugador objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($juegojugador);
    /**
     * Elimina un objeto Juegojugador en la base de datos.
     * @param juegojugador objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($juegojugador);
    /**
     * Busca un objeto Juegojugador en la base de datos.
     * @param juegojugador objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($juegojugador);
    /**
     * Lista todos los objetos Juegojugador en la base de datos.
     * @return Array<Juegojugador> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Juegojugador en la base de datos que coincidan con la llave primaria.
     * @param juegojugador objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Juegojugador> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByIdjuego($juegojugador);
    /**
     * Lista todos los objetos Juegojugador en la base de datos que coincidan con la llave primaria.
     * @param juegojugador objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Juegojugador> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByIdjugador($juegojugador);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!