<?php $listaAsignaturas = $datos; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Asignaturas</title>
    <link rel="stylesheet" href="estilos/estilo.css">
</head>
<body>
    <div class="header-bar-horario">
        <div class="titulo-header">
            ASIGNATURAS
        </div>
        <div class="menu-header">
            <a href="index.php?controlador=cCursos&metodo=listar" class="btn-nav">CLASES</a>
            <a href="index.php?controlador=cProfesores&metodo=listar" class="btn-nav">PROFESORES</a>
        </div>
    </div>
    <div class="contenedor-principal-horario">
        <table class="tabla-horario">
            <thead>
                <tr class="fila-cabecera-dias">
                    <th>ASIGNATURA</th>
                    <th>ABREVIATURA</th>
                    <th>EDITAR</th>
                    <th>BORRAR</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($listaAsignaturas)) {
                    foreach ($listaAsignaturas as $asig) {
                        echo '<tr>';
                        echo '<td>' . $asig['nombre'] . '</td>';
                        echo '<td>' . $asig['siglas'] . '</td>';
                        echo '<td><a href="index.php?controlador=cAsignaturas&metodo=editar&id=' . $asig['idAsignatura'] . '" title="Editar"><img src="estilos/lapiz.png" alt="Editar"></a></td>';
                        echo '<td><a href="index.php?controlador=cAsignaturas&metodo=confirmarBorrar&id=' . $asig['idAsignatura'] . '" title="Borrar"><img src="estilos/x.png" alt="Borrar"></a></td>';
                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>

        <div class="contenedor-btn-tramo">
            <a href="index.php?controlador=cAsignaturas&metodo=alta" class="btn-tramo">AÑADIR ASIGNATURA</a>
        </div>
    </div>
</body>
</html>