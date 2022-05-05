<?php

class Noticia{

    private $titulo;
    private $idUser;

    public function __construct($titulo, $idUser){

        $this->titulo = $titulo;
        $this->idUser = $idUser;

    }

    public function subeNoticia($titulo, $idUser){

        try{
            $db = new mysqli('localhost', "yumeanime", "123456", "yumeanimedb");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la base de datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }

        $db->query("INSERT INTO noticia(titulo, idUser) VALUES ('$titulo', $idUser)");

        $db->close();

    }

    function montaNoticia($idNoticia){

        try{
            $db = new mysqli('localhost', "yumeanime", "123456", "yumeanimedb");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la base de datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }

        $sacaAutor = $db->query("SELECT idUser FROM noticia WHERE idNoticia = $idNoticia");
        $idUser = $sacaAutor->fetch_object();
        $consulta = $db->query("SELECT n.titulo, n.fechaCreacN, u.nombre FROM noticia n NATURAL JOIN user u WHERE u.idUser = $idUser");

        if($recorreConsulta = $consulta->fetch_object()){

            $montaNoticia = array(
                "titulo" => $recorreConsulta[0],
                "fecha" => $recorreConsulta[1],
                "autor" => $recorreConsulta[2]
            );

        }        

    }

    //
    // Función para extraer los párrafos que contiene la noticia
    //

    function sacaParrafos($idNoticia){

        $almacenParrafos = [];
        $cont = 0;

        try{
            $db = new mysqli('localhost', "yumeanime", "123456", "yumeanimedb");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la base de datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }

        $sacaParrafos = $db->query("SELECT contenido FROM parrafo WHERE idNoticia = $idNoticia");

        while($parrafo = $sacaParrafos->fetch_object()){

            $almacenParrafos[$cont] = $parrafo;
            $cont++;

        }

        $db->close();

        return $almacenParrafos;

    }

    //
    // Función para extraer las imágenes asignadas a una noticia
    //

    function sacaImagenes($idNoticia){

        $cont = 0;
        $almacenImagenes = [];

        try{
            $db = new mysqli('localhost', "yumeanime", "123456", "yumeanimedb");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la base de datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }

        $sacaImagenes = $db->query("SELECT codigo FROM imagen WHERE idNoticia = $idNoticia");

        while($imagen = $sacaImagenes->fetch_object()){

            $almacenImagenes[$cont] = $imagen;
            $cont++;

        }

        $db->close();

        return $almacenImagenes;

    }

}

?>