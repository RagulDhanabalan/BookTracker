@extends('book_tracker/layout')
@section('content')
<center>
<h3>Welcome</h3></br>
<h4>E - sandhai project 2</h4></br>
<button class="btn btn-primary btn-sm"><a href="create-book-form" style="color: #fff;text-decoration:none;">New Book form</a></button>
<button class="btn btn-primary btn-sm"><a href="create-reader-form" style="color: #fff;text-decoration:none;">New Reader form</a></button>
<button class="btn btn-primary btn-sm"><a href="create-takeout-form" style="color: #fff;text-decoration:none;">New TakeOut form</a></button>

{{-- for all books showing table --}}
<button class="btn btn-primary btn-sm"><a href="all-books-table" style="color: #fff;text-decoration:none;">All Books Table</a></button>

{{-- for all readers showing table --}}
<button class="btn btn-primary btn-sm"><a href="all-readers-table" style="color: #fff;text-decoration:none;">All Readers Table</a></button>

{{-- for all takeouts showing table --}}
<button class="btn btn-primary btn-sm"><a href="all-takeouts-table" style="color: #fff;text-decoration:none;">All Take-outs Table</a></button>
</br></br>

{{-- <p>{{ now()->toDateTimeString('Y-m-d') }}</p> --}}

{{-- {{ $dt = new DateTime("Y-m-d H:i:s") }}</p> --}}

{{-- <small>Logged in at : <span class="text-success">{{ $now = now_date_time() }}</span></small> --}}
<hr>
{{-- <p>{{ localtime() }}</p> --}}
</center>



