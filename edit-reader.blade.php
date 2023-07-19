@extends('book_tracker.layout')
@section('content')
    {{-- <center> --}}
        <div class="container">
            <form action="{{ url('book_tracker/' . $reader->id . '/update-reader') }}" method="POST">
                @csrf
                <h4 class="text-center">Edit Reader Record</h4><hr>
                <?= session('message') ?>
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control form-control-sm" name="name" placeholder="Name" value="{{ $reader->name }}" />
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control form-control-sm" name="phone" placeholder="Phone" value="{{ $reader->phone }}" /><br>

                <input type="submit" value="Update Reader info" class="btn btn-success btn-sm" />

            </form>
        </div>
    {{-- </center> --}}
