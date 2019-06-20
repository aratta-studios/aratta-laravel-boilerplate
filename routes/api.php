<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('v1/example/create-example-user', 'API\ExampleAppController@createExampleUser');


Route::middleware('auth:example')->prefix('v1/example')->group(function () {
    Route::post('/edit-example-profile', 'API\ExampleAppController@editExampleProfile');
    Route::post('/get-example', 'API\ExampleAppController@getExample');
    Route::post('/get-examples-list', 'API\ExampleAppController@getExamplesList');
});

Route::get('/login',function(){
    return ('Login Fail !!!');
})->name('login');
