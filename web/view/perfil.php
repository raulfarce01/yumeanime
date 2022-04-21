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

        <div class="contenedorPerfil" id="contenedorPerfil">

            <div class="fotoPerfil"></div>

            <input type="text" name="nombre" id="nombre" class="nombre">
            <input type="text" name="alias "class="alias" id="alias">
            <input type="text" name="desc "class="desc" id="desc">

            <div class="saveButton"><p>Guardar</p></div>
        </div>

        <div class="misListas">
            <h3>Mis listas</h3>
            <div class="contenedorListas" id="contenedorListas">

            </div>
            <div class="masButton"><i class="fa-solid fa-circle-plus"></i></div>
            <p>Todas las listas</p>
        </div>

    </main>
    <footer>

        <p>Creador: Raúl Fernández Arce</p>

    </footer>
</body>
</html>