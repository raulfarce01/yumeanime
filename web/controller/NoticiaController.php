<?php

require_once "../model/NoticiaModel.php";
require_once "../model/ImagenModel.php";

class NoticiaController{

    public static function noticiaIndex(){

        $columna = 1;

        $noticiaModel = new NoticiaModel();

        $noticia = $noticiaModel->sacaTitularNoticiaIndex();

        for($i = 0; $i < 6; $i++){

            echo "<div class='columna$columna' id='columna$columna'>";
            echo "<div class='noticiaIndividual'>
    
            <div class='titulo colorFondo'>";
    
            $noticia[$i]["titulo"];
            
            echo "</div>

            <div class='imagenNoticiaIndividual'><img src='data:image/png;base64, ".base64_encode($noticia[$i]["imagen"])."'></img>
            </div>
            
            <div class'descNoticiaIndividual colorFondo'>";
            
            $noticia[$i]["parrafo"];

            echo "</div></div></div>";

            $columna++;
            
            if($columna > 3){

                $columna = 1;

            }

        }
        
    }

}

?>