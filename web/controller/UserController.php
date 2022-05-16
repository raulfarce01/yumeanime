<?php

require_once "../model/UserModel.php";
require_once "../controller/Sesiones.php";

class UserController{

    /*
        
        Función que accede al modelo de User para registrar uno SIN permisos de administrador.
        @see UserModel/registroUser
    
    */
    public static function creaUserController($nombre, $alias, $correo, $passwd){

        $usuario = new User();

        $respuesta = $usuario->registroUser($nombre, $alias, $correo, $passwd);

        return $respuesta;

    }

    /*
        
        Función que accede al modelo de User para registrar uno CON permisos de administrador.
        @see UserModel/registroUser
    
    */
    public static function creaAdminController($nombre, $alias, $correo, $passwd){

        $admin = new User();

        $admin->registroUser($nombre, $alias, $correo, $passwd, 1);

    }

    /*
        
        Función que accede al modelo de User para montar los divs necesarios para la página dedicada del usuario.
        @see UserModel/muestraDatosUsuario
    
    */
    public static function montaUsuario($idUser){

        $user = new User();

        $datos = $user->muestraDatosUsuario($idUser);

        echo "

            <div class='fotoPerfil'>";

                echo "<div class='contenedorFotoPerfil contenedorAzul'>";
                if(!is_null($datos["foto"])){
                    echo "<img width='100' src='data:image/png;base64, ".base64_encode($datos['foto'])."' class='imgUsuario'></img>";
                }else{
                    echo "<i class='fa-solid fa-user personajeFoto colorHeaderLetra'></i>";
                }
                echo "</div>";
                
            
            echo "<form action='../model/subeImagenUser.php' method='post' enctype='multipart/form-data'>
                <input type='file' name='image' style='color: transparent' class='cambiaFoto'>
                <input type='submit' name='cambiaFoto' value='Subir Imagen' class='cambiaFotoSubmit contenedorAzul texto'>
                </form>
            </div>
        
            <div class='inputs'>
                
                <label for='nombre' class='titulo colorHeaderLetra'>Nombre</label>
                <input type='text' name='nombre' id='nombre' class='nombre texto input contenedorAzul' value='".$datos['nombre']."'>

                <label for='correo' class='titulo colorHeaderLetra'>Correo</label>
                <input type='text' name='alias 'class='alias texto input contenedorAzul' id='correo' value='".$datos['correo']."'>

                <label for='alias' class='titulo colorHeaderLetra'>Alias</label>
                <input type='text' name='alias' class='alias texto input contenedorAzul' id='alias' value='".$datos['alias']."'>

                

                
        
        ";

    }

    /*
        
        Función que accede al modelo de User para subir una foto de perfil a la base de datos
        @see UserModel/fotoPerfil
    
    */
    public static function subeFotoPerfil($idUser, $image){

        $user = new User();

        $user->fotoPerfil($idUser, $image);

    }

    /*
        
        Función que accede al modelo de User para cambiar los datos del usuario en la base de datos
        @see UserModel/cambiarDatos
    
    */
    public static function cambiarDatos($nombreNew, $aliasNew, $correoNew, $idUser){

        $user = new User();

        $user->cambiaDatosUser($nombreNew, $aliasNew, $correoNew, $idUser);

    }

    /*
        
        Función que accede al modelo de User para iniciar sesión
        @see UserModel/inicioSesion
    
    */
    public static function iniciarUser($correo, $passwd){

        $user = new User();

        $idUser = $user->inicioSesion($correo, $passwd);

        if($idUser){
            montaHeaderPerfil($idUser);
        }else{
            montaLogin();
        }

    }

    public static function userIniciado($idUser){

        montaHeaderPerfil($idUser);

    }

}



?>