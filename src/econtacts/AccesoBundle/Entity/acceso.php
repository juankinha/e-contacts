<?php
namespace econtacts\AccesoBundle\Entity;

class Acceso
{
	// descripción de la tarea
	protected $usuario;

	// fecha en la que debe estar completada
	protected $password;

	public function getUsuario()
	{
		return $this->usuario;
	}
	public function setUsuario($usuario)
	{
		$this->usuario = $usuario;
	}

	public function getPassword()
	{
		return $this->password;
	}
	public function setPassword($password)
	{
		$this->password = $password;
	}
}