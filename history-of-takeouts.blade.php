@extends('book_tracker.layout')
@section('content')


    <div class="card">
        <div class="card-header">Reader's History of Takeouts</div>
        <div class="card-body">


            <div class="card-body">
                {{-- @foreach ($takeouts as $takeout) --}}
                <h5 class="card-title">Book Id : {{ $takeouts->book_id ?? 'None' }}</h5>
                <p class="card-text">Reader Id : {{ $takeouts->reader_id ?? 'None' }}</p>
                <p class="card-text">Start date : {{ $takeouts->start_date ?? 'None' }}by ,</p>
                <p class="card-text">End date : {{ $takeouts->end_date ?? 'None' }}by ,</p>

                {{-- @endforeach --}}
                {{-- <h5 class="card-title">Book Id : {{ $takeouts->book_id ?? 'None' }}</h5>
                <p class="card-text">Reader Id : {{ $takeouts->reader_id ?? 'None' }}</p>
                <p class="card-text">Start date : {{ $takeouts->start_date ?? 'None' }}by ,</p>
                <p class="card-text">End date : {{ $takeouts->end_date ?? 'None' }}by ,</p>
                <a href="/all-books-table">Back</a> --}}
                <a href="/all-books-table">Back</a>
            </div>

            </hr>

        </div>
    </div>
