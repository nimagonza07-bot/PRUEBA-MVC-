<?php
class ConfigDB
{
    protected $conexion;

    public function __construct()
    {
        $host = "localhost";
        $usuario = "root";
        $password = "";
        $bd = "horario";

        $this->conexion = mysqli_connect($host, $usuario, $password, $bd);
    }
}
?>