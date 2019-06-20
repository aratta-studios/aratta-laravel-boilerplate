<?php


namespace App\Http\Helpers;


class CedarMapHelper
{
    public static function getDirectionsData($startCoords, $endCoords)
    {

        $headers = array(
            'Content-Type: application/json; charset=utf-8',
        );

        $url = "https://api.cedarmaps.com/v1/direction/cedarmaps.driving/".$startCoords->latitude.",".$startCoords->longitude.";".$endCoords->latitude.",".$endCoords->longitude."?access_token=ed07895610d88f5210e17503f067f488d711cc14";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);


        return json_decode($response);
    }

}
