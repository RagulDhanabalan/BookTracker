@extends('book_tracker/layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <h3 class="text-center">Create Takeout Form</h3>
                <hr>
                <form action="{{ url('create-takeout') }}" method="post">
                    {!! csrf_field() !!}
                    <label>Book Name</label></br>
                    {{-- <input type="text" name="book_id" class="form-control"></br> --}}
                    <select name="book_id" class="form-control">
                        <option value="">Select Book Name</option>
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}">{{ $book->name }}</option>
                        @endforeach
                        @if ($errors->has('book_id'))
                            <span class="text-danger">{{ $errors->first('book_id') }}</span>
                        @endif
                    </select>

                    <label>Reader Name</label></br>
                    {{-- <input type="text" name="reader_id" class="form-control"></br> --}}
                    <select name="reader_id" class="form-control">
                        <option value="">Select Reader Name</option>
                        @foreach ($readers as $reader)
                            <option value="{{ $reader->id }}">{{ $reader->name }}</option>
                        @endforeach
                        @if ($errors->has('reader_id'))
                            <span class="text-danger">{{ $errors->first('reader_id') }}</span>
                        @endif
                    </select>
                    <label>Start date</label></br>
                    <input type="date" name="start_date" class="form-control">
                    @if ($errors->has('start_date'))
                        <span class="text-danger">{{ $errors->first('start_date') }}</span>
                    @endif
                    </br>
                    {{-- <label>End date</label></br>
                    <input type="date" name="end_date" class="form-control">
                    @if ($errors->has('end_date'))
                        <span class="text-danger">{{ $errors->first('end_date') }}</span>
                    @endif
                    </br> --}}

                    {{-- <label for="">No. of days</label> --}}
                    {{-- <label>Feedback</label></br>
                    <input type="text" name="feedback" class="form-control">
                    @if ($errors->has('feedback'))
                        <span class="text-danger">{{ $errors->first('feedback') }}</span>
                    @endif
                    </br> --}}

                    <input type="submit" name="submit" value="Save" class="btn btn-success btn-sm">
                    <button class="btn btn-primary btn-sm"><a href="index"
                            style="color: #fff; text-decoration:none;">Return Home</a></button></br>

                </form>

            </div>
        </div>
    </div>
@stop
