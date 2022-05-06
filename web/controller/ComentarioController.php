<?php

require_once "../model/UserComentaNoticiaModel.php";

class comentarioController{

    /*
        
        Función que accede al modelo de comentarios para subir uno
        @see UserComentaNoticia/creaComentario
    
    */
    public static function creaComentarioController($idUser, $idNoticia, $texto){

        $comentario = new UserComentaNoticia($idUser, $idNoticia, $texto);

        $comentario->creaComentario($idUser, $idNoticia, $texto);

    }

    /*
        
        Función que accede al modelo de comentarios para traer los comentarios de una noticia
        @see UserComentaNoticia/traeComentarios
    
    */
    public static function traeComentariosController($idNoticia){

        $comentario = new UserComentaNoticia();

        $comentarios = $comentario->traeComentarios($idNoticia);

    }

}

?>