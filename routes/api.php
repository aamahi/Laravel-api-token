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


Route::get('/artical',[ArticalController::class],'getAllAritcals');
Route::get('/artical/{id}',[ArticalController::class],'getAritcals');
Route::post('/artical',[ArticalController::class],'createAritcal');
Route::put('/artical/{id}',[ArticalController::class],'updateAritcal');
Route::delete('/artical/{id}',[ArticalController::class],'deleteAritcal');


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
