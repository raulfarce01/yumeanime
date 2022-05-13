<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once "../model/UserModel.php";

$nombre = $_GET['inputRegistroUser'];
$alias = $_GET['inputLoginAlias'];
$correo = $_GET['inputLoginCorreo'];
$passwd = $_GET['inputRegistroPasswd'];

$usuario = new User();

$usuario->registroUser($nombre, $alias, $correo, $passwd);


?>

<form action="../index.php" method='post'></form>

<script>

window.onload = function ()
        {

		    document.forms[0].submit();

        }

</script>
    
</body>
</html>