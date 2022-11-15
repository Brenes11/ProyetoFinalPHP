<?php 
require_once '../model/motorista.php';
require_once '../model/DaoMotorista.php';


$respuesta = null;
$data = array();

$dao = new DaoMotoristas();

if($_POST){
    if(isset($_POST["key"])){
        $key = $_POST["key"];
        $motoristas = new Motorista();
        switch ($key) {
            case 'get':
                $respuesta = $dao->getMotoristas();
                break;
            case 'selectCategoria':
                $respuesta = $dao->getVehiculos();
                break;
            case 'eliminar':
                $codigo = $_POST["codigo"];
                $respuesta = $dao->eliminarMotorista($codigo);
                break;
            case 'insertar':
                parse_str($_POST["data"], $data);
                $motoristas->setNombre($data["txtNombre"]);
                $motoristas->setApellido($data["txtApellido"]);
                $motoristas->setNit($data["txtNit"]);
                $motoristas->setDui($data["txtDui"]);
                $motoristas->setIdProveedor($data["selectCategoria"]);
                $respuesta = $dao->insertarMotorista($motoristas);

                break;
            default:
                # code...
                break;
        }
    }
}

echo $respuesta;
?>