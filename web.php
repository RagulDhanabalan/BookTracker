<?php

use App\Http\Controllers\BookTrackerController;
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

// for showing index page
Route::get('index',[BookTrackerController::class, 'index']);

//for creating new books formpage
Route::get('create-book-form',[BookTrackerController::class, 'create_book_form']);

//for creating new reader formpage
Route::get('create-reader-form',[BookTrackerController::class, 'create_reader_form']);

//for creating new takeout formpage
Route::get('create-takeout-form',[BookTrackerController::class, 'create_takeout_form']);

//for creating new book details into database
Route::post('create-book',[BookTrackerController::class, 'create_book']);

//for creating new reader details into the database
Route::post('create-reader',[BookTrackerController::class, 'create_reader']);

//for creating new takeout details into the database
Route::post('create-takeout',[BookTrackerController::class, 'create_takeOut']);

// for showing all books table
Route::get('all-books-table', [BookTrackerController::class, 'all_books']);
