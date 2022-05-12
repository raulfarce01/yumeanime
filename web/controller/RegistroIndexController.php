<?php

require_once "./model/UserModel.php";

class RegistroIndexController{

    public static function registroUser($nombre, $alias, $correo, $passwd){

        $user = new User();

        $user->registroUser($nombre, $alias, $correo, $passwd);

    }

    public static function iniciaSesion($alias, $passwd){

        $user = new User();

        $user->inicioSesion($alias, $passwd);

    }

}

?>