<?php


namespace App\Http\Helpers;


class ArrayHelper
{
    public static function arrayIsset($array){
        $isset = true;
        foreach ($array as $item) {
            if (!isset($item)){
                $isset = false;
            }
        }
        return $isset;
    }
}