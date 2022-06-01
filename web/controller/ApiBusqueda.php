<?php

class ApiBusqueda{

    /* 
    
        Función para probar si la conexión a la API se realiza con éxito
    
    */
    public static function conectaApi(){

        $key = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjE4MTIiLCJuYmYiOjE2NTIzNjA3MDYsImV4cCI6MTY1NDk1MjcwNiwiaWF0IjoxNjUyMzYwNzA2fQ.ApUPWyUu7VIUY1Sd5Hkr1fs3aJD1WI0PH4yReJ_Cpic"
        ;
        $query = $_GET['query'];
        $page = $_GET['page'];
        //$link =  "https://api.aniapi.com/v1/user_story"; 
        $link =  "https://api.aniapi.com/v1/auth/me"; 

        //'Authorization: Bearer <' . $key . '>',
        $headers = array(
            'Authorization: Bearer ' . $key,
        );

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $response = curl_exec($ch);

    }

    /* 
    
        Función que crea la lista de los géneros de los animes para introducirlos en el select del directorio
    
    */
    public static function listaGenerosAnime(){

        //$key = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjE4MTIiLCJuYmYiOjE2NTIzNjA3MDYsImV4cCI6MTY1NDk1MjcwNiwiaWF0IjoxNjUyMzYwNzA2fQ.ApUPWyUu7VIUY1Sd5Hkr1fs3aJD1WI0PH4yReJ_Cpic"
        ;
        $query = $_GET['query'];
        $page = $_GET['page'];
        //$link =  "https://api.aniapi.com/v1/user_story"; 
        $link =  "https://api.jikan.moe/v4/genres/anime"; 

        //'Authorization: Bearer <' . $key . '>',
        $headers = array(
            'Authorization: Bearer ' . $key,
        );

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $response = curl_exec($ch);

        //var_dump($response);
        //var_dump(json_decode($response, true));

        $generos = json_decode($response, true);

        //echo count($generos["data"]);

        for($i = 0; $i < count($generos["data"]); $i++){

            echo "<option name='".$generos["data"][$i]["name"]."' value='".$generos["data"][$i]["mal_id"]."'>".$generos["data"][$i]["name"]."</option>";

        }

    }

    /*
    
        Función para imprimir en el directorio los animes de una página y género seleccionados en la API
        @param $genre especifica el género sobre el que se buscan animes, si está vacío, busca todo
        @param $page especifica la página dentro del JSON de la API donde se encuentran los animes
    
    */
    public static function listaAnimes($genre = '', $page = 1){
        
        //$key = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjE4MTIiLCJuYmYiOjE2NTIzNjA3MDYsImV4cCI6MTY1NDk1MjcwNiwiaWF0IjoxNjUyMzYwNzA2fQ.ApUPWyUu7VIUY1Sd5Hkr1fs3aJD1WI0PH4yReJ_Cpic"
        ;
        //$key = "XQAWglMRCodMO1Zsdvzyxful187oPLDghHKlPiuie4H24BNL0MVnR7YoBgqLoWP";
        $query = $_GET['query'];
        //$link =  "https://api.aniapi.com/v1/user_story"; 

        //echo $page;

        if($genre == ''){

            $link =  "https://api.jikan.moe/v4/anime?page=$page"; 

        }else{

            $link =  "https://api.jikan.moe/v4/anime?page=$page&genres=$genre"; 

        }
        

        //'Authorization: Bearer <' . $key . '>',
        $headers = array(
            'Authorization: Bearer ' . $key,
        );

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $response = curl_exec($ch);

        //var_dump($response);
        //var_dump(json_decode($response, true));

        $animes = json_decode($response, true);

        //var_dump(count($animes["data"]["documents"])) ."<br>";

        /*echo $animes["data"]["current_page"];
        $animes["data"]["current_page"] = $page;*/

        for($i = 0; $i < count($animes["data"]); $i++){

            echo "<div class='anime animeA'>";
            echo "<a href='./anime.php?idAnime=".$animes["data"][$i]["mal_id"]."' class=' colorHeaderLetra'><div class='imagen contenedorAzul contenedorImagen'><img src='".$animes["data"][$i]["images"]["jpg"]["large_image_url"]."' class='imgAnime'></div></a>";
            echo "<a href='./anime.php?idAnime=".$animes["data"][$i]["mal_id"]."' class=' colorHeaderLetra'><div class='titAnime titulo'><p>".
            $animes["data"][$i]["title"]
            ."</p></a><i class='fa-solid fa-ellipsis-vertical'></i></div>";
            echo "</div>";

        }

    }

