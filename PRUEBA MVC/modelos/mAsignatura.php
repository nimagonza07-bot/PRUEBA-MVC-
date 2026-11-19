<?php
require_once __DIR__ . '/../configdb.php';

class mAsignatura extends ConfigDB
{
    public function obtenerTodas()
    {
        $sql = "SELECT * FROM asignatura";
        $resultado = $this->conexion->query($sql);
        $datos = array();

        if ($resultado) {
            while ($fila = $resultado->fetch_assoc()) {
                $datos[] = $fila;
            }
        }

        return $datos;
    }

    public function obtenerPorId($idAsignatura)
    {
        $sql = "SELECT * FROM asignatura WHERE idAsignatura = '$idAsignatura'";
        $resultado = $this->conexion->query($sql);
        return $resultado->fetch_assoc();
    }

    public function insertarAsignatura($nombre, $siglas)
    {
        $sql = "INSERT INTO asignatura (nombre, siglas) VALUES ('$nombre', '$siglas')";
        return $this->conexion->query($sql);
    }
    public function modificarAsignatura($idAsignatura, $nombre, $siglas)
    {
        $sql = "UPDATE asignatura SET nombre = '$nombre', siglas = '$siglas' WHERE idAsignatura = '$idAsignatura'";
        return $this->conexion->query($sql);
    }

    public function borrarAsignatura($idAsignatura)
    {
        $sql = "DELETE FROM asignatura WHERE idAsignatura = '$idAsignatura'";
        return $this->conexion->query($sql);
    }
}
?>