<?php

include "../model/UserModel.php";

class UserController{

public static function creaUserController($nombre, $alias, $correo, $passwd){

    $usuario = new User();

    $usuario->registroUser($nombre, $alias, $correo, $passwd);

}

public static function creaAdminController($nombre, $alias, $correo, $passwd){

    $admin = new User();

    $admin->registroUser($nombre, $alias, $correo, $passwd, 1);

}

}

?>