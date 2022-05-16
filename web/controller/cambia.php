<?php

session_start();

?>

    Usuario cambiado correctamente

    <?php


        require_once "../model/UserModel.php";

        $nombre = $_GET['nombre'];
        $alias = $_GET['alias'];
        $correo = $_GET['correo'];
        $idUser = $_SESSION['idUser'];

        $usuario = new User();

        $usuario->cambiaDatosUser($nombre, $alias, $correo, $idUser);


    ?>
