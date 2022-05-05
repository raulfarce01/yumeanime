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

    function subeParrafo($parrafos, $idNoticia){

        try{
            $db = new mysqli('localhost', "yumeanime", "123456", "yumeanimedb");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la base de datos");

            }
        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        foreach($parrafos as $contenido){

            $db->query("INSERT INTO parrafo(contenido, idNoticia) VALUES ('$contenido', '$idNoticia')");

        }
    }

}

?>