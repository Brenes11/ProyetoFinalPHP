<?php 
require_once 'config.php';
require_once 'usuario.php';

class DaoUsuario{
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

    public function insertarUsuario(Usuarios $mo){
        $sql = "insert into usuarios values(null, '".$mo->getUsuario()."', '".$mo->getPass()."', '".$mo->getNivel()."');";

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

    public function getUsuarios(){
        $sql = "select * from usuarios";
        
        $this->conectar();
        $html = "<table class = 'table table-hover table-sm' id='tabla'><thead> <th>Codigo</th> <th>Username</th> <th>Password</th> <th>Nivel</th> </thead> <tbody>";

        try {
            $res =  $this->con->query($sql);
            while ($fila = mysqli_fetch_assoc($res)) {

                $html .= "<td>" . $fila["id_user"] . "</td>";
                $html .= "<td>" . $fila["usuario"] . "</td>";
                $html .= "<td>" . $fila["pass"] . "</td>";
                $html .= "<td>" . $fila["nivel"] . "</td>";
                $html .= "<td> <a class=\"badge bg-danger changeSelected\" onClick=\" eliminar('".$fila["id_user"]."')\">eliminar</a></td>";
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

    public function eliminarUsuario($codigo){
        $this->conectar();
         $pstm = $this->con->prepare("delete from usuarios where id_user=?");
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