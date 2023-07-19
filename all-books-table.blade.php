@extends('book_tracker.layout')
@section('content')

    <div class="container">
        <h4 class="text-center">BOOKS</h4>
        <div class="card-body text-center">
            <a href="{{ url('create-book-form') }}" class="btn btn-success btn-sm" title="Add new student" <i class="fa fa-plus"
                aria-hidden="true"></i> Add New Book</a>
            <a href="{{ url('index') }}" class="btn btn-success btn-sm" title="Home" <i class="fa fa-plus"
                aria-hidden="true"></i>Home</a>
        </div>
        <hr />
        <div class="table-responsive">
            <table class="table table-stripped table-bordered  table-hover">
                <caption class="text-danger caption-top">List of All Books</caption>
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Author</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $book->name }}</td>
                            <td>{{ $book->author }}</td>
                            <td class="text-center">
                                <a href="{{ url('/book_tracker/' . $book->id . '/view-book') }}" title="View book"><button
                                        value="View" class="btn btn-primary btn-sm"><i class="fa fa-eye"
                                            aria-hidden="true"></i>View</button></a>
                                <a href="{{ url('/book_tracker/' . $book->id . '/past-takeout') }}"
                                    title="Past takeout of the book"><button value="Past Takeout"
                                        class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Past
                                        Takeout</button></a>
                                <a href="{{ url('/book_tracker/' . $book->id . '/edit-book') }}" title="Edit book"><button
                                        class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                            aria-hidden="true"></i>Edit</button></a>
                                <form method="POST" action="{{ url('/book_tracker/' . $book->id . '/destroy-book') }}"
                                    accept-charset="UTF-8" style="display:inline">
                                    {{-- {{ method_field('DELETE') }} --}}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete"
                                        onclick="return comfirm(&quot;Confirm delete?&quot;)<i class="fa fa-trash-o"
                                        aria-hidden="true"></i>Delete</button><br>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

