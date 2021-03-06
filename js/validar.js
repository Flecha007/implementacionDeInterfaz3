function validar(){
    var nombre, apellido, mail, usuario, psswor, ci, vmail, vnombre;
    nombre = document.getElementById("nom").value;
    apellido = document.getElementById("app").value;
    mail = document.getElementById("mail").value;
    usuario = document.getElementById("us").value;
    psswor = document.getElementById("pssw").value;
    ci = document.getElementById("ci").value;

    vmail = /\w+@\w+\.+[a-z]/;
    vnombre= /^[a-zA-ZÀ-ÿ\s]{1,40}$/;

    if (nombre == "" || apellido == "" || mail=="" || usuario=="" || psswor=="" || ci==""){
        alert("todos los campos son obligatorios! ");
        return false;
    }
    else if(nombre.lengt>30){
        alert("el nombre no debe supera los 30 caracteres!");
        return false;
    }
    else if(!vnombre.test(nombre)){
        alert("el nombre solo acepta letras y espacios!");
        return false;
    }
    else if(apellido.lengt>70){
        alert("apellidos no debe supera los 70 caracteres!");
        return false;
    }
    else if(!vnombre.test(apellido)){
        alert("apellidos solo acepta letras y espacios!");
        return false;
    }
    else if(mail.lengt>100){
        alert("el correo no debe supera los 100 caracteres!");
        return false;
    }
    else if(!vmail.test(mail)){
        alert("el correo no es valido!");
        return false;
    }
    
    else if(usuario.lengt>15){
        alert("el nombre usuario no debe supera los 15 caracteres!");
        return false;
    }
    else if(psswor.lengt>20 || psswor,lengt<3){
        alert("la contraseña no debe supera los 20 caracteres!");
        return false;
    }
    else if(ci.lengt>10){
        alert("el nro de documento no debe supera los 10 caracteres!");
        return false;
    }

    else if(isNaN(ci)){
        alert("el nro de documento no es un número!");
        return false;
    }
}