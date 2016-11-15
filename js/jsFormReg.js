var objForm = new Object()
var objRespuest = new Object();
function validateForm(){
    objRespuest.respuest = false;
    objForm.inputNombre = document.getElementById("inputNombre").value;
    objForm.inputApellido = document.getElementById("inputApellido").value;
    objForm.inputEmail = document.getElementById("inputEmail").value;
    objForm.inputCelular = document.getElementById("inputCelular").value;
    
    if(objForm.inputNombre==""){
        document.getElementById("inputNombre").focus();
        objRespuest.respuest = false;
        alert("Complete el nombre");
        respuestForm();
    }
    else if(objForm.inputApellido==""){
        document.getElementById("inputApellido").focus();
        objRespuest.respuest = false;
        alert("Complete el apellido");
        respuestForm();
    }
    else if(objForm.inputEmail==""){
        document.getElementById("inputEmail").focus();
        objRespuest.respuest = false;
        alert("Complete el email");
        respuestForm();
    }
    else if(objForm.inputCelular==""){
        document.getElementById("inputCelular").focus();
        objRespuest.respuest = false;
        alert("Complete el celular");
        respuestForm();
    }
    else if(objForm.inputNombre!=""&&objForm.inputApellido!=""&&objForm.inputEmail!=""&&objForm.inputCelular!=""){
        document.getElementById("hiAction").value = 1;
        objRespuest.respuest = true;
        respuestForm();
    }
}

function respuestForm(){
    return objRespuest.respuest;
}