var correo = /[\w+(\-\_\.\/)]+[@][\w]+\.[\w]{3}/;

submitRegistro.disabled = true;

submitRegistro.style.backgroundColor = 'grey';

inputLoginCorreo.addEventListener("keyup", function(){

    var inputLoginCorreoValue = document.getElementById("inputLoginCorreo").value;

    if(!inputLoginCorreoValue.match(correo)){
        inputLoginCorreo.style.border = "1px solid red";
        submitRegistro.disabled = true;
        submitRegistro.style.backgroundColor = 'grey';
    }else{
        inputLoginCorreo.style.border = '1px solid black';
        submitRegistro.disabled = false;
        submitRegistro.style.backgroundColor = '#FAF8F7';
    }

});