<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// This is for the creation of a new user
Route::get('/create', [UserController::class, 'creatUserPage']);
Route::post('/storeNewlyCreatedUserDetails', [UserController::class, 'createUser']);

//This is for editing an already existing user's details
Route::get('/edit', [UserController::class, 'editPage']);
Route::get('/updateUser/{id}', [UserController::class, 'showWhatWeWantToEdit']);
Route::post('/storeEditedUserDetails', [UserController::class, 'editUsers']);
