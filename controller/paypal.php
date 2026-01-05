<?php
    //TODO: se incluyen los archivos necesarios
    require_once("../config/conexion.php");
    require_once("../models/Paypal.php");

    $paypal = new Paypal();

    switch($_GET["op"]){
        // TODO : Si la opcion es listar 
        case "pagar":
            // $datos = $paypal->get_paypal();
            break;
    }
?>