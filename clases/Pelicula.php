<?php

class Pelicula
{
    protected $id;
    protected $titulo;
    protected $anio;
    protected $genero;
    protected $disponibilidad;
    protected $resenia;


    public function __construct ($titulo, $anio, $genero, $disponibilidad, $resenia, $id=null)
    {
        $this->titulo = $titulo;
        $this->anio = $anio;
        $this->genero = $genero;
        $this->disponibilidad = $disponibilidad;
        $this->resenia = $resenia;
        $this->id = $id;
    }


    public function getTitulo() {
	return $this->titulo;
	}

    public function getAnio() {
	return $this->anio;
	}

    public function getGenero() {
	return $this->genero;
	}

    public function getDisponibilidad() {
	return $this->disponibilidad;
	}

    public function getResenia() {
	return $this->resenia;
	}

    public function getId() {
	return $this->id;
	}
}