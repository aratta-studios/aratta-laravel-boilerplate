<?php

namespace App\Http\Controllers\API;

use App\Example;
use App\Http\Helpers\InputHelper;
use App\Http\Helpers\ResponseHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class ExampleAppController extends Controller
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

    /**
     * @param Request $request
     * @return void
     */
    public function createExampleUser(Request $request)
    {
        InputHelper::inputChecker(
            $request,
            [
                $request->field_one,
                $request->field_two
            ],
            function (Request $request) {

                Example::createExample($request->get('field_one'), $request->get('field_two'));

                ResponseHelper::jsonResponse(null, Response::HTTP_OK, config('messages.success'))->send();

            });
    }

    /**
     * @param Request $request
     * @return void
     */
    public function editExampleProfile(Request $request)
    {
        InputHelper::inputChecker(
            $request,
            [
                $request->field_one,
                $request->field_two
            ],
            function (Request $request) {

                Example::updateExample($request->User()->id, $request->get('field_one'), $request->get('field_two'));

                ResponseHelper::jsonResponse(null, Response::HTTP_OK, config('messages.success'))->send();

            }
        );
    }


    /**
     * @param Request $request
     * @return void
     */
    public function getExample(Request $request)
    {
        InputHelper::inputChecker(
            $request,
            null,
            function (Request $request) {

                $example=Example::getExample($request->User()->id);

                ResponseHelper::jsonResponse(null, Response::HTTP_OK, $example)->send();

            }
        );
    }


    /**
     * @param Request $request
     * @return void
     */
    public function getExamplesList(Request $request)
    {
        InputHelper::inputChecker(
            $request,
            [
                $request->offset
            ],
            function (Request $request) {

                $examples = Example::getExamples($request->get('offset'));

                ResponseHelper::jsonResponse(null, Response::HTTP_OK, $examples)->send();

            }
        );

    }

}
