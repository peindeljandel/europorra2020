<?php
require_once("cSeleccion.php");

// Carga de las selecciones
$objseleccion = new cSeleccion();
$consulta = $objseleccion->CargarSelecciones();

// Presentacion de la cabecera de la tabla
// cabecera
echo "<h1>LISTADO DE SELECCIONES</h1>";

// Presentacion de los registros encontrados
if ($objseleccion->total_registros > 0) {
    // tabla con registros
    echo "<table class='formatHTML5'>";
    echo "<thead><tr><th class='cab1'>Id</th><th class='cab2'>Descripcion</th><th class='cab3'>Icono</th><th class='cab2'>Grupo</th></tr></thead>";
    echo "<body>";
    while ($row = mysqli_fetch_array($consulta)) {
        echo "<tr>";
        echo "<td class='cab1'>" . $row['Id'] . "</td>";
        echo "<td class='cab2'>" . $row['Descripcion'] . "</td>";
        echo "<td class='cab3'><img src='style/images/banderas/" . $row['Icono'] . "' class='icono_bandera' title='" . $row['Descripcion'] . "' /></td>";
        echo "<td class='cab3'>" . $row['Grupo'] . "</td>";
        echo "</tr>";
    }
    echo "</body>";
    echo "<tfoot><tr><td colspan='8'>";
    echo "</td></tr></tfoot>";
    echo "</table>";

    echo "<div class='separador' > </div>";
}
else
{
    echo "<p class='resaltar'>No existen datos para esta consulta</p>";
}
?>