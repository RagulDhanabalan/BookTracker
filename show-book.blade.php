@extends('book_tracker.layout')
@section('content')


    <div class="card">
        <div class="card-header">Book Info</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Book id : {{ $books->id ?? 'None' }}</h5>
                <p class="card-text">Book name : {{ $books->name ?? 'None' }}</p>
                <p class="card-text">Book Author : {{ $books->author ?? 'None' }}</p>

            </div>

            </hr>

        </div>
    </div>