    /**
     * 
     *  Función para mostrar en la página dedicada a las búsquedas los animes con el título que contiene la cadena de caracteres introducida
     * @param cadena contiene el texto que vamos a buscar en el título de los animes de la API 
     * 
     */
    public static function busquedaDedicadaAnime($cadena){

        //$key = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjE4MTIiLCJuYmYiOjE2NTIzNjA3MDYsImV4cCI6MTY1NDk1MjcwNiwiaWF0IjoxNjUyMzYwNzA2fQ.ApUPWyUu7VIUY1Sd5Hkr1fs3aJD1WI0PH4yReJ_Cpic"
        ;
        $query = $_GET['query'];
        $page = $_GET['page'];
        //$link =  "https://api.aniapi.com/v1/user_story"; 

        
            $link =  "https://api.jikan.moe/v4/anime?q=$cadena"; 
            
        

        //'Authorization: Bearer <' . $key . '>',
        $headers = array(
            'Authorization: Bearer ' . $key,
        );

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $response = curl_exec($ch);

        $animes = json_decode($response, true);

        //var_dump($response["data"]["documents"]);

        for($i = 0; $i < count($animes["data"]); $i++){

            echo "
            <div class='noticia busquedaDedicada'>
            <a href='./anime.php?idAnime=".$animes["data"][$i]["mal_id"]."' class=' colorFondo titulo'>
                <div class='imagen contenedorAzul'>
                
                    <img src='".$animes["data"][$i]["images"]["jpg"]["large_image_url"]."'></img>

                </div>
                </a>

                <div class='titulo tituloBusqueda'>
                <a href='./anime.php?idAnime=".$animes["data"][$i]["mal_id"]."' class=' colorFondo titulo'>
                    <p class='letraNegra'>".$animes["data"][$i]["title"]."</p>
                </a>
                    <i class='fa-solid fa-ellipsis-vertical letraNegra'></i>
                
                </div>
            
            </div>
        
        ";

        }
    }

    /**
     * 
     * Función para buscar los 6 primeros animes que aparecen en la API con la cadena de caracteres introducida para colocarlos en el cuadro de búsqueda al realizar una
     * @param cadena contiene la búsqueda del usuario 
     * 
     */
    public static function colocaAnimes($cadena){

        //$key = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjE4MTIiLCJuYmYiOjE2NTIzNjA3MDYsImV4cCI6MTY1NDk1MjcwNiwiaWF0IjoxNjUyMzYwNzA2fQ.ApUPWyUu7VIUY1Sd5Hkr1fs3aJD1WI0PH4yReJ_Cpic"
        ;
        $query = $_GET['query'];
        $page = $_GET['page'];
        //$link =  "https://api.aniapi.com/v1/user_story"; 

        
            $link =  "https://api.jikan.moe/v4/anime?q=$cadena"; 
            
        

        //'Authorization: Bearer <' . $key . '>',
        $headers = array(
            'Authorization: Bearer ' . $key,
        );

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $response = curl_exec($ch);

        $animes = json_decode($response, true);

        //var_dump($response["data"]["documents"]);

        for($i = 0; $i < 6; $i++){

            if(!is_null($animes["data"][$i]['images']["jpg"]["large_image_url"])){

                echo "
                    <a href='./anime.php?idAnime=".$animes["data"][$i]["mal_id"]."' class='colorFondo noticiaA'>
                        <div class='noticia'>
                        
                            <div class='imagen imagenAnime'>
                            
                                <img src='".$animes["data"][$i]['images']["jpg"]["large_image_url"]."'></img>
            
                            </div>
            
                            <div class='titulo tituloBusqueda'>
                            
                                <p>".$animes["data"][$i]["title"]."</p>
                            
                            </div>
                        
                        </div>
                    </a>
                ";

            }else{

                echo "<div class='noticiaA'></div>";

            }

        }

    }

    /**
     * 
     * Función para colocar el anime seleccionado en su página dedicada con todos sus datos
     * @param idAnime contiene el entero que usa la API para listar los animes
     * 
     */
    public static function buscaAnimeDedicado($idAnime){

        //$key = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjE4MTIiLCJuYmYiOjE2NTIzNjA3MDYsImV4cCI6MTY1NDk1MjcwNiwiaWF0IjoxNjUyMzYwNzA2fQ.ApUPWyUu7VIUY1Sd5Hkr1fs3aJD1WI0PH4yReJ_Cpic"
        ;
        $query = $_GET['query'];
        $page = $_GET['page'];
        //$link =  "https://api.aniapi.com/v1/user_story"; 

        //echo "<script>console.log($idAnime)</script>";

        
            //$link =  "https://api.aniapi.com/v1/anime?anilist_id=$idAnime&nsfw=true&with_episodes=false"; 
            $link = "https://api.jikan.moe/v4/anime/$idAnime/full";
            
        

        //'Authorization: Bearer <' . $key . '>',
        $headers = array(
            'Authorization: Bearer ' . $key,
        );

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $response = curl_exec($ch);

        $anime = json_decode($response, true);

        //var_dump($response["data"]["documents"]);
        //var_dump($anime["data"]["documents"][0]["genres"]);

        //var_dump($anime);
        //echo count($anime["data"]["documents"][0]["genres"]);

            echo "
            <div class='contenedor'>

            <div class='seccionIzq'>
                <div class='imagenAnime contenedorAzul' id='imagenAnime'><img src='".$anime["data"]["images"]["jpg"]["large_image_url"]."'></div>
                <div class='contenedorCategorias' id='contenedorCategorias'>";
                for($i = 0; $i < count($anime["data"]["genres"]); $i++){
                    echo "<div class='cat colorHeader colorFondo'>".$anime["data"]["genres"][$i]["name"]."</div>";
                }
                echo "
                </div>
            </div>
            <div class='textoAnime'>
                <div class='titAnime titulo' id='titAnime'>".$anime["data"]["title"]."</div>
                <div class='descAnime texto'>".$anime["data"]["synopsis"]."</div>
                <div class='addButton pointer' id='addAnimeLista'>
                    <div class='masButton'><i class='fa-solid fa-circle-plus colorHeaderLetra'></i></div>
                    <p class='colorFondo'>Añadir a Lista</p>
                </div>
            </div>
        
        </div>";
        
        // <script src='../js/abreContenedoresAnime.js'></script>
        // <script src='../js/recogeContAnime.js'></script>
    }

}

?>