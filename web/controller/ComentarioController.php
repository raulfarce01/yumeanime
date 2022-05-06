<?php

include "../model/UserComentaNoticiaModel.php";

class comentarioController{

    public static function creaComentarioController($idUser, $idNoticia, $texto){

        $comentario = new UserComentaNoticia($idUser, $idNoticia, $texto);

        $comentario->creaComentario($idUser, $idNoticia, $texto);

    }

    public static function traeComentariosController($idNoticia){

        $comentario = new UserComentaNoticia();

        $comentarios = $comentario->traeComentarios($idNoticia);

    }

}

?>