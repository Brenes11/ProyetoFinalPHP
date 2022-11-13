<?php
include_once '../model/DaoUser.php';
$dao = new DaoUser();
$respuesta = 1;
echo "<script>console.log(res: ".$$respuesta.")</script>";
if ($_POST) {

    $respuesta = $dao->getUsuarios($_POST["txtUser"], $_POST["txtPass"]);
    if ($respuesta > 0) {
        header("location: ../view/dashboard.php", true, 301);
    } else {
        header("location: ../view/index.php", true, 301);
    }
}
