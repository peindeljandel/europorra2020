<?php
require_once("cPorra.php");

$objporra = new cPorra();
$consulta = $objporra->CargarPorras();

// Presentacion de los registros encontrados
if ($objporra->total_registros > 0) {
    echo "<br/>";
    echo "Seleccionar porra:";
    echo "<select name='porra_existente' size='5' id='lista_porra_existente' onchange='obtenerIdPorra(this)'>";
    while ($row = mysqli_fetch_array($consulta)) {
        echo "<option value=" . $row['Id'] . ">" . $row['Descripcion'] . "</option>";
    }
    echo "</select>";
    echo "<div id='div_res_porra_existente'></div>";
}
else
{
    echo "<p class='resaltar'>No existe ninguna porra creada</p>";
}
?>