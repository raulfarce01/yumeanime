<?php

$link =  "https://api.jikan.moe/v4/anime/523/full"; 

//'Authorization: Bearer <' . $key . '>',
/*$headers = array(
    grant_type => 'password',
    username => 'raulito72001@gmail.com',
    password => 'julio2001'
);*/

$ch = curl_init();

//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

//$json = json_decode($response);

//echo $response, "<br>";
//echo $response["data"];
//var_dump($response);
$animes = json_decode($response, true);

// echo $animes["data"]["title"];

//var_dump($animes["data"]);
//echo count($animes["data"]);
echo $animes["data"]["images"]["jpg"]["large_image_url"];
var_dump($animes["data"]["images"]["jpg"]["large_image_url"]);

/*for($i=0; $i<count($animes); $i++){
    $animes[$i]["data"]["title"];
}*/

?>