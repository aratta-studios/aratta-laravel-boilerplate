<?php


namespace App\Http\Helpers;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class UploadHelper
{
    public static function uploadImage( $file, $prefix = 'uploads', $w = 0, $h = 0 ) {

        $day    = Carbon::now()->day;
        $year   = Carbon::now()->year;
        $month  = Carbon::now()->month;
        $folder = "$prefix/$year/$month/$day";
        $image1 = $file->getClientOriginalName();
        $path1  = $folder . '/' . $image1;
        if ( file_exists( $folder ) == false ) {
            $fs = new Filesystem();
            $fs->makeDirectory( $folder, 0755, true );
        }
        $image = Image::make( $file );

        if ( self::endsWith( $image1, 'jpg' ) ) {
            if ( $w && $h ) {
                $image = $image->fit( $w, $h );
            }
        }

        $image->save( $path1 );

        return $path1;

    }

    public static function uploadFile( $file, $prefix = 'uploads' ) {

        $day    = Carbon::now()->day;
        $year   = Carbon::now()->year;
        $month  = Carbon::now()->month;
        $folder = "$prefix/$year/$month/$day";
        $image1 =  uniqid() .$file->getClientOriginalName();
        $path1  = $folder . '/'. $image1;
        if ( file_exists( $folder ) == false ) {
            $fs = new Filesystem();
            $fs->makeDirectory( $folder, 0755, true );
        }
        $file->move( $folder, $image1 );

        return "/" . $path1;

    }

    public static function startsWith($haystack, $needle)
    {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }

    public static function endsWith($haystack, $needle)
    {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }

        return (substr($haystack, -$length) === $needle);
    }

}
