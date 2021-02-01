<?php 

require_once "../dbConnect.php";
require_once "../metodos.php";


$nombre = $_POST['inpRegNombre'];
$cedula = $_POST['inpRegCedula'];
$correo = $_POST['inpRegEmail'];
$telefon = $_POST['inpRegTelefono'];
$ciudad = $_POST['inpRegCiudad'];
$clave = $_POST['inpRegPassword'];

$data = array(
    $cedula, $nombre,$correo,$telefon,$ciudad,$clave
);

$obj= new metodos();
if ($obj -> insertarDatos($data)==1) {
    header("location: ../index.php");
}else{
    echo "f";
}


?>