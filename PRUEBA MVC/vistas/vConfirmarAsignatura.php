<?php
$asignatura = $datos;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Confirmar borrado</title>
    <link rel="stylesheet" href="estilos/estilo.css">
</head>
<body>
    <div class="header-bar-centrado">
        <h1 class="titulo-centrado">CONFIRMAR</h1>
    </div>

    <div class="contenedor-formulario">
        <p class="mensaje-confirmar"><?php echo $controlador->mensaje; ?></p>

        <a href="index.php?controlador=cAsignaturas&metodo=borrar&id=<?php echo $asignatura['idAsignatura']; ?>" class="btn-confirmar">SI</a>
        <a href="index.php?controlador=cAsignaturas&metodo=listar"class="btn-confirmar btn-cancelar">CANCELAR</a>
    </div>
</body>
</html>