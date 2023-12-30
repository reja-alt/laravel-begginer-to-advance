<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/greetings', function() {
//     return 'Welcome';
// });

// Route::get('greeting/{id}', function($id) {
//     return 'User id is: ' . $id;
// });

// Route::get('test/{name?}', function($name) {
//     return 'test' . $name;
// });

Route::get('user/{name}', function($name) {
    return 'Test';
})->where('name', '[a-z]+');