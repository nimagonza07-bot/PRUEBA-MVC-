<?php
//Muestra el listado de asignaturas
require_once '../controladores/cAsignaturas.php';
$controlador = new cAsignaturas();
$datos = $controlador->listar();
require_once $controlador->vista;
?>