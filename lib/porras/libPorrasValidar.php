<?php
require_once("cPorra.php");

// Carga porras con el nick proporcionado
$objporra = new cPorra();
if (!isset($_GET["id"])) { die; }
$objporra->ValidarPorra($_GET["id"]);

if ($objporra->total_registros > 0) {
    echo "no";
} else {
    echo "si";
}
?>