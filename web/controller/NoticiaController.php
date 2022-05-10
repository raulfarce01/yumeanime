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

    public static function noticiaDedicada($idNoticia){

        $noticiaModel = new Noticia();
        $parrafoModel = new Parrafo();
        $imagenModel = new Imagen();

        $titular = $noticia->sacaTitularNoticia($idNoticia);
        $parrafos = $parrafoModel->sacaParrafosNoticia();
        $imagenes = $imagenModel->sacaImagenesNoticia();

        echo "<div class='noticia'>

                <div class='titulo'>
                
                    <div class='autorFecha'>
                        <div class='autorLista texto' id='autorLista'><i class='fa-solid fa-user colorHeaderLetra'></i><p>";
                
                        $titular["autor"];
                
        echo            "</p>
                        </div>
                        <div class='fechaLista texto' id='fechaLista'><i class='fa-solid fa-clock colorHeaderLetra'></i><p>";
                    
                            $titular["fecha"];
                    
        echo            "</p>
                        </div>
                    </div>
                </div>;";

            if(count($parrafos) >= count($imagenes)){

        echo    "<div class='cuerpoNoticia'>";

        echo        "<p>
        
                        $parrafos[0]
        
                    </p>
                    <img width='100' src='data:image/png;base64, ".base64_encode($imagen[0])."'>
                    
                    </img>";
        
        for($i = 1; $i < count($parrafos); $i++){

            echo "<p>$parrafos[$i]</p>";

        }
        
        echo    "</div>";

            }

        echo "</div>";
    }

}

?>