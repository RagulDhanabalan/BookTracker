@extends('book_tracker/layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <h3>Create Takeout form</h3>
                <form action="{{ url('create-takeout') }}" method="post">
                    {!! csrf_field() !!}
                    <label>Book Id</label></br>
                    {{-- <input type="text" name="book_id" class="form-control"></br> --}}
                    <select name="book_id">
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}">{{ $book->id }}</option>
                        @endforeach
                    </select></br></br>
                    <label>Reader Id</label></br>
                    {{-- <input type="text" name="reader_id" class="form-control"></br> --}}
                    <select name="reader_id">
                        @foreach ($readers as $reader)
                            <option value="{{ $reader->id }}">{{ $reader->id }}</option>
                        @endforeach
                    </select></br></br>
                    <label>Start date</label></br>
                    <input type="date" name="start_date" class="form-control"></br>
                    <label>End date</label></br>
                    <input type="date" name="end_date" class="form-control"></br>
                    <label>Feedback</label></br>
                    <input type="text" name="feedback" class="form-control"></br>

                    <input type="submit" value="Save" class="btn btn-success btn-sm">
                    <button class="btn btn-primary btn-sm"><a href="index"
                            style="color: #fff; text-decoration:none;">Return Home</a></button></br>

                </form>

            </div>
        </div>
    </div>
@stop
