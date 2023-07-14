<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Reader;
use App\Models\Takeout;
use Illuminate\Support\Facades\Validator;
class BookTrackerController extends Controller
{

    // for showing the index page
    public function index()
    {
        return view('book_tracker/index');
    }

    // for creating the new books details

    public function create_book_form()
    {
        return view('book_tracker/create_book_form');
    }

    // for creating reader details
    public function create_reader_form()
    {
        return view('book_tracker/create_reader_form');
    }

    // for creating takeout details
    public function create_takeout_form()
    {
        $books = Book::all();
        $readers = Reader::all();
        return view('book_tracker/create_takeout_form', ['books' => $books, 'readers' => $readers]);
    }


    //for creating books into the database
    public function create_book(Request $request)
    {
        $data = $request->all();
        $saveBook = Book::create($data);
        return 'New book record has been created ! </br> The newly added book name is : ' . $saveBook->name . ' written by , ' . $saveBook->author . '</br><button class="btn btn-primary btn-sm"><a href="create-book-form" style="text-decoration:none"> Back </a></button>';
    }

    //for creating readers into the database
    public function create_reader(Request $request)
    {
        $data = $request->all();
        $saveBook = Reader::create($data);
        return 'New reader record has been created ! </br> The newly added reader name is : ' . $saveBook->name . ', Phone : ' . $saveBook->phone . '</br><button class="btn btn-primary btn-sm"><a href="create-reader-form" style="text-decoration:none"> Back </a></button>';
    }

    public function create_takeOut(Request $request)
    {
        // $data = $request->all();
        $data = $request->validate([
            'book_id' => 'required',
            'reader_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'feedback' => 'required'
        ]);
        $saveBook = Takeout::create($data);
        return 'New takeout record has been created !</br></br><a href="index" style="text-decoration:none; background-color: green; color:#fff;padding:4px;border:1px solid #000"> Back </a>';
    }

    //for showing books list table

    public function all_books()
    {
        $books = Book::all();
        return view('book_tracker/all-books-table', ['books' => $books]);
    }

    //for showing readers list table

    public function all_readers()
    {
        $readers = Reader::all();
        return view('book_tracker/all-readers-table', ['readers' => $readers]);
    }


    //for showing takeouts list table

    public function all_takeouts()
    {

        $takeouts = Takeout::all();
        foreach($takeouts as $takeout){
            $start = Carbon::parse($takeout->start_date);
            $end = Carbon::parse($takeout->end_date);
            $takeout->numOfDays = $end->diffInDays($start);
        }
        return view('book_tracker/all-takeouts-table', ['takeouts' => $takeouts]);

    }

    // public function days($id){

    //     $days = Takeout::find($id);
    //     $takeouts = Takeout::all($days);
    //     return view('book_tracker/days', ['takeouts' => $takeouts,'days' => $days]);
    // }

    //for viewing one book information

    public function show_book($id)
    {
        $books = Book::find($id);
        return view('book_tracker/show-book', ['books' => $books]);
    }

    //for viewing one reader information

    public function show_reader($id)
    {
        $reader = Reader::find($id);
        return view('book_tracker/show-reader', ['reader' => $reader]);
    }

    //for editing one reader information

    public function edit_reader($id)
    {
        $reader = Reader::find($id);
        return view('book_tracker/edit-reader', ['reader' => $reader]);
    }
    // for updating the reader informations
    public function update_reader(Request $request, $id)
    {
        $reader = Reader::find($id);
        $reader->name = $request->input('name');
        $reader->phone = $request->input('phone');
        $reader->save();
        return 'Reader informations updated successfully ! <a href="/all-readers-table">Back</a>';

    }


    //for editing one book information

    public function edit_book($id)
    {
        $book = Book::find($id);
        return view('book_tracker/edit-book', ['book' => $book]);
    }

        //for editing one book information

        public function edit_takeouts($id)
        {
            $takeout = Takeout::find($id);
            return view('book_tracker/edit-takeouts', ['takeout' => $takeout]);
        }
    // for updating the reader informations
    public function update_book(Request $request, $id)
    {
        $book = Book::find($id);
        $book->name = $request->input('name');
        $book->author = $request->input('author');
        $book->save();
        return 'Reader informations updated successfully ! <a href="/all-books-table">Back</a>';

    }

        // for updating the reader informations
        public function update_takeout(Request $request, $id)
        {
            $takeout = Takeout::find($id);
            $takeout->book_id = $request->input('book_id');
            $takeout->reader_id = $request->input('reader_id');
            $takeout->start_date = $request->input('start_date');
            $takeout->end_date = $request->input('end_date');
            $takeout->feedback = $request->input('feedback');
            // $takeout->difference = $request->input('');
            $takeout->save();
            return 'Takeouts informations updated successfully ! <a href="/all-takeouts-table">Back</a>';
            // dd($takeout);
        }
    // for past takeout of the book informations
    public function past_takeout($id){

        $takeouts = Takeout::find($id);
        // $books = Book::find($name);
        return view('book_tracker/past-takeout', ['takeouts' => $takeouts]);
    }
    // for deleting book record
    public function destroy_book($id){
        $book = Book::find($id);
        $book->delete();
        return 'Book record has been deleted successfully ! <a href = "/all-books-table">Back</a>';

    }

        // for deleting book record
        public function destroy_reader($id){
            $reader = Reader::find($id);
            $reader->delete();
            return 'Reader record has been deleted successfully ! <a href = "/all-readers-table">Back</a>';

        }

        // for showing the history of takeouts of a reader
        public function history_of_takeouts($id){
            $takeouts = Takeout::find($id);
            return view('book_tracker/history-of-takeouts', ['takeouts' => $takeouts]);
            // $takeouts = Takeout::where('reader_id', $id)->find($start_date,$end_date);
            // return view('book_tracker/history-of-takeouts', ['takeouts' => $takeouts]);
        }

        public function join(){
            $readers = Reader::with('takeout')->get();
            $takeouts = Takeout::with('reader')->get();
            // $books = Book::with('books')->get();
            // $takeouts = Takeout::whereBetween('start_date' && 'end_date')->get();
            return view('book_tracker/join-tables', compact('takeouts', 'readers'));
        }
}
