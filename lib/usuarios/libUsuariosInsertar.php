<?php
require_once("cUsuario.php");

// Carga datos
$objusuario = new cUsuario();
$consulta = $objusuario->InsertarUsuario($_POST["nick"], $_POST["pass1"],$_POST["correo"], $_POST["porra_nueva"], $_POST["porra_seleccionada"], $_POST["insertar_nueva_porra"]);
header("Location: alta_usuario.php?ret=$consulta");
?>