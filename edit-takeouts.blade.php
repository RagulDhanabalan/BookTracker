@extends('book_tracker.layout')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit Takeout Record</title>
    </head>

    <body>
        <form action="{{ url('book_tracker/' . $takeout->id . '/update-takeout') }}" method="POST">
            @csrf
            <h3>Edit Takeouts Record</h3><br>
            <?= session('message') ?>
            <label for="">Book Id</label></br>
            <input type="text" name="book_id" placeholder="book_id" value="{{ $takeout->book_id }}" /><br><br>
            <label for="">Reader Id</label></br>
            <input type="text" name="reader_id" placeholder="reader_id" value="{{ $takeout->reader_id }}" /><br><br>
            <label for="">Start Date</label></br>
            <input type="date" name="start_date" placeholder="start_date" value="{{ $takeout->start_date }}" /><br><br>
            <label for="">End Date</label></br>
            <input type="date" name="end_date" placeholder="end_date" value="{{ $takeout->end_date }}" /><br><br>
            <label for="">Feed Back</label></br>
            <input type="text" name="feedback" placeholder="Edit your feedback"/><br><br>

            <input type="submit" value="Update takeout info" />

        </form>
    </body>

    </html>
