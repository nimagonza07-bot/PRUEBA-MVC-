<?php $asignatura = $datos; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Asignatura</title>
    <link rel="stylesheet" href="estilos/estilo.css">
</head>
<body>
    <div class="header-bar-centrado">
        <h1 class="titulo-centrado">EDITAR ASIGNATURA</h1>
    </div>

    <div class="contenedor-formulario">
        <form action="index.php?controlador=cAsignaturas&metodo=modificar" method="POST">
            <input type="hidden" name="idAsignatura" value="<?php echo $asignatura['idAsignatura']; ?>">
            <div class="grupo-input">
                <input type="text" name="nombre" value="<?php echo $asignatura['nombre']; ?>" required>
            </div>
            <div class="grupo-input">
                <input type="text" name="siglas" value="<?php echo $asignatura['siglas']; ?>" required>
            </div>
            <input type="submit" name="modificarAsignatura" value="GUARDAR" class="btn-registrar">
        </form>
    </div>
</body>
</html>