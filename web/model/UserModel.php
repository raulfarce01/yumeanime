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

    function registroUser(){

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

            $consulta = $db->query("SELECT alias FROM user");

            while($consulta->fetch_object()){

                if($this->nombre == "$consulta->alias" || $this->correo == "$consulta->correo"){

                    $existe = true;

                }

            }

            if($existe){

                throw new Exception("El usuario ya existe", 2);

            }else{

                $db->query("INSERT INTO user(nombre, alias, correo, passwd, administrador) VALUES ('$this->nombre', '$this->alias', '$this->correo', '$this->passwd', '$this->administrador')");

            }

        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        $db->close();

    }

    //
    // FUNCIÓN PARA INICIAR SESIÓN DEL USUARIO
    //
    function inicioSesion(){

        try{

            $db = new mysqli('localhost', 'yumeanime', '123456', 'yumeanimedb');

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la base de datos");

            }

        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        $consulta = $db->query("SELECT correo, passwd FROM user WHERE correo = '$correo'");

        if ($recorreConsulta = $consulta->fetch_object()){

            if($recorreConsulta->passwd == $this->passwd){
                
                if(!isset($_SESSION['idUser'])){

                    $_SESSION['idUser'] = '';

                }

                $_SESSION['idUser'] = $recorreConsulta->idUser;

            }else{

                echo "<p> La contraseña no es correcta </p>";

            }

        }else{

            echo "<p> El correo no es correcto </p>";
    
        }

        $db->close();

    }

}

?>