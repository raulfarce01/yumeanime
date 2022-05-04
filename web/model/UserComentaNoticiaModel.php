<?php

    class UserComentaNoticia{

        private $idUser;
        private $idNoticia;
        private $comentarioNoticia;

        public function __construct($idUser, $idNoticia, $comentarioNoticia){

            $this->idUser = $idUser;
            $this->idNoticia = $idNoticia;
            $this->comentarioNoticia = $comentarioNoticia;

        }

    }

?>