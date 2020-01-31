<?php
require_once("../bbdd/mySqlManager.php");

class cSeleccion
{
    var $total_registros = 0;

    // consulta las selecciones de la BD
    function CargarSelecciones()
    {
        //creamos el objeto $conn a partir de la clase DBManager
        $conn = new mySqlManager();
        $result = '';

        //usamos el metodo conectar para realizar la conexion
        if($conn->Conectar()==true)
        {
            $sql = "select * from Selecciones";
            $result = mysqli_query($conn->conex, $sql);
            $this->total_registros = mysqli_num_rows($result);
        }

        return $result;
    }
}
?>