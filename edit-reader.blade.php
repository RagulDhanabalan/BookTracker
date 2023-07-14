@extends('book_tracker.layout')
@section('content')
    <center>
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
                <h3>Edit Reader Record</h3><hr>
                <?= session('message') ?>
                <label for="">Name :</label>
                <input type="text" name="name" placeholder="Name" value="{{ $reader->name }}" /><br><br>
                <label for="">Phone :</label>
                <input type="text" name="phone" placeholder="Phone" value="{{ $reader->phone }}" /><br><br>

                <input type="submit" value="Update Reader info" class="btn btn-success btn-sm" />

            </form>
        </body>

        </html>
    </center>
