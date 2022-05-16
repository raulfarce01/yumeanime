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

        /*
        
            Función para subir una lista nueva a la base de datos
            @param $idUser, que contiene la clave del usuario para asignarle la lista
            @param $nombre contiene el nombre que se va a dar a la lista
            @param $desc contiene la descripción de la lista
        
        */
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

        /*
        
            Función para crear las cabeceras de la lista para la página del perfil, en el apartado "Mis listas".
            @param $idUser contiene la clave del usuario

            @return $listas, que contiene toda la información de las listas para montar la cabecera
        
        */
        function montaCabecerasListaPerfil($idUser){

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

            $consulta = $db->query("SELECT u.nombre AS nombre, l.nombreL as nombreL, l.descL as descL, l.idUser as idUser, l.fechaCreacL as fechaCreac FROM lista l NATURAL JOIN user u WHERE l.idUser = $idUser");

            while($recorreConsulta = $consulta->fetch_object()){

                $lista = array(
                    "nombre" => $recorreConsulta->nombreL,
                    "desc" => $recorreConsulta->descL,
                    "autor" => $recorreConsulta->nombre,
                    "fecha" => $recorreConsulta->fechaCreac
                );

                $listas[$cont] = $lista;
                $cont++;

            }

            return $listas;

        }

        /*
        
            Función para crear las cabeceras de la lista para la página específica de la misma.
            @param $idLista contiene la clave de la lista

            @return $listas, que contiene toda la información de las listas para montar la cabecera
        
        */

        function montaCabecerasLista($idLista){

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

            $consulta = $db->query("SELECT u.nombre, l.nombreL, l.descL, l.idUser, l.fechaCreacL FROM lista l NATURAL JOIN user u WHERE l.idLista = $idLista");

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