<?php 
require_once 'config.php';
require_once 'cliente.php';

class DaoCliente{
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

    public function insertarCliente(Clientes $mo){
        $sql = "insert into cliente values(null, '".$mo->getNombre()."', '".$mo->getApellido()."', '".$mo->getNit()."', '".$mo->getDui()."');";

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

    public function getCliente(){
        $sql = "select * from cliente";
        
        $this->conectar();
        $html = "<table class = 'table table-hover table-sm' id='tabla'><thead> <th>Codigo</th> <th>Nombre</th> <th>Apellido</th> <th>NIT</th> <th>DUI</th> </thead> <tbody>";

        try {
            $res =  $this->con->query($sql);
            while ($fila = mysqli_fetch_assoc($res)) {

                $html .= "<td>" . $fila["id_cliente"] . "</td>";
                $html .= "<td>" . $fila["nombre"] . "</td>";
                $html .= "<td>" . $fila["apellido"] . "</td>";
                $html .= "<td>" . $fila["nit"] . "</td>";
                $html .= "<td>" . $fila["dui"] . "</td>";
                $html .= "<td> <a class=\"badge bg-danger changeSelected\" onClick=\" eliminar('".$fila["id_cliente"]."')\">eliminar</a></td>";
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

    public function eliminarCliente($codigo){
        $this->conectar();
         $pstm = $this->con->prepare("delete from cliente where id_cliente=?");
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

     

}

?>