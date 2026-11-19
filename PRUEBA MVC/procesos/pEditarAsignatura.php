<?php
//Muestra el formulario para editar una asignatura
include '../controladores/cAsignaturas.php';
$controlador = new cAsignaturas();
$datos = $controlador->editar();
include $controlador->vista;
?>