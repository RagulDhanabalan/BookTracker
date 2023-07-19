@extends('book_tracker/layout')
@section('content')
{{-- <center> --}}
    <div class="container">
        <h4 class="text-center">TAKEOUT FORM</h4>
        <hr>
        <form action="{{ url('create-takeout') }}" method="post">
            {!! csrf_field() !!}
            <label class="form-label">Book Name</label>
            {{-- <input type="text" name="book_id" class="form-control"></br> --}}
            <select name="book_id" class="form-select">
                <option value="">Select Book Name</option>
                @foreach ($books as $book)
                    <option value="{{ $book->id }}">{{ $book->name }}</option>
                @endforeach
            </select>
            {{-- </br> --}}
            @if ($errors->has('book_id'))
                <span class="text-danger">{{ $errors->first('book_id') }}</span>
            @endif
            </br>
            <label class="form-label">Reader Name</label>

            <select name="reader_id" class="form-select">
                <option value="">Select Reader Name</option>
                @foreach ($readers as $reader)
                    <option value="{{ $reader->id }}">{{ $reader->name }}</option>
                @endforeach
            </select>

            @if ($errors->has('reader_id'))
                <span class="text-danger">{{ $errors->first('reader_id') }}</span>
            @endif
            </br>
            <label class="form-label">Start date</label>
            <input type="date" name="start_date" class="form-control">
            {{-- </br> --}}
            @if ($errors->has('start_date'))
                <span class="text-danger">{{ $errors->first('start_date') }}</span>
            @endif
            </br>
            <input type="submit" name="submit" value="Save" class="btn btn-success btn-sm">
            <button class="btn btn-primary btn-sm"><a href="index" style="color: #fff; text-decoration:none;">Return
                    Home</a></button></br>
        </form>
    </div>
@stop
{{-- </center> --}}
