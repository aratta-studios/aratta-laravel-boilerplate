<?php


namespace App\Http\Helpers;


class NumbersHelper
{
    public static function toLatinNumber( $string ) {

        //arrays of persian and latin numbers

        $persian_num = array( '۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹' );

        $latin_num = range( 0, 9 );


        $string = str_replace( $persian_num, $latin_num, $string );


        return $string;

    }

    public static function toPersionNummber( $string ) {

        //arrays of persian and latin numbers

        $persian_num = array( '۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹' );

        $latin_num = range( 0, 9 );


        $string = str_replace( $latin_num, $persian_num, $string );


        return $string;

    }

}