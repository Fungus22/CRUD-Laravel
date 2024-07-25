<?php


use App\Http\Controllers\oddsController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

// Perhatikan besar kecil huruf
// Route::get('/', function () {
//     // return view('welcome');

//     echo "Hello world";
// }); 

// Route::get("/odds", "App\Http\Controllers\oddsController@index");
// Route::get("/odds", [oddsController::class, "index"]);

// Route::get("hello/{name}", [oddsController::class, "perkenalan"]);

// Menampilkan Apasaja yang diketik di url selain yang ada diatas
// Route::get("{urlerror}", [oddsController::class, "urlerror"]);


//===============================================================================
Route::get("/index", [TodoController::class, "index"]);

Route::delete("/index/{id}", [TodoController::class, "destroy"]);

//menampil dan menjalankkan tambah
Route::get("/index/create", [TodoController::class, "create"])->name("todo.create");
Route::post("/index", [TodoController::class, "store"])->name("todo.store");

//menampilkan dan menjlanka edit
Route::get("/index/{id}", [TodoController::class, "edit"]);
Route::put("/index/{id}", [TodoController::class, "update"])->name("todo.update");






?>