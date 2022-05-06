<?php

    class Lista{

        private $nombre;
        private $desc;
        private $idUser;
    
        public function __construct($nombre, $idUser, $desc){
    
            $this->nombre = $nombre;
            $this->idUser = $idUser;
            $this->desc = $desc;
            
        }

        function creaLista($idUser, $nombre, $desc){

            try{
                $db = new mysqli('localhost', "yumeanime", "123456", "yumeanimedb");
    
                if($db->connect_errno){
    
                    throw new Exception("No se ha podido acceder a la base de datos");
    
                }
            }catch(Exception $ex){
    
                echo "Excepción $ex <br>";
    
            }

            $db->query("INSERT INTO lista(nombreL, descL, idUser) VALUES ('$nombre', '$desc', $idUser)");

        }

        function montaCabecerasLista($idUser){

            $listas = [];
            $cont = 0;

            try{
                $db = new mysqli('localhost', "yumeanime", "123456", "yumeanimedb");
    
                if($db->connect_errno){
    
                    throw new Exception("No se ha podido acceder a la base de datos");
    
                }
            }catch(Exception $ex){
    
                echo "Excepción $ex <br>";
    
            }

            $consulta = $db->query("SELECT u.nombre, l.nombreL, l.descL, l.idUser, l.fechaCreacL FROM lista l NATURAL JOIN user u WHERE l.idUser = $idUser");

            while($recorreConsulta = $consulta->fetch_object()){

                $lista = array(
                    "nombre" => $recorreConsulta[1],
                    "desc" => $recorreConsulta[2],
                    "autor" => $recorreConsulta[0],
                    "fecha" => $recorreConsulta[4]
                );

                $listas[$cont] = $lista;
                $cont++;

            }

            return $listas;

        }

    }

?>