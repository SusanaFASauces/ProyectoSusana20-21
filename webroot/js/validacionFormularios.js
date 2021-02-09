/* 
 * Autor.- Susana Fabián Antón
 * Fecha creación.- 09/02/2021
 * Última modificación.- 09/02/2021
 */

//array que contiene los nombres de todos los campos del formulario
var aCampos = new Array("codUsuario","descUsuario","password","confirmacionPassword");
    
//funcion que valida todo el formulario
function validarFormulario() {
    var estado = true;
    for(var i=0; i<aCampos.length; i++) {
        if(!validarCampo(aCampos[i])) {
            estado = false;
        }
    }
    if(!estado) {
        return false;
    }
    return true;
}

function reiniciarFormulario() {
    var errores = document.getElementsByTagName("span");
    for(var i=0; i<errores.length; i++) {
        errores[i].innerHTML = "";
    }
    for(var i=0; i<aCampos.length; i++) {
        document.getElementById(aCampos[i]).style.border="1px solid gray";
    }
}

//función que valida el campo recibido como parámetro
function validarCampo(campo) {
    campoEnCurso = document.getElementById(campo);
    switch(campo) {
        case "codUsuario": //obligatorio, alfabético, longMax 15
            if(validarObligatorio(campoEnCurso)) {
                if(validarAlfabetico(campoEnCurso)) {
                    if(validarLongitud(campoEnCurso,1,15)) {
                        document.getElementById(campo+"Err").innerHTML = "<b>&check;</b>";
                        document.getElementById(campo+"Err").style.color = "green";
                        return true;
                    }
                    else {
                        document.getElementById(campo+"Err").innerHTML = "<b>&cross;</b> El máximo de caracteres es 15";
                        document.getElementById(campo+"Err").style.color = "red"; 
                        return false;
                    }
                }
                else {
                    document.getElementById(campo+"Err").innerHTML = "<b>&cross;</b> Este campo solo admite letras";  
                    document.getElementById(campo+"Err").style.color = "red";  
                    return false;
                }
            }
            else {
                document.getElementById(campo+"Err").innerHTML = "<b>&cross;</b> Este campo es obligatorio";
                document.getElementById(campo+"Err").style.color = "red";
                return false;
            }
        case "descUsuario": //obligatorio, alfabético, longMax 255
            if(validarObligatorio(campoEnCurso)) {
                if(validarAlfabetico(campoEnCurso)) {
                    if(validarLongitud(campoEnCurso,1,255)) {
                        document.getElementById(campo+"Err").innerHTML = "<b>&check;</b>";
                        document.getElementById(campo+"Err").style.color = "green";
                        return true;
                    }
                    else {
                        document.getElementById(campo+"Err").innerHTML = "<b>&cross;</b> El máximo de caracteres es 255";
                        document.getElementById(campo+"Err").style.color = "red"; 
                        return false;
                    }
                }
                else {
                    document.getElementById(campo+"Err").innerHTML = "<b>&cross;</b> Este campo solo admite letras";  
                    document.getElementById(campo+"Err").style.color = "red";  
                    return false;
                }
            }
            else {
                document.getElementById(campo+"Err").innerHTML = "<b>&cross;</b> Este campo es obligatorio";
                document.getElementById(campo+"Err").style.color = "red";
                return false;
            }
        case "password": //obligatorio, alfanumérico, longMax 16
            if(validarObligatorio(campoEnCurso)) {
                if(validarAlfanumerico(campoEnCurso)) {
                    if(validarLongitud(campoEnCurso,1,16)) {
                        document.getElementById(campo+"Err").innerHTML = "<b>&check;</b>";
                        document.getElementById(campo+"Err").style.color = "green";
                        return true;
                    }
                    else {
                        document.getElementById(campo+"Err").innerHTML = "<b>&cross;</b> El máximo de caracteres es 16";
                        document.getElementById(campo+"Err").style.color = "red"; 
                        return false;
                    }
                }
                else {
                    document.getElementById(campo+"Err").innerHTML = "<b>&cross;</b> Este campo solo admite letras y números";  
                    document.getElementById(campo+"Err").style.color = "red";  
                    return false;
                }
            }
            else {
                document.getElementById(campo+"Err").innerHTML = "<b>&cross;</b> Este campo es obligatorio";
                document.getElementById(campo+"Err").style.color = "red";
                return false;
            }
        case "confirmacionPassword": //obligatorio, coincidente
            if(validarObligatorio(campoEnCurso)) {
                if(validarConfirmacionPassword("password",campoEnCurso)) {
                    document.getElementById(campo+"Err").innerHTML = "<b>&check;</b>";
                    document.getElementById(campo+"Err").style.color = "green";
                    return true;
                }
                else {
                    document.getElementById(campo+"Err").innerHTML = "<b>&cross;</b> Las contraseñas no coinciden";  
                    document.getElementById(campo+"Err").style.color = "red";  
                    return false;
                }
            }
            else {
                document.getElementById(campo+"Err").innerHTML = "<b>&cross;</b> Este campo es obligatorio";
                document.getElementById(campo+"Err").style.color = "red";
                return false;
            }
    }
    
}

//función que comprueba que se haya introducido información en el campo recibido como parámetro
function validarObligatorio(campo) {
    //si el valor es nulo, su longitud es 0, o está compuesto por espacios
    if(campo.value===null || campo.value.length===0 || /^\s+$/.test(campo.value)) { 
        return false;
    }
    return true;
}

//función que comprueba que la longitud del campo recibido como parámetro esté entre un mínimo y un máximo
function validarLongitud(campo, longMin, longMax) {
    if(campo.value==="") { //si no se ha introducido nada en este campo
        return true;
    }
    //si la longitud del campo es menor que la mínima o mayor que la máxima
    if(campo.value.length<longMin || campo.value.length>longMax) { 
        return false;
    }
    return true;
}

//función que compreba que el valor del campo recibido como parámetro sea alfabetico
function validarAlfabetico(campo) {
    if(campo.value==="") { //si no se ha introducido nada en este campo
        return true;
    }
    //si el valor del campo no es alfabético
    if(!/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ\s]+$/.test(campo.value)) {
        return false;
    }
    return true;
}

//función que compreba que el valor del campo recibido como parámetro sea alfanumérico
function validarAlfanumerico(campo) {
    if(campo.value==="") { //si no se ha introducido nada en este campo
        return true;
    }
    //si el valor del campo no es alfanumérico
    if(!/^[A-Za-z0-9]+$/.test(campo.value)) {
        return false;
    }
    return true;
}

//función que compreba que el valor del campo recibido como parámetro sea alfanumérico
function validarConfirmacionPassword(campoPassword, campoConfirmacion) {
    password = document.getElementById(campoPassword);
    //si el valor del campo no es alfabético
    if(password.value !== campoConfirmacion.value) {
        return false;
    }
    return true;
}