function objetoAjax()
{
    var xmlhttp=false;

    try
    {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch (e)
    {
        try
        {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch (E)
        {
            xmlhttp = false;
        }
    }

    if (!xmlhttp && typeof XMLHttpRequest!='undefined')
    {
        xmlhttp = new XMLHttpRequest();
    }

    return xmlhttp;
}

function CargarSelecciones()
{
    var mi_aleatorio = parseInt(Math.random() * 99999999); //para que no guarde la página en el caché...
    var vinculo = "lib/selecciones/libSeleccionesCargar.php?rand=" + mi_aleatorio;

    xmlhttp=objetoAjax();

    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("div_contenido").innerHTML=xmlhttp.responseText;
        }
    }

    xmlhttp.open("GET", vinculo, true);
    xmlhttp.send();
}

function CargarPorras()
{
    var mi_aleatorio = parseInt(Math.random() * 99999999); //para que no guarde la página en el caché...
    var vinculo = "lib/porras/libPorrasCargar.php?rand=" + mi_aleatorio;

    xmlhttp=objetoAjax();

    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("div_porra_existente").innerHTML=xmlhttp.responseText;
        }
    }

    xmlhttp.open("GET", vinculo, true);
    xmlhttp.send();
}

//*********************************************************************
function ValidarNick(valor, destino) {
    if (valor=='') { return false; }

    var mi_aleatorio = parseInt(Math.random() * 99999999); //para que no guarde la página en el caché...
    var vinculo = "lib/usuarios/libUsuariosValidar.php?id=" + valor + "&rand=" + mi_aleatorio;

    xmlhttp=objetoAjax();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            var resp = xmlhttp.responseText;
            if (resp == "no") {
                document.getElementById(destino).innerHTML = "<font color='red'>El usuario " + valor + " no está disponible</font>";
                document.getElementById("boton").disabled = true;
            } else {
                document.getElementById(destino).innerHTML = "<font color='green'>El usuario " + valor + " si se encuentra disponible</font>";
                document.getElementById("boton").disabled = false;
            }
        }
    }

    xmlhttp.open("GET", vinculo, true);
    xmlhttp.send();
}

//*********************************************************************
function ValidarPorra(valor, destino) {
    if (valor=='') { return false; }

    var mi_aleatorio = parseInt(Math.random() * 99999999); //para que no guarde la página en el caché...
    var vinculo = "lib/porras/libPorrasValidar.php?id=" + valor + "&rand=" + mi_aleatorio;

    xmlhttp=objetoAjax();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            var resp = xmlhttp.responseText;
            if (resp == "no") {
                document.getElementById(destino).innerHTML = "<font color='red'>La porra " + valor + " no está disponible</font>";
                document.getElementById("boton").disabled = true;
            } else {
                document.getElementById(destino).innerHTML = "<font color='green'>La porra " + valor + " si se encuentra disponible</font>";
                document.getElementById("boton").disabled = false;
            }
        }
    }

    xmlhttp.open("GET", vinculo, true);
    xmlhttp.send();
}