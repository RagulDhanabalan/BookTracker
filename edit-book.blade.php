@extends('book_tracker.layout')
@section('content')
    <center>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Edit Book Record</title>
        </head>

        <body>
            {{-- <div class="row"> --}}
            <div class="col-4 d-flex justify-content-center">
            <form action="{{ url('book_tracker/' . $book->id . '/update-book') }}" method="POST">
                @csrf
                <h3>Edit Book Record</h3><hr>
                <?= session('message') ?>
                <label for="name">Book Name :</label>
                <input type="text" name="name" placeholder="Name" value="{{ $book->name }}" /><br><br>
                <label for="author">Author :</label>
                <input type="text" name="author" placeholder="author" value="{{ $book->author }}" /><br><br>

                <input type="submit" value="Update Book info" class="btn btn-success btn-sm" />

            </form>
        </div>
    {{-- </div> --}}
        </body>

        </html>
    </center>
