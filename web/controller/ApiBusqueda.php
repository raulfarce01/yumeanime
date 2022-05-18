<?php

class ApiBusqueda{

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

    public static function listaGenerosAnime(){

        $key = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjE4MTIiLCJuYmYiOjE2NTIzNjA3MDYsImV4cCI6MTY1NDk1MjcwNiwiaWF0IjoxNjUyMzYwNzA2fQ.ApUPWyUu7VIUY1Sd5Hkr1fs3aJD1WI0PH4yReJ_Cpic"
        ;
        $query = $_GET['query'];
        $page = $_GET['page'];
        //$link =  "https://api.aniapi.com/v1/user_story"; 
        $link =  "https://api.aniapi.com/v1/resources/1.0/0"; 

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

        for($i = 0; $i < count($generos["data"]["genres"]); $i++){

            echo "<option name='".$generos["data"]["genres"][$i]."' value='".$generos["data"]["genres"][$i]."'>".$generos["data"]["genres"][$i]."</option>";

        }

    }

    public static function listaAnimes($genre = '', $page = 1){
        
        $key = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjE4MTIiLCJuYmYiOjE2NTIzNjA3MDYsImV4cCI6MTY1NDk1MjcwNiwiaWF0IjoxNjUyMzYwNzA2fQ.ApUPWyUu7VIUY1Sd5Hkr1fs3aJD1WI0PH4yReJ_Cpic"
        ;
        $query = $_GET['query'];
        //$link =  "https://api.aniapi.com/v1/user_story"; 

        //echo $page;

        if($genre == ''){

            $link =  "https://api.aniapi.com/v1/anime?page=$page&nsfw=true&with_episodes=false"; 

        }else{

            $link =  "https://api.aniapi.com/v1/anime?page=$page&genres=$genre&nsfw=true&with_episodes=false"; 

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

        for($i = 0; $i < count($animes["data"]["documents"]); $i++){

            echo "<div class='anime animeA'>";
            echo "<a href='./anime.php?idAnime=".$animes["data"]["documents"][$i]["anilist_id"]."' class=' colorHeaderLetra'><div class='imagen contenedorAzul contenedorImagen'><img src='".$animes["data"]["documents"][$i]["cover_image"]."' class='imgAnime'></div></a>";
            echo "<a href='./anime.php?idAnime=".$animes["data"]["documents"][$i]["anilist_id"]."' class=' colorHeaderLetra'><div class='titAnime titulo'><p>".
            $animes["data"]["documents"][$i]["titles"]["rj"]
            ."</p></a><i class='fa-solid fa-ellipsis-vertical'></i></div>";
            echo "</div>";

        }

    }

    public static function busquedaDedicadaAnime($cadena){

        $key = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjE4MTIiLCJuYmYiOjE2NTIzNjA3MDYsImV4cCI6MTY1NDk1MjcwNiwiaWF0IjoxNjUyMzYwNzA2fQ.ApUPWyUu7VIUY1Sd5Hkr1fs3aJD1WI0PH4yReJ_Cpic"
        ;
        $query = $_GET['query'];
        $page = $_GET['page'];
        //$link =  "https://api.aniapi.com/v1/user_story"; 

        
            $link =  "https://api.aniapi.com/v1/anime?title=$cadena&nsfw=true&with_episodes=false"; 
            
        

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

        for($i = 0; $i < count($animes["data"]["documents"]); $i++){

            echo "
            <div class='noticia busquedaDedicada'>
            <a href='./anime.php?idAnime=".$animes["data"]["documents"][$i]["anilist_id"]."' class=' colorFondo titulo'>
                <div class='imagen contenedorAzul'>
                
                    <img src='".$animes["data"]["documents"][$i]["cover_image"]."'></img>

                </div>
                </a>

                <div class='titulo tituloBusqueda'>
                <a href='./anime.php?idAnime=".$animes["data"]["documents"][$i]["anilist_id"]."' class=' colorFondo titulo'>
                    <p class='letraNegra'>".$animes["data"]["documents"][$i]["titles"]["rj"]."</p>
                </a>
                    <i class='fa-solid fa-ellipsis-vertical letraNegra'></i>
                
                </div>
            
            </div>
        
        ";

        }
    }

    public static function colocaAnimes($cadena){

        $key = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjE4MTIiLCJuYmYiOjE2NTIzNjA3MDYsImV4cCI6MTY1NDk1MjcwNiwiaWF0IjoxNjUyMzYwNzA2fQ.ApUPWyUu7VIUY1Sd5Hkr1fs3aJD1WI0PH4yReJ_Cpic"
        ;
        $query = $_GET['query'];
        $page = $_GET['page'];
        //$link =  "https://api.aniapi.com/v1/user_story"; 

        
            $link =  "https://api.aniapi.com/v1/anime?title=$cadena&nsfw=true&with_episodes=false"; 
            
        

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

            if(!is_null($animes["data"]["documents"][$i]['cover_image'])){

                echo "
            <a href='./anime.php?idAnime=".$animes["data"]["documents"][$i]["anilist_id"]."' class='colorFondo noticiaA'>
                        <div class='noticia'>
                        
                            <div class='imagen imagenAnime'>
                            
                                <img src='".$animes["data"]["documents"][$i]["cover_image"]."'></img>
            
                            </div>
            
                            <div class='titulo tituloBusqueda'>
                            
                                <p>".$animes["data"]["documents"][$i]["titles"]["rj"]."</p>
                            
                            </div>
                        
                        </div>
                    </a>
                ";

            }else{

                echo "<div class='noticia'></div>";

            }

        }

    }

    public static function buscaAnimeDedicado($idAnime){

        $key = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjE4MTIiLCJuYmYiOjE2NTIzNjA3MDYsImV4cCI6MTY1NDk1MjcwNiwiaWF0IjoxNjUyMzYwNzA2fQ.ApUPWyUu7VIUY1Sd5Hkr1fs3aJD1WI0PH4yReJ_Cpic"
        ;
        $query = $_GET['query'];
        $page = $_GET['page'];
        //$link =  "https://api.aniapi.com/v1/user_story"; 

        //echo "<script>console.log($idAnime)</script>";

        
            //$link =  "https://api.aniapi.com/v1/anime?anilist_id=$idAnime&nsfw=true&with_episodes=false"; 
            $link = "https://api.aniapi.com/v1/anime?anilist_id=$idAnime&nsfw=true&with_episodes=false";
            
        

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
                <div class='imagenAnime contenedorAzul' id='imagenAnime'><img src='".$anime["data"]["documents"][0]["cover_image"]."'></div>
                <div class='contenedorCategorias' id='contenedorCategorias'>";
                for($i = 0; $i < count($anime["data"]["documents"][0]["genres"]); $i++){
                    echo "<div class='cat colorHeader colorFondo'>".$anime["data"]["documents"][0]["genres"][$i]."</div>";
                }
                echo "
                </div>
            </div>
            <div class='textoAnime'>
                <div class='titAnime titulo' id='titAnime'>".$anime["data"]["documents"][0]["titles"]["rj"]."</div>
                <div class='descAnime texto'>".$anime["data"]["documents"][0]["descriptions"]["en"]."</div>
                <div class='addButton pointer' id='addAnimeLista'>
                    <div class='masButton'><i class='fa-solid fa-circle-plus colorHeaderLetra'></i></div>
                    <p class='colorFondo'>Añadir a Lista</p>
                </div>
            </div>
        
        </div>";
        
        // <script src='../js/abreContenedoresAnime.js'></script>
        // <script src='../js/recogeContAnime.js'></script>
    }

    public static function recogeAnimesLista($idLista){

        

    }

}

?>