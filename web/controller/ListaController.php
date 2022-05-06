<?php

require_once "../model/ListaModel.php";
require_once "../model/UserGuardaLista.php";

class ListaController{

    public static function montaListaEspecifica($idLista){



    }

    public static function montaListasPerfil($idUser){

        $listaUser = new Lista();

        $listas = $listaUser->montaCabeceraListaPerfil($idUser);

        // SEGUIR AQUI

    }

}

?>