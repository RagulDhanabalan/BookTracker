@extends('book_tracker.layout')
@section('content')
    <center>
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
                <h3>Edit Takeouts Record</h3><hr>
                <?= session('message') ?>
                <label for="">Book Id :</label>
                {{-- <select  name="book_id"> --}}
                <input type="text" name="book_id" placeholder="book_id"
                    value="{{ $takeout->book_id ?? 'None' }}" />
                    {{-- @foreach ($takeout as $takeout)
                        <option value="{{ $takeout->book_id ?? 'None' }}">{{ $takeout->book_id?? 'None' }}</option>
                    @endforeach --}}
                {{-- </select> --}}
                <br><br>
                <label for="">Reader Id :</label>
                <input type="text" name="reader_id" placeholder="reader_id"
                    value="{{ $takeout->reader_id ?? 'None' }}" /><br><br>
                <label for="start_date">Start Date :</label>
                <input type="date" name="start_date" placeholder="start_date"
                    value="{{ $takeout->start_date ?? 'None' }}" /><br><br>
                <label for="end_date">End Date :</label>
                <input type="date" name="end_date" placeholder="end_date"
                    value="{{ $takeout->end_date ?? 'None'}}" /><br><br>
                <label for="">Feed Back :</label>
                <input type="text" name="feedback" placeholder="Edit your feedback"
                    value="{{ $takeout->feedback ?? 'None' }}" /><br><br>

                <input type="submit" value="Update takeout info" class="btn btn-success btn-sm" />

            </form>
        </body>

        </html>
    </center>
