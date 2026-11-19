<?php
//Modifica una asignatura y muestra el listado
require_once '../controladores/cAsignaturas.php';
$controlador = new cAsignaturas();
$datos = $controlador->modificar();
require_once $controlador->vista;
?>