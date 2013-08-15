<?php
namespace econtacts\ContactBundle\Entity;

class Contact
{
	// descripción de la tarea
	protected $email;

	// fecha en la que debe estar completada
	protected $message;

	public function getEmail()
	{
		return $this->email;
	}
	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getMessage()
	{
		return $this->message;
	}
	public function setMessage($message)
	{
		$this->message = $message;
	}
}