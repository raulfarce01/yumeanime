function registro (user, passwd, passwdConfirm, correo, alias){

    console.log("user  "+user);
    console.log("passwd  "+passwd);
    console.log("passwdConf  "+passwdConfirm);
    console.log("correo  "+correo);
    console.log("alias  "+alias);
    if(user == '' || passwd == '' || passwdConfirm == '' || correo == '' || alias == ''){
        errorR.innerHTML = "Faltan datos";
    }else{

        var request = new XMLHttpRequest();

        request.onreadystatechange = function() {
			if (this.responseText.trim() == '') {
				if (this.readyState == 4 && this.status == 200) paR.innerHTML = 'Registro correcto.';
			}
			else if (this.readyState == 4 && this.status == 200) paR.innerHTML = this.responseText.trim();
		};

        request.open("GET","../controller/registroAjax.php?correo="+correo+"&user="+user+"&pass="+passwd+"&alias="+alias,true);
		request.send();

    }

}

// submitRegistro.addEventListener("click", function(){
//     var alias = document.getElementById("inputLoginAlias").value;
//     var passwd = document.getElementById("inputRegistroPasswd").value;
//     var correo = document.getElementById("inputLoginCorreo").value;
//     var user = document.getElementById("inputRegistroUser").value;
//     var confirmaPasswd = document.getElementById("inputLoginConfirmaPasswd").value;

//     registro(user, passwd, confirmaPasswd, correo, alias);

//     console.log("registro");
// });