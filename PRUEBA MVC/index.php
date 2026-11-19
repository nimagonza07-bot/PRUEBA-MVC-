<?php
    include 'configuracion.php';

    if (isset($_GET["controlador"]) && isset($_GET["metodo"]))
    {
        $controlador = $_GET["controlador"];
        $metodo = $_GET["metodo"];
    }
    else
    {
        $controlador = CONTROLADOR_BASE;
        $metodo = METODO_BASE;
    }

    include "controladores/".$controlador.".php";
    $objeto = new $controlador();
    $datos = $objeto->$metodo();
    require_once $objeto->vista;
?>