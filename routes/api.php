<?php

use Illuminate\Http\Request;

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

Route::group([
    'namespace' => 'API',
], function () {
    Route::group([
        'prefix' => 'v1',
        'namespace' => 'V1',
    ], function () {
        Route::get('/users/{id?}', 'UsersController@index');


        /**
         * AUTH API
         */
        Route::middleware('auth:api', 'throttle:60,1')->group(function () {
            Route::match(['put', 'patch'], '/users/{id}', function () {
                return ['wefwefw'];
            });
        });
    });
});