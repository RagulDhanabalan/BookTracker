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
        $data = $request->validate([
            'name' => 'required|max:25|unique:books,Name',
            'author' => 'required',
        ]);
        // $saveBook = Takeout::create($data);
        $saveBook = Book::create($data);
        return 'New book record has been created ! </br> The newly added book name is : ' . $saveBook->name . ' written by , ' . $saveBook->author . '</br><button class="btn btn-primary btn-sm"><a href="create-book-form" style="text-decoration:none"> Back </a></button>';
    }

    //for creating readers into the database
    public function create_reader(Request $request)
    {
        // $data = $request->all();
        $data = $request->validate([
            'name' => 'required|unique:readers,Name',
            'phone' => 'required|regex:[(\+91[\-\s]?)?[0]?(91)?[789]\d{9}]|digits:10|unique:readers,Phone',
        ]);
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
        ]);
        $saveBook = Takeout::create($data);
        return 'Reader Id ,'. $saveBook->id . ' New takeout record has been created !</br></br><a href="all-takeouts-table" style="text-decoration:none; background-color: green; color:#fff;padding:4px;border:1px solid #000"> Back </a>';
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
        foreach ($takeouts as $takeout) {
            $start = Carbon::parse($takeout->start_date);
            $end = Carbon::parse($takeout->end_date);
            $takeout->numOfDays = $end->diffInDays($start);
        }
        return view('book_tracker/all-takeouts-table', ['takeouts' => $takeouts]);

    }

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
        $book = Book::get();
        $reader = Reader::get();
        return view('book_tracker/edit-takeouts', ['takeout' => $takeout, 'reader' => $reader, 'book' => $book]);
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
        $data = $request->validate([
            'book_id' => 'required',
            'reader_id' => 'required|max:5',
            'start_date' => 'required',
            'end_date' => 'required|after:start_date',
            'feedback' => 'required'
        ]);
        $saveBook =Takeout::create($data);
        $saveBook -> save();
        return 'Takeouts no.' . $saveBook . ' informations updated successfully ! <a href="/all-takeouts-table">Back</a>';
        // dd($takeout);
    }
    // for past takeout of the book informations
    public function past_takeout($id)
    {
        $reader = Reader::with('book')->get();

        $book = Book::findOrFail($id);

        $past_takeouts = $book->takeout()->where('end_date','<', now())->get(); // end_date

        return view('book_tracker/past-takeout', compact('reader', 'book', 'past_takeouts'));



    }
    // for deleting book record
    public function destroy_book($id)
    {
        $book = Book::find($id);
        $book->delete();
        return 'Book record has been deleted successfully ! <a href = "/all-books-table">Back</a>';

    }

    // for deleting book record
    public function destroy_reader($id)
    {
        $reader = Reader::find($id);
        $reader->delete();
        return 'Reader record has been deleted successfully ! <a href = "/all-readers-table">Back</a>';

    }

    // for showing the history of takeouts of a reader
    public function history_of_takeouts($id)
    {
        $takeouts = Takeout::find($id);
        return view('book_tracker/history-of-takeouts', ['takeouts' => $takeouts]);
        // $takeouts = Takeout::where('reader_id', $id)->find($start_date,$end_date);
        // return view('book_tracker/history-of-takeouts', ['takeouts' => $takeouts]);
    }

    public function past_takeouts($id)
    {

        $history = Takeout::where('reader_id', $id)->get();

        $reader = Reader::with('reader')->get();

        $book = Book::with('books')->get();

        return view('book_tracker/past-history-takeouts', compact('history', 'reader', 'book'));
    }
}
