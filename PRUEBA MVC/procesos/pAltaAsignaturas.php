<?php
//Guarda una asignatura nueva y muestra el listado
require_once '../controladores/cAsignaturas.php';
$controlador = new cAsignaturas();
$datos = $controlador->guardar();
require_once $controlador->vista;
?>