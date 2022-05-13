<?php

require_once "../model/UserModel.php";

$nombre = $_GET['user'];
$alias = $_GET['alias'];
$correo = $_GET['correo'];
$passwd = $_GET['passwd'];

$usuario = new User();

$usuario->registroUser($nombre, $alias, $correo, $passwd);


?>