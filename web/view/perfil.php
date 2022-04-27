<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/339ad83339.js" crossorigin="anonymous"></script>
    <title>Yumeanime</title>
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/perfil.css">
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

    <div class="topPage">

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

        <!-- --------------------------FIN MENÚ HAMBURGUESA-------------------------------- -->

        <nav class="nav">

            <div class="textoNav">

                <div class="botonesNav">
                    <div class="botonLoginNav">
                        <p>Login</p>
                    </div>
                    <div class="botonRegistroNav">
                        <p>Registro</p>
                    </div>
                </div>

                <form action="./busqueda.php">

                    <input type="text" name="buscador" id="buscador" class="buscador" placeholder="Buscar...">
                    <i class="fa-solid fa-magnifying-glass" id="lupaBuscar"></i>

                </form>

                <div class="botonNav listasNav"><a href="./listasGeneral.php"><i class="fa-solid fa-list"></i>Listas</a></div>

                <div class="botonNav directorioNav"><a href="./directorio.php"><i class="fa-solid fa-folder"></i>Directorio Anime</a></div>

                <div class="editarPerfilMovil botonNav">

                    <a href="./perfil.php">
                        <i class="fa-solid fa-square-pen"></i>
                        <p>Editar Perfil</p>
                    </a>

                </div>

                <div class="listasPerfilMovil botonNav">

                    <a href="./lista.php">
                        <i class="fa-solid fa-rectangle-list"></i>
                        <p>Mis listas</p>
                    </a>

                </div>
            </div>
        </nav>

    </div>


    <!-- --------------------COPIAR HASTA AQUÍ EN TODOS------------------------- -->

    <main>

        <div class="contenedorPropio" id="contenedorPropio">

            <div class="fotoPerfil"></div>

            <div class="inputs">
                <input type="text" name="nombre" id="nombre" class="nombre texto">
                <input type="text" name="alias "class="alias texto" id="alias">
                <input type="text" name="desc "class="desc texto" id="desc">

                <div class="saveButton texto" id="saveButton"><p>Guardar</p></div>
            </div>
            
        </div>

        <div class="misListas">
            <p class="titulo">Mis listas</p>
            <div class="contenedorListas" id="contenedorListas">
                <div class="masButton"><i class="fa-solid fa-circle-plus"></i></div>
            </div>
            <p class="todasListas">Todas las listas</p>
        </div>

    </main>
    <footer>

        <p>Creador: Raúl Fernández Arce</p>

    </footer>
</body>
</html>