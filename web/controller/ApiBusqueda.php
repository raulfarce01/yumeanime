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
        $page = $_GET['page'];
        //$link =  "https://api.aniapi.com/v1/user_story"; 

        if($genre == ''){

            if($page = ''){
                
            }
            $link =  "https://api.aniapi.com/v1/anime?nsfw=true&with_episodes=false"; 

        }else{

            $link =  "https://api.aniapi.com/v1/anime?genres=$genre&nsfw=true&with_episodes=false"; 

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

            echo "<a href='./anime.php?idAnime=".$animes["data"]["documents"][$i]["anilist_id"]."' class='animeA colorHeaderLetra'><div class='anime'>";
            echo "<div class='imagen contenedorAzul contenedorImagen'><img src='".$animes["data"]["documents"][$i]["cover_image"]."' class='imgAnime'></div>";
            echo "<div class='titAnime titulo'>".
            $animes["data"]["documents"][$i]["titles"]["rj"]
            ."</div>";
            echo "</div></a>";

        }

    }

    public static function buscaNoticiaDedicada($cadena){

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
        <a href='./noticia.php?idNoticia=".$animes["data"]["documents"][$i]["anilist_id"]."' class='busquedaDedicada colorFondo titulo'>
            <div class='noticia contenedorAzul'>
            
                <div class='imagen'>
                
                    <img src='".$animes["data"]["documents"][$i]["cover_image"]."'></img>

                </div>

                <div class='titulo tituloBusqueda'>
                
                    <p>".$animes["data"]["documents"][$i]["titles"]["rj"]."</p>
                
                </div>
            
            </div>
        </a>
        
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

        }

    }

}

?>