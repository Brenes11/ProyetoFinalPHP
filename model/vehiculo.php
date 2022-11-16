<?php
require_once 'config.php';

class Vehiculo{
    private $id_vehiculo;
    private $placa;
    private $marca;
    private $modelo;
    private $anioFabricacion;
    private $kilometraje;
    private $disponibilidad;

    public function getId_vehiculo(){
		return $this->id_vehiculo;
	}

	public function setId_vehiculo($id_vehiculo){
		$this->id_vehiculo = $id_vehiculo;
	}

	public function getPlaca(){
		return $this->placa;
	}

	public function setPlaca($placa){
		$this->placa = $placa;
	}

	public function getMarca(){
		return $this->marca;
	}

	public function setMarca($marca){
		$this->marca = $marca;
	}

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function getAnioFabricacion(){
		return $this->anioFabricacion;
	}

	public function setAnioFabricacion($anioFabricacion){
		$this->anioFabricacion = $anioFabricacion;
	}

	public function getKilometraje(){
		return $this->kilometraje;
	}

	public function setKilometraje($kilometraje){
		$this->kilometraje = $kilometraje;
	}

	public function getDisponibilidad(){
		return $this->disponibilidad;
	}

	public function setDisponibilidad($disponibilidad){
		$this->disponibilidad = $disponibilidad;
	}
    
}