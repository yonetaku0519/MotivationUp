<?php
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 
Route::post('/login', 'LoginController@login');
Route::post('/logout', 'LoginController@logout');