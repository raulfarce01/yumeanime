<?php

class Parrafo{

    private $contenido;
    private $idNoticia;

    public function __construct($contenido, $idNoticia){

        $this->contenido = $contenido;
        $this->idNoticia = $idNoticia;

    }

    //
    // Función para subir los párrafos a la base de datos
    //

    function subeParrafoNoticia($parrafos, $idNoticia){

        try{
            $db = new mysqli('localhost', "yumeanime", "123456", "yumeanimedb");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la base de datos");

            }
        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        foreach($parrafos as $contenido){

            $db->query("INSERT INTO parrafo(contenido, idNoticia) VALUES ('$contenido', $idNoticia)");

        }
    }

    //
    //  Función para extraer los párrafos de la noticia de la db
    //

    function sacaParrafosNoticia($idNoticia){

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

}

?>