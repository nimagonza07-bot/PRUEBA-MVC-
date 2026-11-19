<?php
require_once __DIR__ . '/../modelos/mAsignatura.php';

class cAsignaturas
{
    public $vista;
    public $mensaje = "";

    public function listar()
    {
        $mAsig = new mAsignatura();
        $this->vista = 'vistas/vAsignaturas.php';
        return $mAsig->obtenerTodas();
    }

    public function editar()
    {
        $mAsig = new mAsignatura();
        $datos = null;
        if (isset($_GET['id']))
        {
            $datos = $mAsig->obtenerPorId($_GET['id']);
        }
        $this->vista = 'vistas/vEditarAsignatura.php';
        return $datos;
    }

    public function guardar()
    {
        if (isset($_POST['guardarAsignatura']))
        {
            $mAsig = new mAsignatura();
            $mAsig->insertarAsignatura($_POST['nombre'], $_POST['siglas']);
        }
        return $this->listar();
    }

    public function modificar()
    {
        if (isset($_POST['modificarAsignatura']))
        {
            $mAsig = new mAsignatura();
            $mAsig->modificarAsignatura($_POST['idAsignatura'], $_POST['nombre'], $_POST['siglas']);
        }
        return $this->listar();
    }

    public function borrar()
    {
        if (isset($_GET['id']))
        {
            $mAsig = new mAsignatura();
            $mAsig->borrarAsignatura($_GET['id']);
            $this->mensaje = "Asignatura borrada correctamente";
        }
        return $this->listar();
    }
    public function confirmarBorrar()
    {
        $mAsig = new mAsignatura();
        $datos = null;
        if (isset($_GET['id']))
        {
            $datos = $mAsig->obtenerPorId($_GET['id']);
            $this->mensaje = "¿Seguro que quieres borrar la asignatura " . $datos['nombre'] . "?";
        }
        $this->vista = 'vistas/vConfirmarAsignatura.php';
        return $datos;
    }
    public function alta()
    {
        $this->vista = 'vistas/vAltaAsignatura.html';
        return null;
    }
}
?>