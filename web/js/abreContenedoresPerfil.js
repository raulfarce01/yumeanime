flechita.addEventListener("click", function (){
    console.log(contenedorPerfil.style.display); 
    console.log("aaaa");
    if(contenedorPerfil.style.display == 'none' || contenedorPerfil.style.display == ''){

        contenedorPerfil.style.display = 'flex';

        console.log("holaFlecha");
    }else if(contenedorPerfil.style.display == 'flex'){

        contenedorPerfil.style.display='none';
        console.log("adiosFlecha");
    }
});