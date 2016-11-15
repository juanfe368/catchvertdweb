var objForm = new Object()
var objRespuest = new Object();
function validateForm(){
    objRespuest.respuest = false;
    objForm.inputEmail = document.getElementById("inputEmail").value;
    objForm.inputPassword = document.getElementById("inputPassword").value;
    if(objForm.inputEmail==""){
        document.getElementById("inputEmail").focus();
        objRespuest.respuest = false;
        alert("Por favor complete el campo de Email");
        respuestForm();
    }
    else if(objForm.inputPassword==""){
        document.getElementById("inputPassword").focus();
        objRespuest.respuest = false;
        alert("Por favor complete el campo de password");
        respuestForm();
    }
    else if(objForm.inputEmail!=""&&objForm.inputPassword!=""){
        document.getElementById("hiAction").value = 1;
        objRespuest.respuest = true;
        respuestForm();
    }
}

function respuestForm(){
    return objRespuest.respuest;
}