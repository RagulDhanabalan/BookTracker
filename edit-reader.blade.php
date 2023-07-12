@extends('book_tracker.layout')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit Reader record</title>
    </head>

    <body>
        <form action="{{ url('book_tracker/' . $reader->id . '/update-reader') }}" method="POST">
            @csrf
            <h3>Edit book</h3><br><br>
            <?= session('message') ?>
            <input type="text" name="name" placeholder="Name" value="{{ $reader->name }}" /><br><br>
            <input type="text" name="phone" placeholder="Phone" value="{{ $reader->phone }}" /><br><br>

            <input type="submit" value="Update Reader info" />

        </form>
    </body>

    </html>
