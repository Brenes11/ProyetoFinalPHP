<?php
require_once 'config.php';

class Usuarios
{
    private $id_user;
    private $usuario;
    private $pass;
    private $nivel;

    public function getId_user(){
		return $this->id_user;
	}

	public function setId_user($id_user){
		$this->id_user = $id_user;
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function getPass(){
		return $this->pass;
	}

	public function setPass($pass){
		$this->pass = $pass;
	}

	public function getNivel(){
		return $this->nivel;
	}

	public function setNivel($nivel){
		$this->nivel = $nivel;
	}
   
}