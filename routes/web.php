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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::Redirect('/', 'login');
// Route::get('login', function() {
//     return 'Login Page';
// });

// Route::get('login', function() {
//     return '<a href="about">About</a>';
// });

// Route::get('about', function() {
//     return 'About Page';
// });

// Route::get('greeting', function() {
//     $name = "reja";
//     $age = '29';
//     return view('greeting', compact('name', 'age'));
// });

// Route::get('greeting', function() {
//     $name = "reja";
//     $age = 29;
//     $gender = 'male';
//     return view('greeting', ['name' => $name], ['age' => $age], ['gender' => $gender]);
// });

Route::get('greeting', function() {
    $name = "reja";
    $age = 29;
    $gender = 'male';
    return view('greeting')
                ->with('name', $name)
                ->with('age', $age)
                ->with('gender', $gender);
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
// Route::view('greeting', 'greeting');

Route::get('test', function() {
    return view('admin.profile');
});

