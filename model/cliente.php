<?php
require_once 'config.php';

class Clientes
{
    private $id_cliente;
    private $nombre;
    private $apellido;
    private $nit;
    private $dui;

    public function getId_cliente(){
		return $this->id_cliente;
	}

	public function setId_cliente($id_cliente){
		$this->id_cliente = $id_cliente;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getApellido(){
		return $this->apellido;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}

	public function getNit(){
		return $this->nit;
	}

	public function setNit($nit){
		$this->nit = $nit;
	}

	public function getDui(){
		return $this->dui;
	}

	public function setDui($dui){
		$this->dui = $dui;
	}
}
?>