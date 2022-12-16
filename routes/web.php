<?php

use App\Http\Controllers\Dashboard\TestController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TestController::class, 'index']);



//Route::get('/', [TestController::class, 'test']);
/*
Route::get('/', [App\Http\Controllers\TestController::class, 'test']);
*/



/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/escribeme', function () {
    return 'Contactame';
})->name('contacto');


Route::get('/custon', function() {
    $msj = "Mensaje desde el servidor";
    $data = ['msj' => $msj, 'edad' => 16];
    return view('custon', $data);
    //return view('custon', ['msj' => $msj, 'edad' => 16]);
});
*/