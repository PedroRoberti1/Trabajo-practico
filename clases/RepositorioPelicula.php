<?php

require_once 'Usuario.php';
require_once 'Pelicula.php';
require_once '.env.php';

class Repositorio_Pelicula
{

    private static $conexion = null;

    public function __construct()
    {

        if (is_null(self::$conexion)) {
            $credenciales = credenciales();
            self::$conexion = new mysqli(
                $credenciales['servidor'],
                $credenciales['usuario'],
                $credenciales['clave'],
                $credenciales['base_de_datos']
            );
            if (self::$conexion->connect_error) {
                $error = 'Error al conectar:' . self::$conexion->connect_error;
                self::$conexxion = null;
                die($error);
            }
            self::$conexion->set_charset('utf8mb4');
        }
    }


    //creamos la funcion de agregar juegos al crud

    public function getPeliculas()
    {
        $q = "SELECT * FROM peliculas";
        $query = self::$conexion->prepare($q);

        if ($query->execute()) {
            $query->bind_result($id, $titulo, $anio, $genero, $disponibilidad, $resenia);
            $lista_de_peliculas = [];
            while ($query->fetch()) {
                $lista_de_peliculas[] = new Pelicula($id, $titulo, $anio, $genero, $disponibilidad, $resenia);
            }
            return $lista_de_peliculas;
        }
        return false;
    }

    public function agregar(Pelicula $p)

    {

        // Preparamos la query del update
        $q = "INSERT INTO peliculas (titulo, anio, genero, disponibilidad, resenia) VALUES (?, ?, ?, ?, ?)";
        $query = self::$conexion->prepare($q);

        // Obtenemos los nuevos valores desde el objeto:
        $titulo = $p->getTitulo();
        $anio = $p->getAnio();
        $genero = $p->getGenero();
        $disponibilidad = $p->getDisponibilidad();
        $resenia = $p->getResenia();
        

        // Asignamos los valores para reemplazar los "?" en la query
        if (!$query->bind_param("sss", $id, $titulo, $anio, $genero, $disponibilidad, $resenia)) {
            echo "fallo la consulta";
        }

        // Retornamos true si la query tiene éxito, false si fracasa
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
}