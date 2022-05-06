<?php

class User{

    private $nombre;
    private $alias;
    private $correo;
    private $passwd;
    private $imgPerfil;
    private $administrador;

    public function __construct($nombre, $alias, $correo, $passwd, $imgPerfil, $administrador = 0){

        $this->nombre = $nombre;
        $this->alias = $alias;
        $this->correo = $correo;
        $this->passwd = $passwd;
        $this->imgPerfil = $imgPerfil;
        $this->administrador = $administrador;

    }

    //
    // FUNCIÓN PARA EL REGISTRO DE USUARIOS
    //

    function registroUser($nombre, $alias, $correo, $passwd, $administrador = 0){

        $existe = false;

        try{

            $db = new mysqli('localhost', 'yumeanime', '123456', 'yumeanimedb');

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la base de datos");

            }

        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        try{

            $consulta = $db->query("SELECT alias. correo FROM user");

            while($consulta->fetch_object()){

                if($alias == "$consulta->alias" || $correo == "$consulta->correo"){

                    $existe = true;

                }

            }

            if($existe){

                throw new Exception("El usuario ya existe", 2);

            }else{

                $db->query("INSERT INTO user(nombre, alias, correo, passwd, administrador) VALUES ('$nombre', '$alias', '$correo', '$passwd', $administrador)");

            }

        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        $db->close();

    }

    //
    // FUNCIÓN PARA INICIAR SESIÓN DEL USUARIO
    //
    function inicioSesion($alias, $passwd){

        try{

            $db = new mysqli('localhost', 'yumeanime', '123456', 'yumeanimedb');

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la base de datos");

            }

        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        $consulta = $db->query("SELECT alias, passwd FROM user WHERE alias = '$alias'");

        if ($recorreConsulta = $consulta->fetch_object()){

            if($recorreConsulta->passwd == "$passwd"){
                
                if(!isset($_SESSION['idUser'])){

                    $_SESSION['idUser'] = '';

                }

                $_SESSION['idUser'] = $recorreConsulta->idUser;

            }else{

                echo "<p> La contraseña no es correcta </p>";

            }

        }else{

            echo "<p> El alias no es correcto </p>";
    
        }

        $db->close();

    }

    //
    // Función para cambio de datos
    //

    function cambiaDatosUser($nombreNew, $aliasNew, $correoNew, $idUser){

        try{

            $db = new mysqli('localhost', 'yumeanime', '123456', 'yumeanimedb');

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la base de datos");

            }

        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }
        
        $consulta = $db->query("SELECT nombre, correo, alias FROM user WHERE idUser = $idUser");

        if($recorreConsulta = $consulta->fetch_object()){

            if($recorreConsulta['nombre'] != "$nombreNew"){

                $db->query("UPDATE user SET nombre = '$nombreNew'");

            }else if($recorreConsulta['alias'] != "$aliasNew"){

                $db->query("UPDATE user SET alias = '$aliasNew'");

            }else if($recorreConsulta['correo'] != "$correoNew"){

                $db->query("UPDATE correo SET nombre = '$correoNew'");

            }

        }

        $db->close();

    }

    //
    // Función para subir o cambiar la foto de perfil
    //

    function fotoPerfil($idUser, $image){

        try{
            $db = new mysqli('localhost', "yumeanime", "123456", "yumeanimedb");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la base de datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }

        $imgContent = addslashes(file_get_contents($image));

        //Usamos las siguientes líneas para saber si tenemos que añadir una imagen o simplemente cambiarla
        $recibeImagen = $db->query("SELECT imgPerfil FROM user WHERE idUser = $idUser");
        $comprueba = $recibeImagen->fetch_object();

        /*if($comprueba != NULL){

            $db->query("UPDATE user SET imgPerfil = '$imgContent' WHERE idUser = $idUser");

        }else{*/
            //echo $imgContent;
            $insert = $db->query("UPDATE user SET imgPerfil = '$imgContent' WHERE idUser = $idUser");
            if($insert){
                echo "<p>Archivo subido correctamente a la base de datos</p>";
            }else{
                echo "<p>Error al subir el archivo a la base de datos</p>";
            } 
        //}
    }

    //
    // Función para mostrar los datos del usuario
    //

    function muestraDatosUsuario($idUser){

        //Comprobamos que la conexión se realice con éxito
        try{
            $db = new mysqli('localhost', "yumeanime", "123456", "yumeanimedb");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la base de datos");

            }
        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        //Seleccionamos los valores desde la base de datos para mostrarlos en la página
        $datos = $db->query("SELECT nombre, imgPerfil, correo FROM user WHERE idUser = $idUser");
        
        if($res = $datos->fetch_object()){
            
            //Almacenamos todos los valores en un array asociativo para devolverlos a la página desde la que se llama a la función para mostrar los datos
            //Usar <img width='100' src='data:image/png;base64, ".base64_encode($res->fotoPerfil)."'></img> para visualizar la imagen+

            $muestra = array(
                "nombre" => $res->nombreUser,
                "correo" => $res->correo,
                "foto" => $res->fotoPerfil
            );

            return $muestra;
        }
    }
}

?>