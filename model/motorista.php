<?php
require_once 'config.php';

class Motorista
{
    private $idMotorista;
    private $nombre;
    private $apellido;
    private $nit;
    private $dui;
    private $idProveedor;

    public function getIdMotorista()
    {
        return $this->idMotorista;
    }

    public function setIdMotorista($idMotorista)
    {
        $this->idMotorista = $idMotorista;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getNit()
    {
        return $this->nit;
    }

    public function setNit($nit)
    {
        $this->nit = $nit;
    }

    public function getDui()
    {
        return $this->dui;
    }

    public function setDui($dui)
    {
        $this->dui = $dui;
    }

    public function getIdProveedor()
    {
        return $this->idProveedor;
    }

    public function setIdProveedor($idProveedor)
    {
        $this->idProveedor = $idProveedor;
    }
}
