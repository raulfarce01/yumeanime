<?php

session_start();

require_once "../model/UserModel.php";

$nombre = $_GET['inputRegistroUser'];
$alias = $_GET['inputLoginAlias'];
$correo = $_GET['inputLoginCorreo'];
$idUser = $_SESSION['idUser'];

$usuario = new User();

$usuario->cambiaDatosUser($nombre, $alias, $correo, $idUser);


?>