botonLoginNav.addEventListener("click", function (){
    if(contenedorLogin.style.display == "none"){

        contenedorLogin.style.display = "flex";

    }else if(contenedorRegistro.style.display == "flex"){

        contenedorRegistro.style.display = "none";

    }else if(contenedorLogin.style.display == "flex"){

        contenedorLogin.style.display = "none";

    }
});