<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/339ad83339.js" crossorigin="anonymous"></script>
    <title>Yumeanime</title>
    <link rel="stylesheet" href="../css/general.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Mulish&display=swap" rel="stylesheet">
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

    <header>

        <a href="../index.php">

            <img src="../img/logo.png" alt="Logo" class="logo">
            <p>Yumeanime</p>

        </a>

    </header>

    <!-- --------------------------MENÚ HAMBURGUESA-------------------------------- -->
    
    <input type="checkbox" name="hamburg" id="hamburg" class="checkHamb">
    <div class="contenedorContenedor">
        <div class="contenedorMenuHamburguesa">
        <div class="menuHamburguesa">

            <div class="linea1 lineaHamb"></div>
            <div class="linea2 lineaHamb"></div>
            <div class="linea3 lineaHamb"></div>

        </div>
        </div>
    </div>

    <!-- --------------------------FIN MENÚ HAMBURGUESA-------------------------------- -->    <nav class="nav">

        <div class="textoNav">

            <form action="./view/busqueda.php">

                <input type="text" name="buscador" id="buscador" class="buscador" placeholder="Buscar...">
                <i class="fa-solid fa-magnifying-glass" id="lupaBuscar"></i>

            </form>

            <div class="botonNav listasNav"><a href="./view/listasGeneral.php"><i class="fa-solid fa-list"></i>Listas</a></div>

            <div class="botonNav directorioNav"><a href="./view/directorio.php"><i class="fa-solid fa-folder"></i>Directorio Anime</a></div>

            <div class="editarPerfilMovil botonNav">

                <a href="./view.perfil.php">
                    <i class="fa-solid fa-square-pen"></i>
                    <p>Editar Perfil</p>
                </a>

            </div>

            <div class="listasPerfilMovil botonNav">

                <a href="./view/lista.php">
                    <i class="fa-solid fa-rectangle-list"></i>
                    <p>Mis listas</p>
                </a>

            </div>
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