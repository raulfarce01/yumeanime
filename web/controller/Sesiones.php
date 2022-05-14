<?php

function montaHeaderPerfil($idUser){

    $user = new User();

    $datos = $user->muestraDatosUsuario($idUser);

    echo "
    <div class='fotoMiPerfil'>
    
        <img src='data:image/png;base64, ".base64_encode($datos['foto'])."' class='imgMiPerfil'>
    
    </div>
    <div class='derecha'>

        <p class='titulo colorFondo'>".$datos['nombre']."</p>

        <div class='masMiPerfil'>

            <i class='fa-solid fa-caret-down flechita'></i>

        </div>

    </div>
    ";

}

function montaLogin(){

    echo "<div class='botonesNav'>
    <div id='botonLoginNav' class='botonLoginNav'>
        <p class='texto colorFondo textoCentro'>Login incorrecto</p>
    </div>
    <div id='botonRegistroNav' class='botonRegistroNav'>
        <p>Registro</p>
    </div>
</div>";

}

?>