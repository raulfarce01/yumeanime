var botonRegistroLista = document.getElementById("botonRegistroLista");
var estadoL = document.getElementById("estadoL");

console.log("fumo?");


function creaLista(nombre, idUser){

    console.log("hola2");

    console.log(nombre);
    console.log(idUser);

    if(nombre == ''){
        estadoL.innerHTML = "Faltan datos";
    }else{

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onload = function() {
			if (this.responseText.trim() == '') {
				if (this.readyState == 4 && this.status == 200) estadoL.innerHTML = 'Lista Creada.';
			}
			else if (this.readyState == 4 && this.status == 200) estadoL.innerHTML = this.responseText.trim();
		};

        xmlhttp.open("GET","../controller/creaLista.php?idUser="+idUser+"&nombreLista="+nombre,true);
		xmlhttp.send();

    }

}

botonRegistroLista.addEventListener("click", function (){

    var nombre = document.getElementById("nombreLista").value;
    var idUser = document.getElementById("idUserInput").value;

    console.log("hola");

    creaLista(nombre, idUser);

});