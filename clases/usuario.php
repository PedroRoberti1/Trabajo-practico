<?php
class Usuario
{
    protected $id;
    protected $nombre_usuario;
    protected $clave;
    protected $nombre;
    protected $apellido;
    protected $email;

    public function __construct($nombre_usuario, $clave, $nombre, $apellido, $email, $id = null)
    {
        $this->nombre_usuario = $nombre_usuario;
        $this->clave = $clave;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->id = $id;
    }

    public function getNombreUsuario()
    {
        return "$this->nombre_usuario";
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setDatos($nombre_usuario, $nombre, $apellido, $email)
    {
        $this->nombre_usuario = $nombre_usuario;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
    }
    public function setClave($clave)
    {
        $this->clave = $clave;
    }
}
