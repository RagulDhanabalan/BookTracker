<?php

use App\Http\Controllers\BookTrackerController;
use App\Models\Book;
use App\Models\Reader;
use App\Models\Takeout;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;
// use Illuminate\Support\Facades\Response;

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
Route::get('index', [BookTrackerController::class, 'index']);

//for creating new books formpage
Route::get('create-book-form', [BookTrackerController::class, 'create_book_form']);

//for creating new reader formpage
Route::get('create-reader-form', [BookTrackerController::class, 'create_reader_form']);

//for creating new takeout formpage
Route::get('create-takeout-form', [BookTrackerController::class, 'create_takeout_form']);

//for creating new book details into database
Route::post('create-book', [BookTrackerController::class, 'create_book']);

//for creating new reader details into the database
Route::post('create-reader', [BookTrackerController::class, 'create_reader']);

//for creating new takeout details into the database
Route::post('create-takeout', [BookTrackerController::class, 'create_takeOut']);

// for showing all books table
Route::get('all-books-table', [BookTrackerController::class, 'all_books']);

// for showing all readers table
Route::get('all-readers-table', [BookTrackerController::class, 'all_readers']);

// for showing all readers table
Route::get('all-takeouts-table', [BookTrackerController::class, 'all_takeouts']);

// for showing one book informations
Route::get('book_tracker/{id}/view-book', [BookTrackerController::class, 'show_book']);

// for showing one book past takeout informations
Route::get('book_tracker/{id}/past-takeout', [BookTrackerController::class, 'past_takeout']);

// for showing one reader informations
Route::get('book_tracker/{id}/view-reader', [BookTrackerController::class, 'show_reader']);

// for editing the reader informations
Route::get('book_tracker/{id}/edit-reader', [BookTrackerController::class, 'edit_reader']);

// for updating the reader informations
Route::post('book_tracker/{id}/update-reader', [BookTrackerController::class, 'update_reader']);

// for updating the takeouts informations
Route::post('book_tracker/{id}/update-takeout', [BookTrackerController::class, 'update_takeout']);

// for editing the book informations
Route::get('book_tracker/{id}/edit-book', [BookTrackerController::class, 'edit_book']);

// for updating the book informations
Route::post('book_tracker/{id}/update-book', [BookTrackerController::class, 'update_book']);

// for editing the takeouts informations
Route::get('book_tracker/{id}/edit-takeouts', [BookTrackerController::class, 'edit_takeouts']);

// for deleting the existing book record
Route::post('book_tracker/{id}/destroy-book', [BookTrackerController::class, 'destroy_book']);

// for deleting the existing reader record
Route::post('book_tracker/{id}/destroy-reader', [BookTrackerController::class, 'destroy_reader']);

// for showing the history of takeouts of the reader
// Route::get('book_tracker/{id}/history-of-takeouts', [BookTrackerController::class, 'history_of_takeouts']);
Route::get('book_tracker/{id}/history-of-takeouts', [BookTrackerController::class, 'join']);

// ------------------------------------------------------

Route::get('/join', [BookTrackerController::class, 'join']);
Route::get('/days/{id}', [BookTrackerController::class, 'days']);



