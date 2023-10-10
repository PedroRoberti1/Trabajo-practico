<?php
require_once 'repositorio_usuario.php';
require_once 'usuario.php';

class ControladorSesion
{

	protected $usuario = null;

	public function login($nombre_usuario, $clave)
	{

		$r = new RepositorioUsuario();
		$usuario = $r->login($nombre_usuario, $clave);

		if ($usuario === false) {
			//fallo el login
			return [false, "usuario o clave incorrecta"];
		} else {
			//login correcto se ingresa al sistema
			session_start();
			$_SESSION['usuario'] = serialize($usuario);
			return [true, "Ingreso correcto"];
		}
	}
}
