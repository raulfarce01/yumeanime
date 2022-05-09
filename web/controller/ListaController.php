<?php

require_once "../model/ListaModel.php";
require_once "../model/UserGuardaLista.php";

class ListaController{

    public static function montaListaEspecifica($idLista){

        $listaUser = new Lista();

        $listas = $listaUser->montaCabecerasLista($idLista);

        echo "<div class='textoCabeceraLista'>
        <div class='titLista titulo' id='titLista'>";

        $listas[0]["nombre"];

        echo "</div>
        <div class='autorFecha'>
            <div class='autorLista texto' id='autorLista'><i class='fa-solid fa-user colorHeaderLetra'></i><p>";
            
            $listas[0]["autor"];
            
            echo "</p></div>
            <div class='fechaLista texto' id='fechaLista'><i class='fa-solid fa-clock colorHeaderLetra'></i><p>";
            
            $listas[0]["fecha"];
            
            echo "</p></div>
        </div>
        <div class='descLista texto' id='descLista'>";
        
        $listas[0]["desc"];
        
        echo "</div>
        <hr class='lineaPc'>
        </div>";

    }

    public static function montaListasPerfil($idUser){

        $listaUser = new Lista();

        $listas = $listaUser->montaCabeceraListaPerfil($idUser);

        echo "
        <div class='contenedorListas' id='contenedorListas'>";

            for($i = 0; $i < 4; $i++){

                echo "<p class='titulo pointer colorFondo tituloAnimeLista'>$listas[$i]['nombre']</p>";

            }

        echo "<div class='masButton'><i class='fa-solid fa-circle-plus'></i></div>
    </div>
        ";

    }

}

?>