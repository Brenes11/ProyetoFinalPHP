<?php
require_once 'config.php';
class Ruta{
    private $idRuta;
    private $desde;
    private $hasta;
    private $fecha;
    private $idMotorista;
    private $idDestino;
    private $idCliente;
    private $carga;

    public function getIdRuta(){
		return $this->idRuta;
	}

	public function setIdRuta($idRuta){
		$this->idRuta = $idRuta;
	}

	public function getDesde(){
		return $this->desde;
	}

	public function setDesde($desde){
		$this->desde = $desde;
	}

	public function getHasta(){
		return $this->hasta;
	}

	public function setHasta($hasta){
		$this->hasta = $hasta;
	}

	public function getFecha(){
		return $this->fecha;
	}

	public function setFecha($fecha){
		$this->fecha = $fecha;
	}

	public function getIdMotorista(){
		return $this->idMotorista;
	}

	public function setIdMotorista($idMotorista){
		$this->idMotorista = $idMotorista;
	}

	public function getIdDestino(){
		return $this->idDestino;
	}

	public function setIdDestino($idDestino){
		$this->idDestino = $idDestino;
	}

	public function getIdCliente(){
		return $this->idCliente;
	}

	public function setIdCliente($idCliente){
		$this->idCliente = $idCliente;
	}

	public function getCarga(){
		return $this->carga;
	}

	public function setCarga($carga){
		$this->carga = $carga;
	}
}
?>