@extends('book_tracker.layout')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit Book Record</title>
    </head>

    <body>
        <form action="{{ url('book_tracker/' . $book->id . '/update-book') }}" method="POST">
            @csrf
            <h3>Edit book</h3><br><br>
            <?= session('message') ?>
            <input type="text" name="name" placeholder="Name" value="{{ $book->name }}" /><br><br>
            <input type="text" name="author" placeholder="author" value="{{ $book->author }}" /><br><br>

            <input type="submit" value="Update Book info" />

        </form>
    </body>

    </html>
