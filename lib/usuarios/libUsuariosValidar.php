<?php
require_once("cUsuario.php");

// Carga usuarios con el nick proporcionado
$objusuario = new cUsuario();
if (!isset($_GET["id"])) { die; }
$objusuario->ValidarUsuario($_GET["id"]);

if ($objusuario->total_registros > 0) {
    echo "no";
} else {
    echo "si";
}
?>