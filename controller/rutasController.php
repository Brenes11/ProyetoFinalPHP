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
                //$respuesta = $dao->getVehiculo();
                break;
            case 'selectCategoria':
                $respuesta = $dao->getMotoristasByAvailability();
                break;
            case 'eliminar':
                //$codigo = $_POST["codigo"];
                //$respuesta = $dao->eliminarVehiculo($codigo);
                break;
            case 'insertar':
                // parse_str($_POST["data"], $data);
                // $vehiculo->setPlaca($data["txtPlaca"]);
                // $vehiculo->setMarca($data["txtMarca"]);
                // $vehiculo->setModelo($data["txtModelo"]);
                // $vehiculo->setAnioFabricacion($data["txtAnioFabricacion"]);
                // $vehiculo->setKilometraje($data["txtKilometraje"]);
                // $vehiculo->setDisponibilidad($data["txtDisponibilidad"]);
                // $respuesta = $dao->insertarVehiculo($vehiculo);

                break;
            default:
                # code...
                break;
        }
    }
}
echo $respuesta;
?>
