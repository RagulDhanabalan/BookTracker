@extends('book_tracker.layout')
@section('content')


    <div class="card">
        <div class="card-header">Reader Info</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Reader id : {{ $reader->id ?? 'None' }}</h5>
                <p class="card-text">Reader name : {{ $reader->name ?? 'None' }}</p>
                <p class="card-text">Reader Phone : {{ $reader->phone ?? 'None' }}</p>

                <button class="btn btn-success btn-sm"><a href="/all-readers-table" style="color:#fff; text-decoration : none;">Back</a></button>
            </div>

            </hr>

        </div>
    </div>
