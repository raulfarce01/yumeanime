<?php

class Noticia{

    private $titulo;
    private $idUser;

    public function __construct($titulo = "", $idUser = 0){

        $this->titulo = $titulo;
        $this->idUser = $idUser;

    }

    /*
        
        Función para subir las noticias a la base de datos
        @param $titulo contiene el título de la noticia.
        @param $idUser contiene la clave del usuario al que se le asigna la noticia (autor)
    
    */

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

    /*
        
        Función para obtener la información de la cabecera de la noticia
        @param $idNoticia contiene la clave de la noticia

        @return $montaNoticia es un array que contiene el título, la fecha de creación y el autor de la noticia
    
    */
    function sacaTitularNoticia($idNoticia){

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
        $consulta = $db->query("SELECT n.titulo, n.fechaCreacN, u.nombre FROM noticia n NATURAL JOIN user u WHERE l.idNoticia = $idNoticia");

        if($recorreConsulta = $consulta->fetch_object()){

            $montaNoticia = array(
                "titulo" => $recorreConsulta[0],
                "fecha" => $recorreConsulta[1],
                "autor" => $recorreConsulta[2]
            );

        }

        return $montaNoticia;

    }

    function sacaTitularNoticiaIndex(){

        $cont = 0;

        try{
            $db = new mysqli('localhost', "yumeanime", "123456", "yumeanimedb");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la base de datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }

        $consulta = $db->query("SELECT titulo, fechaCreacN, idNoticia FROM noticia ORDER BY noticia");

        while($recorreConsulta = $consulta->fetch_object()){

            $consultaPar = $db->query("SELECT contenido FROM parrafo WHERE idNoticia = $recorreConsulta->idNoticia");

            $consultaImg = $db->query("SELECT codigo FROM imagen WHERE idNoticia = $recorreConsulta->idNoticia");

            if($parrafo = $consultaPar->fetch_object() && $imagen = $consultaImg->fetch_object()){

                $montaNoticiaIndex[$cont] = array(
                    "titulo" => $recorreConsulta[0],
                    "imagen" => $imagen->codigo,
                    "parrafo" => $parrafo->contenido
                );

            }

            $cont++;

        }

        return $montaNoticiaIndex;

    }

}

?>