<?php

require_once "../model/UserComentaNoticiaModel.php";
require_once "../model/UserModel.php";

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

        for($i = 0; $i < count($comentarios); $i++){

            echo "<div class='comentario'>
        
                <div class='fotoPerfil'>";
                    
                    if(empty($comentarios[$i]["imgPerfil"])){
                    
                        echo "<div class='noFoto colorHeader'></div>";

                    }else{

                        echo "<img src='data:image/png;base64, ".base64_encode($comentarios[$i]["imgPerfil"])."' class='imgPerfil'>";

                    }
                    
                echo "</div>
                
                <div class='autorComenta'>
                
                    <div class='autorComent'>
                    
                        <p class='letraNegra titulo autorComentario'>".$comentarios[$i]["autor"]."</p>

                    </div>
                    <div class='coment'>
                    
                        <p class='letraNegra comenta'>".$comentarios[$i]["texto"]."</p>

                    </div>
                
                </div>
        
            </div>";
        
        }

    }

    public static function userComenta($idUser){

        $user = new User();

        $datos = $user->muestraDatosUsuario($idUser);

        echo "<div class='comentario'>
        
                <div class='fotoPerfil'>
                    <img src='data:image/png;base64, ".base64_encode($datos["foto"])."' class='imgPerfilUser'>
                </div>
                
                <div class='autorComenta'>
                
                    <div class='autorComent'>
                    
                        <p>".$datos["nombre"]."</p>

                    </div>
                    <div class='coment'>
                    
                        <form action='#' method='post'>    
                            <input type='text' placeholder='Escribe aquí tu comentario...' name='comentario'>
                            <input type='submit' value='Enviar' class='botonComenta'>
                        </form>

                    </div>
                
                </div>
        
            </div>";
    }

}

?>