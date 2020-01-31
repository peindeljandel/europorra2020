//******************************************************************
function limpiar() {
    document.form.reset();
    document.form.nick.focus();
}

//*****************************************************************************
//Valida correo
function valida_correo(correo) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)) {

        return (true)
    } else {

        return (false);
    }
}

//******************************************************************
function valida_registro() {
    var form = document.form;
    if (form.nick.value == 0) {
        document.getElementById("div_nick").innerHTML = "<font color='#ff0000'>Introduce tu nick</font>";
        form.nick.value = "";
        form.nick.focus();
        return false;
    } else {
        document.getElementById("div_nick").innerHTML = "";
    }
    if (form.pass1.value == 0) {
        document.getElementById("div_pass1").innerHTML = "<font color='#ff0000'>Introduce tu contraseña</font>";
        form.pass1.value = "";
        form.pass1.focus();
        return false;
    } else {
        document.getElementById("div_pass1").innerHTML = "";
    }
    if (form.pass2.value == 0) {
        document.getElementById("div_pass2").innerHTML = "<font color='#ff0000'>Confirma tu contraseña</font>";
        form.pass2.value = "";
        form.pass2.focus();
        return false;
    } else {
        document.getElementById("div_pass2").innerHTML = "";
    }
    if (form.pass1.value != form.pass2.value) {
        document.getElementById("div_pass1").innerHTML = "<font color='#ff0000'>Las contraseñas no coinciden</font>";
        form.pass1.value = "";
        form.pass2.value = "";
        form.pass1.focus();
        return false;
    } else {
        document.getElementById("div_pass1").innerHTML = "";
    }
    if (form.correo.value == 0) {
        document.getElementById("div_correo").innerHTML = "<font color='#ff0000'>Introduce tu E-Mail</font>";
        form.correo.value = "";
        form.correo.focus();
        return false;
    } else {
        document.getElementById("div_correo").innerHTML = "";
    }
    if (valida_correo(form.correo.value) == false) {
        document.getElementById("div_correo").innerHTML = "<font color='#ff0000'>Introduce un E-Mail v&aacute;lido</font>";
        form.correo.value = "";
        form.correo.focus();
        return false;
    } else {
        document.getElementById("div_correo").innerHTML = "";
    }
    if (form.radPorra[0].checked) {
        if (form.porra_nueva.value == 0) {
            document.getElementById("div_res_porra_nueva").innerHTML = "<font color='#ff0000'>Introduce el nombre de la porra</font>";
            form.porra_nueva.value = "";
            form.porra_nueva.focus();
            return false;
        } else {
            document.getElementById("div_res_porra_nueva").innerHTML = "";
        }
    } else {
        if (form.lista_porra_existente.options.selectedIndex == -1) {
            document.getElementById("div_res_porra_existente").innerHTML = "<font color='#ff0000'>Selecciona una porra de la lista</font>";
            form.lista_porra_existente.focus();
            return false;
        } else {
            document.getElementById("div_res_porra_existente").innerHTML = "";
        }
    }
    form.submit();
}

//******************************************************************
function obtenerIdPorra(sel) {
    var idPorra = sel.options[sel.selectedIndex].value;
    document.form.porra_seleccionada.value = idPorra;
}