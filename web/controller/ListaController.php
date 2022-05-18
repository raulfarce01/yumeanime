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

        //AÑADIR ANIMES AQUÍ

    }

    public static function montaListasPerfil($idUser){

        $listaUser = new Lista();

        echo "<script>console.log('listaskekw')</script>";

        $listas = $listaUser->montaCabecerasListaPerfil($idUser);

        echo "<script>console.log('contenedorListas')</script>";

        echo "
        <div class='contenedorListas' id='contenedorListas'>";

            for($i = 0; $i < count($listas); $i++){
                if($i < 4){

                echo "<a href='./lista.php?idLista=".$listas[$i]['idLista']."'><p class='titulo pointer colorFondo tituloAnimeLista'>".$listas[$i]['nombre']."</p></a>";
                
                }

            }

        echo "<div class='masButton' id='masButtonLista'><i class='fa-solid fa-circle-plus'></i></div>
    </div>
        ";

        echo "<script src='../js/abreContenedoresAnime.js'></script>";
        echo "<script src='../js/recogeContAnime.js'></script>";

    }

}

?>