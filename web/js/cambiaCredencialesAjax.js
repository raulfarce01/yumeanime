var saveButton = document.getElementById("saveButton");

function cambiaCredenciales(nombreNew, aliasNew, correoNew){

    console.log("hola2");

    console.log(nombreNew);
    console.log(correoNew);
    console.log(aliasNew);

    if(nombreNew == '' || correoNew == '' || aliasNew == ''){
        errorR.innerHTML = "Faltan datos";
    }else{

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onload = function() {
			if (this.responseText.trim() == '') {
				if (this.readyState == 4 && this.status == 200) paR.innerHTML = 'Registro correcto.';
			}
			else if (this.readyState == 4 && this.status == 200) paR.innerHTML = this.responseText.trim();
		};

        xmlhttp.open("GET", "../controller/cambia.php?correo="+correoNew+"&nombre="+nombreNew+"&alias="+aliasNew,true);
		xmlhttp.send();

    }

}

saveButton.addEventListener("click", function (){

    var nombreNew = document.getElementById("nombre").value;
    var correoNew = document.getElementById("correo").value;
    var aliasNew = document.getElementById("alias").value;

    console.log("hola");

    cambiaCredenciales(nombreNew, aliasNew, correoNew);

});