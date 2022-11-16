<?php 
require_once '../model/usuario.php';
require_once '../model/DaoUsuario.php';

$respuesta = null;
$data = array();

$dao = new DaoUsuario();

if($_POST){
    if(isset($_POST["key"])){
        $key = $_POST["key"];
        $usuario = new Usuarios();
        switch ($key) {
            case 'get':
                $respuesta = $dao->getUsuarios();
                break;
            case 'selectCategoria':
                $respuesta = $dao->getVehiculos();
                break;
            case 'eliminar':
                $codigo = $_POST["codigo"];
                $respuesta = $dao->eliminarUsuario($codigo);
                break;
            case 'insertar':
                parse_str($_POST["data"], $data);
                $usuario->setUsuario($data["txtUsername"]);
                $usuario->setPass($data["txtPassword"]);
                $usuario->setNivel($data["txtNivel"]);
                $respuesta = $dao->insertarUsuario($usuario);

                break;
            default:
                # code...
                break;
        }
    }
}

echo $respuesta;
?>