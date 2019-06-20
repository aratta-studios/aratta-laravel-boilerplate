<?php

$val = getopt(null, ["name:"]);


if (!empty($val["name"])) {
    $fp = fopen("./app/Http/Controllers/API/" . $val["name"] . ".php", "wb");
    if ($fp == false) {
        //do debugging or logging here
    } else {
        fwrite($fp, '<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

class ' . $val["name"] . ' extends Controller
{
    /*
     *  our functions snippet

    public function exampleFunction(Request $request)
    {
        InputHelper::inputChecker(
            $request,
            [
                $request->field_one,
                $request->field_two,
                .
                .
                .
            ],
            function (Request $request) {
                // input is correct do something
        });
    }
    */

}
');
        fclose($fp);
    }
} else {
    print_r("Please enter your controller name via create:ControllerName");
}