var saveButton = document.getElementById("saveButton");

function cambiaCredenciales(nombreNew, aliasNew, correoNew){

    console.log(nombreNew);
    console.log(correoNew);
    console.log(aliasNew);

    if(nombreNew == '' || correoNew == '' || aliasNew == ''){
        errorR.innerHTML = "Faltan datos";
    }else{

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
			if (this.responseText.trim() == '') {
				if (this.readyState == 4 && this.status == 200) paR.innerHTML = 'Registro correcto.';
			}
			else if (this.readyState == 4 && this.status == 200) paR.innerHTML = this.responseText.trim();
		};

        xhttp.open("GET", "../controller/cambiaCredencialesAjax.php?correo="+correoNew+"&nombre="+nombreNew+"&alias="+aliasNew, true);
		xhttp.send();

    }

}

saveButton.addEventListener("click", function (){

    var nombreNew = document.getElementById("nombre").value;
    var correoNew = document.getElementById("correo").value;
    var aliasNew = document.getElementById("alias").value;

    console.log("hola");

    cambiaCredenciales(nombreNew, aliasNew, correoNew);

});