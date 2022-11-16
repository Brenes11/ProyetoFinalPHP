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

    public function insertarRuta(Ruta $ru){
        $sql = "insert into ruta values(null, '".$ru->getDesde()."','".$ru->getHasta()."','".$ru->getFecha()."', ".$ru->getIdMotorista().", 1, ".$ru->getIdCliente().", ".$ru->getCarga().");";

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

    public function getClientesSelect(){
        $sql = "select id_cliente, nombre from cliente;";
        $html = "<option disabled>Seleccione...</option>";
        try {
            $this->conectar();
            $res = $this->con->query($sql);
            
            while ($fila = mysqli_fetch_assoc($res)) {
            $html .= "<option value='" . $fila["id_cliente"] . "'>" . $fila["nombre"] . "</option>";
            }
            $res->close();
            $this->desconectar();
            return $html;
            
        } catch (Exception $e) {
            return $e;
        }
    }

    public function getRutas(){
        $sql = "select DISTINCT (r.id_ruta), r.desde, r.hasta, r.carga, r.fecha, c.nombre as 'nombreCliente',  m.nombre as 'nombreMoto', m.apellido as 'apellidoMoto' , m.id_vehiculo from ruta r ";
        $sql .= "inner join cliente c on r.id_cliente = c.id_cliente ";
        $sql .= "inner join motorista m on r.id_motorista = m.id_motorista ";
        $sql .= "group by r.id_ruta;";
        
        $this->conectar();
        $html = "<table class = 'table table-hover table-sm' id='tabla'><thead> <th>Codigo ruta</th> <th>Desde</th> <th>Hasta</th> <th>carga</th> <th>Fecha de creacion</th> <th>Cliente</th> <th>Motorista asignado</th> <th>acciones</th> </thead> <tbody>";

        try {
            $res =  $this->con->query($sql);
            while ($fila = mysqli_fetch_assoc($res)) {

                $html .= "<td>" . $fila["id_ruta"] . "</td>";
                $html .= "<td>" . $fila["desde"] . "</td>";
                $html .= "<td>" . $fila["hasta"] . "</td>";
                $html .= "<td>" . $fila["carga"] . "</td>";
                $html .= "<td>" . $fila["fecha"] . "</td>";
                $html .= "<td>" . $fila["nombreCliente"] . "</td>";
                $html .= "<td>" . $fila["nombreMoto"] . "</td>";
                //$html .= "<td>" . $fila["placa"] . "</td>";
                $html .= "<td> <a class=\"badge bg-danger changeSelected\" onClick=\" eliminar('".$fila["id_vehiculo"]."')\">finalizar pedido</a></td>";
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