<?php 
require_once 'config.php';

class DaoUser{

    private $con; 
    
    private function conectar(){
        try {
            $this->con = new mysqli(SERVER1, USER1,CONTRASEÑA1, BD1);
        } catch (Exception $e) {
            echo "<script>console.log('".$e->getMessage()."') </script>";
        }
    }
    
    private function desconectar(){
        $this->con->close();
    }
    public function getUsuarios($user,$pass){
        $sql = "select id_user, usuario from usuarios where usuario = '$user' and pass = '$pass';";
        $response = 0;
        
        try {
            $this->conectar();
            $res = $this->con->query($sql);
                
                while($fila = mysqli_fetch_assoc($res)){
                    session_start();
                    $_SESSION['user_id'] = $fila["id_usuario"];
                    $response = 1;
                }
            $res->close();
            $this->desconectar();
            return $response;
        } catch (Exception $e) {
            return $e;
        }
        
    }
}

?>