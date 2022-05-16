<?php

session_start();

require_once "../model/UserModel.php";

$nombre = $_GET['nombre'];
$alias = $_GET['alias'];
$correo = $_GET['correo'];
$idUser = $_SESSION['idUser'];

$usuario = new User();

$usuario->cambiaDatosUser($nombre, $alias, $correo, $idUser);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambia Credenciales</title>
</head>
<body>
    <p>hola</p>
</body>
</html>