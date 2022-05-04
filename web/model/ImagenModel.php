<?php

    class Imagen{

        private $contenido;
        private $idNoticia;

        public function __construct($contenido, $idNoticia){

            $this->idNoticia = $idNoticia;
            $this->contenido = $contenido;

        }

    }

?>