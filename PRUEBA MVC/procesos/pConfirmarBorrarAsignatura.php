<?php
//Pide confirmación antes de borrar una asignatura
include '../controladores/cAsignaturas.php';
$controlador = new cAsignaturas();
$datos = $controlador->confirmarBorrar();
include $controlador->vista;
?>