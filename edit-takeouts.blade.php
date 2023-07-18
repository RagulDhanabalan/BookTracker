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
                <label for="book_id" class="form-control">Book Name :</label>
                <select  name="book_id" class="form-control">
                    
                    {{-- <option value="{{ $version }}" @selected(old('version') == $version)>
                        {{ $version }}
                    </option> --}}
                    {{-- @foreach ($book as $books) --}}
                        {{-- <option value="{{ $books->id }}">{{ $books->name ?? 'None' }}</option> --}}
                        {{-- <option value= "{{ $books->id }}" @selected(old('books->id') == $books->id) >{{ $books->name }}</option> --}}
                        {{-- <option value={{ $books->id }}> {{ $books->name ?? 'None' }}</option> --}}
                        {{-- @endforeach --}}
             </select>
                <label for="reader_id" class="form-control">Reader Name :</label>
                <select  name="reader_id" class="form-control">

                    @foreach ($reader as $readers)
                        {{-- <option value="{{ $readers->id }}">{{ old('ReaderName',$readers->name) }}</option> --}}
                        <option value= "{{ $readers->id }}" @selected(old('readers->id') == $readers->id) >{{ $readers->name }}</option>
                    @endforeach
             </select>
                <label for="start_date" class="form-control">Start Date :</label>
                <input type="date" name="start_date" placeholder="start_date"
                    value="{{ $takeout->start_date }}"  class="form-control"/>
                    @if ($errors->has('start_date'))
                        <span class="text-danger">{{ $errors->first('start_date') }}</span>
                    @endif

                <label for="end_date" class="form-control">End Date :</label>
                <input type="date" name="end_date" placeholder="end_date"
                    value="{{ $takeout->end_date }}"  class="form-control"/>
                    @if ($errors->has('end_date'))
                        <span class="text-danger">{{ $errors->first('end_date') }}</span>
                    @endif

                <label for="feedback" class="form-control">Feed Back :</label>
                <input type="text" name="feedback" placeholder="Edit your feedback"
                    value="{{ $takeout->feedback ?? 'None' }}" class="form-control"/>
            </br>
                <input type="submit" value="Update takeout info" class="btn btn-success btn-sm" />

            </form>
        </body>

        </html>
    </center>
