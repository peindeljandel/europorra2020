<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Alta usuarios</title>
    <script type="text/javascript" language="JavaScript" src="../../style/js/jquery-2.1.0.js"></script>
    <script type="text/javascript" language="javascript" src="../../style/js/scripts.js"></script>
    <script type="text/javascript" language="javascript" src="../../style/js/ajax.js"></script>
    <script type="text/javascript" language="javascript" src="../../style/js/funciones.js"></script>
</head>

<body onload="limpiar()">

<?php
if (isset($_GET["ret"])) {
    if($_GET["ret"]){
        echo "<h2 style='color:#00aa00'>Te has registrado correctamente</h2>";
    }else{
        echo "<h2 style='color:#ff0000'>Ha habido un error en el registro. Intentalo de nuevo</h2>";
    }
}
?>
<h2>Introduce tus datos</h2>

<form action="libUsuariosInsertar.php" name="form" method="post">
    Nick:<input type="text" name="nick" onkeyup="ValidarNick(document.form.nick.value,'div_nick')"/>
    <div id="div_nick"></div>

    <br/>
    Password:<input type="password" name="pass1"/>
    <div id="div_pass1"></div>

    <br/>
    Confirmar Password:<input type="password" name="pass2"/>
    <div id="div_pass2"></div>

    <br/>
    E-Mail:<input type="text" name="correo"/>
    <div id="div_correo"></div>

    <br/>
    Porra:
    <input id="radio_porra1" type="radio" name="radPorra" value="nueva" checked>Crear nueva
    <input id="radio_porra2" type="radio" name="radPorra" value="existente">Unirse a existente
    <div id="div_porra_nueva">
        <br/>
        Nombre de la porra:<input type="text" name="porra_nueva" onkeyup="ValidarPorra(document.form.porra_nueva.value, 'div_res_porra_nueva');"/>
        <div id="div_res_porra_nueva"></div>
    </div>
    <div id="div_porra_existente"></div>

    <hr/>
    <input id="boton" type="button" value="Insertar usuario" title="Ingresar" onclick="valida_registro()"/>
    <input id="boton_2" type="button" value="Rellene los campos" title="No se puede Ingresar" style="display:none"/>
    <input type="hidden" id="porra_seleccionada" name="porra_seleccionada" value="-1"/>
    <input type="hidden" id="insertar_nueva_porra" name="insertar_nueva_porra" value="true"/>
</form>

</body>
</html>
