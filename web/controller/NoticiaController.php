<?php

require_once "./model/NoticiaModel.php";
require_once "./model/ImagenModel.php";

//require_once(__DIR__."/model/NoticiaModel.php");

class NoticiaController{

    /*

        Función para mostrar las noticias apiladas en el index
        Muestra cada uno de los contenedores de noticias que se mostrarán en el index para poder acceder a la página dedicada

    */
    public static function noticiaIndex(){

        $columna = 1;

        $noticiaModel = new Noticia();

        $noticia = $noticiaModel->sacaTitularNoticiaIndex();

        for($i = 0; $i < 6; $i++){

            echo "<div class='noticiaIndividual contenedorAzul'>

            <form action='./view/noticia.php' method='get'>
            <input type='hidden' name='idNoticia' value='".$noticia[$i]["idNoticia"]."'>
            <div class='noticiaIndividual contenedorAzul'>
            
            <div class='titulo colorFondo'>";
    
            echo $noticia[$i]["titulo"];
            
            echo "</div>

            <div class='imagenNoticiaIndividual'><img class='imagenNoticia' src='data:image/png;base64, ".base64_encode($noticia[$i]["imagen"])."'></img>
            </div>
            
            <div class'descNoticiaIndividual colorFondo'>";
            
            //$noticia[$i]["parrafo"];

            echo "</div></div></form></div>";

        }
        
    }

    /*
    
        Función para crear una página dedicada de la noticia
        @param $idNoticia contiene un entero con la clave identificadora de la noticia
    
    */
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