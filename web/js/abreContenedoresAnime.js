console.log("1"+botonRegistroLista);
console.log("2"+detallesLista);
console.log("4"+crearLista);
console.log("6"+addAnimeLista);
console.log("3"+masButtonLista);
console.log("5"+contenedorListas);

if(contenedorListas.style.display = ''){
    contenedorListas.style.display = 'none';
}

addAnimeLista.addEventListener("click", function(){
    console.log(contenedorListas.style.display);
    contenedorListas.style.display = 'flex';
});

botonRegistroLista.addEventListener("click", function (){
        crearLista.style.display = 'none';
        contenedorListas.style.display = 'flex';
});

masButtonLista.addEventListener("click", function(){
        crearLista.style.display = "flex";
        contenedorListas.style.display = 'none';
});
