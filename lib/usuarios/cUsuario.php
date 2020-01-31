<?php
require_once("../bbdd/mySqlManager.php");

class cUsuario
{
    var $total_registros = 0;

    function CargarUsuarios()
    {
        $conn = new mySqlManager();
        $result = '';

        if($conn->Conectar()==true)
        {
            $sql = "select * from Usuarios";
            $result = mysqli_query($conn->conex, $sql);
            $this->total_registros = mysqli_num_rows($result);
        }

        return $result;
    }

    function ValidarUsuario($nick)
    {
        //creamos el objeto $conn a partir de la clase DBManager
        $conn = new mySqlManager();
        $this->total_registros = 0;

        //usamos el metodo conectar para realizar la conexion
        if($conn->Conectar()==true)
        {
            $sql = "select * from usuarios where Nick='".$nick."'";
            $result = mysqli_query($conn->conex, $sql);
            $this->total_registros = mysqli_num_rows($result);
        }
    }

    function InsertarUsuario($nick, $pass, $email, $porraNom, $porraSel, $porraNueva)
    {
        $conn = new mySqlManager();
        $result = false;
        $ultimo_id = $porraSel;
        $nuevoRol = 2;

        if($porraNueva == 'true'){
            if($conn->Conectar()==true)
            {
                $sql = "INSERT INTO porras VALUES (null,'".$porraNom."')";
                if(mysqli_query($conn->conex, $sql)){
                    $ultimo_id = mysqli_insert_id($conn->conex);
                    $nuevoRol = 1;
                }
            }
        }

        if($conn->Conectar()==true)
        {
            $sql = "INSERT INTO usuarios VALUES (null,'".$nick."','".$pass."','".$email."',".$nuevoRol.",".$ultimo_id.")";
            $result = mysqli_query($conn->conex, $sql);
        }

        return $result;
    }
}
?>