<?php


namespace App\Http\Helpers;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class InputHelper
{
    /**
     * @param $request
     * @param $items
     * @param $function
     * @return JsonResponse
     */
    public static function inputChecker($request, $items, $function)
    {
        try {
            if (!empty($items)) {

                if (ArrayHelper::arrayIsset($items)) {

                    $function($request);

                } else {

                    ResponseHelper::jsonResponse(null, Response::HTTP_BAD_REQUEST, config('messages.fail'))->send();

                }

            } else {

                $function($request);

            }
        } catch (\Exception $exception) {

            ResponseHelper::jsonResponse($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, null)->send();

        }
    }

}