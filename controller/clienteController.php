<?php 
require_once '../model/cliente.php';
require_once '../model/DaoCliente.php';

$respuesta = null;
$data = array();

$dao = new DaoCliente();

if($_POST){
    if(isset($_POST["key"])){
        $key = $_POST["key"];
        $cliente = new Clientes();
        switch ($key) {
            case 'get':
                $respuesta = $dao->getCliente();
                break;
            case 'selectCategoria':
                $respuesta = $dao->getVehiculos();
                break;
            case 'eliminar':
                $codigo = $_POST["codigo"];
                $respuesta = $dao->eliminarCliente($codigo);
                break;
            case 'insertar':
                parse_str($_POST["data"], $data);
                $cliente->setNombre($data["txtnombre"]);
                $cliente->setApellido($data["txtapellido"]);
                $cliente->setNit($data["txtnit"]);
                $cliente->setDui($data["txtdui"]);
                $respuesta = $dao->insertarCliente($cliente);

                break;
            default:
                # code...
                break;
        }
    }
}

echo $respuesta;
?>