<?php 
require_once '../model/Ruta.php';
require_once '../model/DaoRutas.php';


$respuesta = null;
$data = array();

$dao = new DaoRutas();

if($_POST){
    if(isset($_POST["key"])){
        $key = $_POST["key"];
        $ruta = new Ruta();
        switch ($key) {
            case 'get':
                $respuesta = $dao->getRutas();
                break;
            case 'selectCategoria':
                $respuesta = $dao->getMotoristasByAvailability();
                break;
            case 'selectClientes':
                $respuesta = $dao->getClientesSelect();
                break;
            case 'eliminar':
                //$codigo = $_POST["codigo"];
                //$respuesta = $dao->eliminarVehiculo($codigo);
                break;
            case 'insertar':
                 parse_str($_POST["data"], $data);
                 $ruta->setDesde($data["txtDesde"]);
                 $ruta->setHasta($data["txtHasta"]);
                 $ruta->setFecha($data["txtFecha"]);
                 $ruta->setIdMotorista($data["selectCategoria"]);
                 $ruta->setIdCliente($data["selectClientes"]);
                 $ruta->setCarga($data["txtCarga"]);
                 $respuesta = $dao->insertarRuta($ruta);

                break;
            default:
                # code...
                break;
        }
    }
}
echo $respuesta;
