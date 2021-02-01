<?php
error_reporting(0);
header ('Content-type: text/html; charset=utf-8');
session_start();
session_name("servirines");

// include 'consultas.php';

// date_default_timezone_set('America/Bogota');
// $consultas = new Consultas();

// if (isset($_POST['accion'])) {
//     $accion = $_POST['accion'];
    
//     if($accion == "envioRegistro"){
//         $msg = "";
//         $nombre = filter_input(INPUT_POST, "inpRegNombre", FILTER_SANITIZE_STRING);
//         $cedula = filter_input(INPUT_POST, "inpRegCedula", FILTER_VALIDATE_FLOAT);
//         $email = filter_input(INPUT_POST, "inpRegEmail", FILTER_VALIDATE_EMAIL);
//         $telefono = filter_input(INPUT_POST, "inpRegTelefono", FILTER_VALIDATE_FLOAT);
//         $ciudad = filter_input(INPUT_POST, "inpRegCiudad", FILTER_SANITIZE_STRING);
//         $pass = filter_input(INPUT_POST, "inpRegPassword", FILTER_SANITIZE_STRING);
        
//         $msg .= ($nombre == "") ? "El nombre que ha ingresado no es valido \n" : "";
//         $msg .= ($email == "") ? "El email que ha ingresado no es valido \n" : "";
//         $msg .= ($telefono == "") ? "El telefono que ha ingresado no es valido \n" : "";

//         if($msg == ""){

//             $resultadoIngresar = $consultas->guardarRegistro($nombre, $cedula, $email, $telefono, $ciudad, $pass);
            
//             if($resultadoIngresar[1]){
//                 print "1__Exito";
//             }
//         }
//         else{
//             print "0__".$msg;
//         }
//     }


// }









?>
    