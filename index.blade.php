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

</center>



