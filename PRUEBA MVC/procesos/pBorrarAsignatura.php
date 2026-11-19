<?php
//Borra una asignatura y muestra el listado
require_once '../controladores/cAsignaturas.php';
$controlador = new cAsignaturas();
$datos = $controlador->borrar();
require_once $controlador->vista;
?>