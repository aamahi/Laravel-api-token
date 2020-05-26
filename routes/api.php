<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/artical','ArticalController@getAllArticals');
Route::get('/artical/{artical}','ArticalController@getArticals');
Route::middleware('auth:api')->group(function (){
    Route::post('/artical',[ArticalController::class],'createAritcal');
    Route::put('/artical/{id}',[ArticalController::class],'updateAritcal');
    Route::delete('/artical/{id}',[ArticalController::class],'deleteAritcal');

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/create',function (){
    \App\User::forceCreate([
        'name'=>"Fathem Jannat Rapa",
        'email'=>"rapa@mahi.com",
        'password'=>Hash::make('rapamahi'),
    ]);
    \App\User::forceCreate([
        'name'=>"Abdullah Al Mahi",
        'email'=>"mahi@rapa.com",
        'password'=>Hash::make('rapamahi'),
    ]);
});

Route::get("/tokenc",function (){
     $user = \App\User::find(1);
     $user->api_token = Str::random(80);
     $user->save();

    $user = \App\User::find(2);
    $user->api_token = Str::random(80);
    $user->save();
});
