function validar(){
    
    var email= document.getElementById('correo').value;
    var pass1= document.getElementById('pass1').value;
    var pass2= document.getElementById('pass2').value;
    var expresion = new RegExp ("^([a-z0-9]{1,}[\._\-]*)+@[a-z]{2,}.[a-z]{2,3}$");

    if (email == ""){
        alert("Ingresa correo");
        return -1;

    }else if(!expresion.test(email)){

        alert("Correo invalido");
        return false;
    } 

    if (pass1 == ""){
        alert("Ingresa contraseña");
        return false;
    }

    if (pass2 == ""){
        alert("Repite contraseña");
        return false;
    }

    if (pass1 != pass2){
         alert("Las contraseñas no son iguales");
         return false;
    }

    var minusculas= /[a-z]/g;
            
    if (!(pass1.match(minusculas))){
         alert("No hay minusculas");
         return false;
    }

    var mayusculas= /[A-Z]/g;
             
    if(!(pass1.match(mayusculas))){
         alert("No hay mayusculas");
         return false;
    }

    var numeros= /[0-9]/g;
             
    if(!(pass1.match(numeros))){
         alert("No hay numeros");
         return false;
    }

    if ((pass1.lenght < 8)){
         alert("La contraseña debe tener más de 8 caracteres");
         return false;
    }

    var cesp= /[@#$%^&*]/g;

    if (!(pass1.match(cesp))){
         alert("La contraseña debe tener caracteres especiales");
         return false;
     }

}