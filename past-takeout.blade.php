@extends('book_tracker.layout')
@section('content')


    <div class="card">
        <div class="card-header">Book Last Takeout Info</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Book Id : {{ $takeouts->book_id ?? 'None' }}</h5>
                {{-- <h5 class="card-title">Book name : {{ $books->name ?? 'None' }}</h5> --}}

                <p class="card-text">Last take out of this book is : {{ $takeouts->start_date ?? 'None' }}by ,</p>
                <p class="card-text">Reader Id : {{ $takeouts->reader_id ?? 'None' }}</p>
                <a href="/all-books-table">Back</a>
            </div>

            </hr>

        </div>
    </div>
