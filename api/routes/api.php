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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::group(['middleware' => 'cors'], function(){

    Route::post('login', 'Api\AuthController@login');
    Route::post('refresh_token', function(){
        //return response()->json([],500);
        try {
            $token = JWTAuth::parseToken()->refresh();
            return response()->json(compact('token'));
        }catch (\Tymon\JWTAuth\Exceptions\JWTException $exception){
            return response()->json(['error' => 'token_invalid'],400);
        }
    });
    Route::group(['middleware' => 'jwt.auth'], function(){
        Route::get('times', 'Api\TimesController@index');
        Route::get('user', function () {
            $user = JWTAuth::parseToken()->toUser();

            return response()->json(compact('user'));
        });
    });

});

