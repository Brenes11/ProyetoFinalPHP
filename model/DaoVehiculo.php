<?php 
require_once 'config.php';
require_once 'vehiculo.php';

class DaoVehiculo{
    private $con;

    private function conectar()
    {
        try {
            $this->con = new mysqli(SERVER1, USER1, CONTRASEÑA1, BD1);
        } catch (Exception $e) {
            echo "<script>console.log('" . $e->getMessage() . "') </script>";
        }
    }

    private function desconectar()
    {
        $this->con->close();
    }

public function getVehiculo(){
    $sql = "select * from vehiculo";
    
    $this->conectar();
    $html = "<table class = 'table table-hover table-sm' id='tabla'><thead> <th>Codigo</th> <th>Placa</th> <th>Marca</th> <th>Modelo</th> <th>Año de fabricacion</th> <th>Kilometraje</th> <th>Disponibilidad</th> </thead> <tbody>";

    try {
        $res =  $this->con->query($sql);
        while ($fila = mysqli_fetch_assoc($res)) {

            $html .= "<td>" . $fila["id_vehiculo"] . "</td>";
            $html .= "<td>" . $fila["placa"] . "</td>";
            $html .= "<td>" . $fila["marca"] . "</td>";
            $html .= "<td>" . $fila["modelo"] . "</td>";
            $html .= "<td>" . $fila["anioFabricacion"] . "</td>";
            $html .= "<td>" . $fila["kilometraje"] . "</td>";
            $html .= "<td>" . $fila["disponibilidad"] . "</td>";
            $html .= "<td> <a class=\"badge bg-danger changeSelected\" onClick=\" eliminar('".$fila["id_vehiculo"]."')\">eliminar</a></td>";
            $html .= "</tr>";
        }
        $html .= "</tbody></table>";
        $res->close();
        $this->desconectar(); 
    } catch (Exception $e) {
        $html =  $e->getMessage();
        return $html;
    }

    return $html;
    
}

public function eliminarVehiculo($codigo){
    $this->conectar();
     $pstm = $this->con->prepare("delete from vehiculo where id_vehiculo=?");
     $pstm->bind_param("i", $codigo);
     if($pstm->execute()){
         $pstm->close();
         $this->desconectar();
         return true;
     }else{
         $pstm->close();
         $this->desconectar();
         return false;
     }

 }

 public function insertarVehiculo(Vehiculo $mo){
    $sql = "insert into vehiculo values(null, '".$mo->getPlaca()."', '".$mo->getMarca()."', '".$mo->getModelo()."' , '".$mo->getAnioFabricacion()."' , '".$mo->getKilometraje()."' , '".$mo->getDisponibilidad()."');";

    try {
        $this->conectar();

        if ($this->con->query($sql)) {
            $this->desconectar();
            return 'Insertado con éxito';
        } else {
            $this->desconectar();
            return 'error al insertar';
        }
    } catch (Exception $e) {
        return 'error';
    }
}



}


?>