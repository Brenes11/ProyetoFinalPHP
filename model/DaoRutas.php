<?php 
class DaoRutas{
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

    public function getMotoristasByAvailability(){
        $sql = "select id_motorista, nombre from motorista m inner join vehiculo v on m.id_vehiculo = v.id_vehiculo where v.disponibilidad = 1;";
        $html = "<option disabled>Seleccione...</option>";
        try {
            $this->conectar();
            $res = $this->con->query($sql);
            
            while ($fila = mysqli_fetch_assoc($res)) {
            $html .= "<option value='" . $fila["id_motorista"] . "'>" . $fila["nombre"] . "</option>";
            }
            $res->close();
            $this->desconectar();
            return $html;
            
        } catch (Exception $e) {
            return $e;
        }
    }

}
?>