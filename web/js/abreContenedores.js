lupaBuscar.addEventListener("click", function (){
    document.getElementById("formBusqueda").submit();
});

botonLoginNav.addEventListener("click", () => {
    if(contenedorLogin.style.display == "none" || contenedorLogin.style.display == ""){

        contenedorLogin.style.display = "flex";

    }else if(contenedorLogin.style.display == "flex"){

        contenedorLogin.style.display = "none";

    }

    if(contenedorRegistro.style.display == "flex"){

        contenedorRegistro.style.display = "none";

    }

    console.log("hola");
    console.log(contenedorLogin.style.display);
    console.log(contenedorRegistro.style.display);
    
});

botonRegistroNav.addEventListener("click", function (){
    console.log("holaRN");
    if(contenedorRegistro.style.display == "none" || contenedorRegistro.style.display == ""){

        contenedorRegistro.style.display = "flex";

    }else if(contenedorRegistro.style.display == "flex"){

        contenedorRegistro.style.display = "none";

    }

    if(contenedorLogin.style.display == "flex"){

        contenedorLogin.style.display = "none";

    }
});

botonRegistro.addEventListener("click", function (){
    console.log("holaR");
    if(contenedorRegistro.style.display == "none" || contenedorRegistro.style.display == ""){

        contenedorRegistro.style.display = "flex";

    }else if(contenedorRegistro.style.display == "flex"){

        contenedorRegistro.style.display = "none";

    }

    if(contenedorLogin.style.display == "flex"){

        contenedorLogin.style.display = "none";

    }
});
botonLoginRegistro.addEventListener("click", () => {
    if(contenedorLogin.style.display == "none" || contenedorLogin.style.display == ""){

        contenedorLogin.style.display = "flex";

    }else if(contenedorLogin.style.display == "flex"){

        contenedorLogin.style.display = "none";

    }

    if(contenedorRegistro.style.display == "flex"){

        contenedorRegistro.style.display = "none";

    }

    console.log("hola");
    console.log(contenedorLogin.style.display);
    console.log(contenedorRegistro.style.display);
    
});
