<?php
require_once("../bbdd/mySqlManager.php");

class cPorra
{
    var $total_registros = 0;

    function CargarPorras()
    {
        $conn = new mySqlManager();
        $result = '';

        if($conn->Conectar()==true)
        {
            $sql = "select Id, Descripcion from porras order by Descripcion";
            $result = mysqli_query($conn->conex, $sql);
            $this->total_registros = mysqli_num_rows($result);
        }

        return $result;
    }

    function ValidarPorra($porra)
    {
        $conn = new mySqlManager();
        $this->total_registros = 0;

        if($conn->Conectar()==true)
        {
            $sql = "select 1 from porras where Descripcion='".$porra."'";
            $result = mysqli_query($conn->conex, $sql);
            $this->total_registros = mysqli_num_rows($result);
        }
    }
}
?>