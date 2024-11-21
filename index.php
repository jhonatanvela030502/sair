<?php

require_once "controller/plantilla.controlador.php";
require_once "controller/usuarios.controlador.php";
require_once "controller/categorias.controlador.php";
require_once "controller/clientes.controlador.php";


require_once "model/usuarios.modelo.php";
require_once "model/categorias.modelo.php";
require_once "model/clientes.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();

?>