<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/339ad83339.js" crossorigin="anonymous"></script>
    <title>Yumeanime</title>
    <link rel="stylesheet" href="./css/general.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Mulish&display=swap" rel="stylesheet">
</head>
<body>
    
    <!-- CONTENEDORES OCULTOS QUE SE MOSTRARÁN CON JAVASCRIPT -->

    <!-- --------------------------LOGIN-------------------------------- -->

    <div class="contenedorLogin">
        <form action="#" method="post">
            <label for="inputLogin" class="cabezaLogin">Usuario</p>
            <input type="text" class="inputLogin" id="inputLoginUser">

            <label for="inputLogin" class="cabezaLogin">Contraseña</p>
            <input type="text" class="inputLogin" id="inputLoginPasswd">

            <div class="olvidaPasswd"><p>¿Has olvidado tu contraseña?</p></div>

            <div class="botonRegistro" id="botonRegistro"><p>Registrarse</p></div>
            <input type="submit" value="Iniciar" class="submit" id="submit">
        </form>
    </div>

    <!-- --------------------------REGISTRO-------------------------------- -->

    <div class="contenedor registro">
        <form action="#" method="post">
            <label for="inputLogin" class="cabezaLogin">Usuario</p>
            <input type="text" class="inputLogin" id="inputLoginUser">

            <label for="inputLogin" class="cabezaLogin">Contraseña</p>
            <input type="text" class="inputLogin" id="inputLoginPasswd">

            <label for="inputLogin" class="cabezaLogin">Confirmar Contraseña</p>
            <input type="text" class="inputLogin" id="inputLoginConfirmaPasswd">

            <label for="inputLogin" class="cabezaLogin">Correo</p>
            <input type="text" class="inputLogin" id="inputLoginCorreo">

            <label for="inputLogin" class="cabezaLogin">Alias</p>
            <input type="text" class="inputLogin" id="inputLoginAlias">

            <div class="botonLoginRegistro" id="botonLoginRegistro"><p>Login</p></div>
            <input type="submit" value="Registrarse" class="submit" id="submit">
        </form>
    </div>

    <!-- --------------------------OLVIDA CONTRASEÑA-------------------------------- -->

    <div class="olvidaPasswd">

        <form action="#" method="post">

            <label for="inputLogin" class="cabezaLogin">Correo</p>
            <input type="text" class="inputLogin" id="inputLoginCorreoOlvida">

            <div class="botonLoginRegistro" id="botonLoginRegistro"><p>Login</p></div>
            <input type="submit" value="Enviar" class="submit" id="submit">

        </form>

    </div>

    <!-- --------------------------CUADRO DE PERFIL-------------------------------- -->

    <div class="contenedorPerfil">

        <p class="miPerfil">Mi Perfil</p>

        <div class="botonMiperfil">

            <p class="textoBotonMiperfil">Editar</p>
            <i class="fa-regular fa-pencil"></i>

        </div>

        <div class="botonMiperfil">

            <p class="textoBotonMiperfil">Mis listas</p>
            <i class="fa-solid fa-list"></i>

        </div>

        <p class="cierraSesion">Cerrar sesión</p>

    </div>

    <!-- FIN CONTENEDORES OCULTOS QUE SE MOSTRARÁN CON JAVASCRIPT -->

    <!-- --------------------------MENÚ HAMBURGUESA-------------------------------- -->

    <div class="contenedorContenedor">
        <div class="contenedorMenuHamburguesa">
        <div class="menuHamburguesa">

            <div class="linea1 lineaHamb"></div>
            <div class="linea2 lineaHamb"></div>
            <div class="linea3 lineaHamb"></div>

        </div>
        </div>
    </div>
    

    <!-- --------------------------FIN MENÚ HAMBURGUESA-------------------------------- -->

    </header>
    <nav class="nav">

        <input type="checkbox" name="hamburg" id="hamburg" class="checkHamb">

        <div class="textoNav">
            <div class="botonNav"><p>Top Noticias</p></div>

            <div class="botonNav"><a href="./view/listasGenerales.php">Top Listas</a></div>

            <div class="botonNav"><a href="./view/directorio.php">Directorio Anime</a></div>

            <form action="./view/busqueda.php">

                <input type="text" name="buscador" id="buscador" class="buscador" placeholder="Buscar...">
                <i class="fa-solid fa-magnifying-glass"></i>

            </form>

            <div class="botonLogin">
                <p>Login</p>
            </div>

            <div class="editarPerfilMovil">

                <i class="fa-regular fa-pencil"></i>
                <p class="botonNav">Editar Perfil</p>

            </div>

            <div class="listasPerfilMovil">

                <i class="fa-solid fa-list"></i>
                <p class="botonNav">Mis listas</p>

            </div>
        </div>
    </nav>

    <!-- --------------------COPIAR HASTA AQUÍ EN TODOS------------------------- -->

    <main>

        <div class="contenedor">

            <div class="imagenAnime" id="imagenAnime"></div>
            <div class="addButton" id="addButton">
                <div class="masButton"><i class="fa-solid fa-circle-plus"></i></div>
                <p>Añadir a Lista</p>
            </div>
            <div class="titAnime" id="titAnime"></div>
            <div class="contenedorCategorias" id="contenedorCategorias"></div>
            <div class="descAnime"></div>

        </div>

        <div class="noticiasPopu" id="noticiasPopu">
            <h3>Noticias Populares</h3>
        </div>

        <div class="cajaComentarios"></div>

    </main>
    <footer>

        <p>Creador: Raúl Fernández Arce</p>

    </footer>
</body>
</html>