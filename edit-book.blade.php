@extends('book_tracker.layout')
@section('content')
    {{-- <center> --}}
        <div class="container">
            <form action="{{ url('book_tracker/' . $book->id . '/update-book') }}" method="POST">
                @csrf
                <h4 class="text-center">Edit Book Record</h4>
                <hr>
                <?= session('message') ?>
                <label for="name" class="form-label">Book Name</label>
                <input type="text" class="form-control form-control-sm" name="name" placeholder="Name"
                    value="{{ $book->name }}" />
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control form-control-sm" name="author" placeholder="author"
                    value="{{ $book->author }}" />
                </br>

                <input type="submit" value="Update Book info" class="btn btn-success btn-sm" />

            </form>
        </div>
    {{-- </center> --}}
