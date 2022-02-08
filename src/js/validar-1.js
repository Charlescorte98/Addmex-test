function validar1() {
    var name, email, celular, msg;

    name = document.getElementById("name").value;
    email = document.getElementById("email").value;
    celular = document.getElementById("celular").value;
    msg = document.getElementById("msg").value;

    var expresion = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;



    if (name === "" || email === "" || celular === "" || msg === "" ) {
        alert("Por Favor Complete todos los campos solicitados");
       
        return false;
    } else {
        
    }

    if (!expresion.test(email)){
        alert("El formato del correo no es valido");
        prueba1 = 1;
        return false;
    }else{
        prueba1 = 2;
    }
    

}

$(".submit").click(function () {
    return false;
})