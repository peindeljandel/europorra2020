<?php
session_start();

require_once("constantes.php");

class mySqlManager
{
    var $conex;

    function Conectar()
    {
        $conn = mysqli_connect(cte_server_local,cte_user_local,cte_pass_local,cte_base_local);
        if (mysqli_connect_errno($conn))
        {
            echo "No pudo conectarse a la base de datos: " . mysqli_connect_error();
        }

        mysqli_query($conn, "SET NAMES 'utf8'");

        $this->conex=$conn;

        return true;
    }
}
?>