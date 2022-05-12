<?php

require_once "../model/BusquedaModel.php";

class BusquedaController{

    /*

        Función para buscar e imprimir las noticias con los caracteres introducidos
        @see realizaBusquedaNoticia

    */
    public function buscaNoticia($busca){

        $busqueda = new Busqueda();

        $noticias = $busqueda->realizaBusquedaNoticia($busca);

        for($i = 0; $i < count($noticias); $i++){
        
        echo "
        <a href='./noticia.php?idNoticia=".$noticias[$i]['idNoticia']."'>
            <div class='noticia'>
            
                <div class='imagen'>
                
                    <img src='data:image/png;base64, ".base64_encode($noticias[$i]['imagen'])."'></img>

                </div>

                <div class='titulo tituloBusqueda'>
                
                    <p>".$noticias[$i]['titulo']."</p>
                
                </div>
            
            </div>
        <a>
        
        ";
        }

    }

    public function buscaNoticiaGeneral($busca){

        $cont = 0;
        
        $busqueda = new Busqueda();

        $noticias = $busqueda->realizaBusquedaNoticia($busca);

            for($i = 0; $i < 6; $i++){

                echo "
                <a href='./noticia.php?idNoticia=".$noticias[$i]['idNoticia']."' class='colorFondo noticiaA'>
                    <div class='noticia'>
                    
                        <div class='imagen'>
                        
                            <img src='data:image/png;base64, ".base64_encode($noticias[$i]['imagen'])."'></img>
        
                        </div>
        
                        <div class='titulo tituloBusqueda'>
                        
                            <p>".$noticias[$i]['titulo']."</p>
                        
                        </div>
                    
                    </div>
                </a>
                
                ";                
        }

    }

}

?>