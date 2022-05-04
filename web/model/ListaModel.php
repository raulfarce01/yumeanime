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

    }

?>