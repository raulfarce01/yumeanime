<?php

    class Imagen{

        private $contenido;
        private $idNoticia;

        public function __construct($contenido, $idNoticia){

            $this->idNoticia = $idNoticia;
            $this->contenido = $contenido;

        }

        function subeParrafo($codigo, $idNoticia){

            try{
                $db = new mysqli('localhost', "yumeanime", "123456", "yumeanimedb");
    
                if($db->connect_errno){
    
                    throw new Exception("No se ha podido acceder a la base de datos");
    
                }
            }catch(Exception $ex){
    
                echo $ex->getMessage(), "<br>";
    
            }
    
            $imgContent = addslashes(file_get_contents($codigo));    
    
            $db->query("INSERT INTO imagen(codigo, idNoticia) VALUES ('$imgContent', $idNoticia)");    
        }

    }

?>