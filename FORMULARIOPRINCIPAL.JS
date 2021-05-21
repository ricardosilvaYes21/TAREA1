function validar(){

    let nombre = document.getElementById("nombre");
    let pass = document.getElementById("pass");
    
    if (!nombre) {
        alert("El campo es incorrecto");
    }
    if(!pass){
        alert("El password es incorrecto")
    }
        
    }