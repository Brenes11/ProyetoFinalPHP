<?php 
require_once 'config.php';
require_once 'motorista.php';
class DaoMotoristas{
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

    public function insertarMotorista(Motorista $mo){
        $sql = "insert into motorista values(null, '".$mo->getNombre()."', '".$mo->getApellido()."', '".$mo->getNit()."', '".$mo->getDui()."', '".$mo->getIdProveedor()."');";

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

    public function eliminarMotorista($codigo){
       $this->conectar();
        $pstm = $this->con->prepare("delete from motorista where id_motorista=?");
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

    public function getVehiculos(){
        $sql = "select id_vehiculo, placa from vehiculo";
        $html = "<option disabled>Seleccione...</option>";
        try {
            $this->conectar();
            $res = $this->con->query($sql);
            
            while ($fila = mysqli_fetch_assoc($res)) {
            $html .= "<option value='" . $fila["id_vehiculo"] . "'>" . $fila["placa"] . "</option>";
            }
            $res->close();
            $this->desconectar();
            return $html;
            
        } catch (Exception $e) {
            return $e;
        }
    }
    public function getMotoristas(){
        $sql = "select m.id_motorista, m.nombre, m.apellido, m.nit, m.dui, m.id_vehiculo, v.placa, v.marca from motorista m ";
        $sql .= "inner join vehiculo v on m.id_vehiculo = v.id_vehiculo;";
        
        $this->conectar();
        $html = "<table class = 'table table-hover table-sm' id='tabla'><thead> <th>Codigo</th> <th>Nombre</th> <th>apellido</th> <th>nit</th> <th>dui</th> <th>Codigo vehiculo</th> <th>placa</th> <th>marca</th> <th>acciones</th> </thead> <tbody>";

        try {
            $res =  $this->con->query($sql);
            while ($fila = mysqli_fetch_assoc($res)) {

                $html .= "<td>" . $fila["id_motorista"] . "</td>";
                $html .= "<td>" . $fila["nombre"] . "</td>";
                $html .= "<td>" . $fila["apellido"] . "</td>";
                $html .= "<td>" . $fila["nit"] . "</td>";
                $html .= "<td>" . $fila["dui"] . "</td>";
                $html .= "<td>" . $fila["id_vehiculo"] . "</td>";
                $html .= "<td>" . $fila["placa"] . "</td>";
                $html .= "<td>" . $fila["marca"] . "</td>";
                $html .= "<td> <a class=\"badge bg-danger changeSelected\" onClick=\" eliminar('".$fila["id_motorista"]."')\">eliminar</a></td>";
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
}
?>