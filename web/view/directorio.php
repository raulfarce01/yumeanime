<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/339ad83339.js" crossorigin="anonymous"></script>
    <title>Yumeanime</title>
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

    <div class="contenedorMenuHamburguesa">
        <div class="menuHamburguesa">

            <div class="linea1 lineaHamb"></div>
            <div class="linea2 lineaHamb"></div>
            <div class="linea3 lineaHamb"></div>

        </div>
    </div>

    <!-- --------------------------FIN MENÚ HAMBURGUESA-------------------------------- -->

    <!-- -------------------------VENTANA "MORE" ANIME-------------------------------- -->

    <div class="opciones">
        <div class="addList"><p>Añadir a lista</p></div>
        <div class="detalles">
            <p>Detalles</p>
        </div>
    </div>

    <!-- -------------------------FIN VENTANA "MORE" ANIME-------------------------------- -->

    <!-- ---------------------------LISTAS ANIME------------------------------------ -->

    <div class="misListas" id="misListas">
        <h3>Mis listas</h3>
        <div class="contenedorMisListas" id="contenedorMisListas"></div>
        <div class="masButton"><i class="fa-solid fa-circle-plus"></i></div>
    </div>

    <!-- --------------------------FIN LISTAS ANIME--------------------------------------- -->
    <header>

        <a href="index.php">

            <img src="./img/logo.png" alt="Logo" class="logo">
            <p>Yumeanime</p>

        </a>

    </header>
    <nav>

        <div class="botonNav"><p>Top Noticias</p></div>

        <div class="botonNav"><a href="./view/listasGenerales.php">Top Listas</a></div>

        <div class="botonNav"><a href="./view/directorio.php">Directorio Anime</a></div>

        <form action="./view/busqueda.php">

            <input type="text" name="buscador" id="buscador" class="buscador" placeholer="Buscar...">
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
    </nav>

    <!-- --------------------COPIAR HASTA AQUÍ EN TODOS------------------------- -->

    <main>

        <select name="categoria" id="categoria">

            <!-- <option value="valorX"> ValorX </option> -->

        </select>

        <select name="orden" id="orden">

            <!-- <option value="valorX"> ValorX </option> -->

        </select>

        <div class="contenedorAnimes">

        </div>
        <div class="noticiasPopu" id="noticiasPopu">
            <h3>Noticias Populares</h3>
        </div>

    </main>
    <footer>

        <p>Creador: Raúl Fernández Arce</p>

    </footer>
</body>
</html>