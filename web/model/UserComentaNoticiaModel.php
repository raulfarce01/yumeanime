<?php

    class UserComentaNoticia{

        private $idUser;
        private $idNoticia;
        private $textoN;

        public function __construct($idUser, $idNoticia, $textoN){

            $this->idUser = $idUser;
            $this->idNoticia = $idNoticia;
            $this->textoN = $textoN;

        }

        function creaComentario($idUser, $idNoticia, $texto){

            try{
                $db = new mysqli('localhost', "yumeanime", "123456", "yumeanimedb");
    
                if($db->connect_errno){
    
                    throw new Exception("No se ha podido acceder a la base de datos");
    
                }
            }catch(Exception $ex){
    
                echo "Excepción $ex <br>";
    
            }

            $db->query("INSERT INTO userComentaNoticia(idUser, idNoticia, textoN) VALUES($idUser, $idNoticia, '$texto')");

            $db->close();

        }

        function traeComentarios($idNoticia){

            $comentarios = [];
            $cont = 0;

            try{
                $db = new mysqli('localhost', "yumeanime", "123456", "yumeanimedb");
    
                if($db->connect_errno){
    
                    throw new Exception("No se ha podido acceder a la base de datos");
    
                }
            }catch(Exception $ex){
    
                echo "Excepción $ex <br>";
    
            }

            $consulta = $db->query("SELECT c.textoN, u.nombre FROM userComentaNoticia c NATURAL JOIN user WHERE idNoticia = $idNoticia");

            while($recorre = $consulta->fetch_object()){

                $comentarios[$cont] = array(
                    "autor" => $recorre[1],
                    "texto" => $recorre[0]
                );

                $cont++;

            }

            $db->close();

            return $comentarios;

        }

    }

?>