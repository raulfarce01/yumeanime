<?php

//eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjE4MTIiLCJuYmYiOjE2NTIzNjA3MDYsImV4cCI6MTY1NDk1MjcwNiwiaWF0IjoxNjUyMzYwNzA2fQ.ApUPWyUu7VIUY1Sd5Hkr1fs3aJD1WI0PH4yReJ_Cpic

//  curl -i https://api.aniapi.com/v1/user_story -H "Authorization: Bearer <YOUR_JWT>"

        $cont = 0;
        $array = [];
        //$key = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjE4MTIiLCJuYmYiOjE2NTIzNjA3MDYsImV4cCI6MTY1NDk1MjcwNiwiaWF0IjoxNjUyMzYwNzA2fQ.ApUPWyUu7VIUY1Sd5Hkr1fs3aJD1WI0PH4yReJ_Cpic"
        ;
        $key = "XQAWglMRCodMO1Zsdvzyxful187oPLDghHKlPiuie4H24BNL0MVnR7YoBgqLoWP";
        //$key = "STmF2J2CfXaCVfe56MoRoQc4oyeu9SvomTVKmHWYEgKRA2wmgMS4DDswBnQPU09";
        $query = $_GET['query'];
        $page = $_GET['page'];
        //$link =  "https://api.aniapi.com/v1/user_story"; 
        $link =  "localhost/yumeanime/web/WebAPI"; 

        //'Authorization: Bearer <' . $key . '>',
        $headers = array(
            'Authorization: Bearer ' . $key,
        );

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $response = curl_exec($ch);

        //echo json_decode($response);
        var_dump($response);
        //$data = isset($response) ? json_decode($response) : "Negativo";
        //echo json_decode($data);
        //var_dump($data);
        //var_dump($response);
?>