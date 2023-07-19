@extends('book_tracker.layout')
@section('content')
    <div class="container">
        <form action="{{ url('book_tracker/' . $takeout->id . '/update-takeout') }}" method="POST">
            @csrf
            <h4 class="text-center">Edit Takeouts Record</h4>
            <hr>
            <?= session('message') ?>
            <label for="book_id" class="form-label">Book Name</label>
            <select name="book_id" class="form-select">
            {{-- @foreach ($book as $books)
                <option value="{{ $books->name }}">{{ $books->name }}</option>
            @endforeach --}}
            {{-- @foreach($book as $books) --}}

	<option value="{{ $takeout->book->id }}">{{ $takeout->book->name }}</option>

{{-- @endforeach --}}

            </select>
            {{-- @foreach ($book as $books) --}}
            {{-- <input type="text" name="book_id" class="form-control" value="{{ $books->name }}"> --}}
            {{-- @endforeach --}}
            <label for="reader_id" class="form-label">Reader Name</label>
            <select name="reader_id" class="form-select">
                {{-- @foreach ($reader as $readers) --}}
                    <option value="{{ $takeout->reader->id }}">{{ $takeout->reader->name }}</option>
                {{-- @endforeach --}}
            </select>
            <label for="start_date" class="form-label">Start Date</label>
            <input type="date" name="start_date" placeholder="start_date" value="{{ $takeout->start_date }}"
                class="form-control" />
            @if ($errors->has('start_date'))
                <span class="text-danger">{{ $errors->first('start_date') }}</span>
            @endif
        </br>
            <label for="end_date" class="form-label">End Date</label>
            <input type="date" name="end_date" placeholder="end_date" value="{{ $takeout->end_date }}"
                class="form-control" />
            @if ($errors->has('end_date'))
                <span class="text-danger">{{ $errors->first('end_date') }}</span>
            @endif
    </br>
            <label for="feedback" class="form-label">Feed Back</label>
            <input type="text" name="feedback" placeholder="Edit your feedback"
                value="{{ $takeout->feedback ?? 'Pending' }}" class="form-control" />
                @if ($errors->has('feedback'))
                <span class="text-danger">{{ $errors->first('feedback') }}</span>
            @endif
            </br>
            <input type="submit" value="Update takeout info" class="btn btn-success btn-sm" />

        </form>
    </div>
