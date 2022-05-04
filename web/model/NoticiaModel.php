<?php

class Noticia{

    private $titulo;
    private $idUser;
    private $parrafos;
    private $imagenes;

    public function __construct($titulo, $idUser, $parrafos, $imagenes){

        $this->titulo = $titulo;
        $this->idUser = $idUser;
        $this->parrafos = $parrafos;
        $this->imagenes = $imagenes;

    }

}

?>