<?php

    require_once "../model/ListaModel.php";

    $nombre = $_GET['nombreLista'];
    $idUser = $_GET['idUser'];

    $lista = new Lista();

    $lista->creaLista($idUser, $nombre);

?>