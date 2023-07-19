@extends('book_tracker.layout')
@section('content')


    <div class="container">
        <h4 class="text-center">Book Last Takeout Info</h4><hr>
        <table class="table table-borderd table-stripped table-hover">
            <caption class="text-danger caption-top">Book Takeout Info</caption>
            <thead class="table-dark">
                <tr>
                    @if ($takeout->isEmpty())
                        <p class="text-center text-danger">No Takeout Record Found</p>
                    @endif
                    <th scope="col">Book name</th>
                    <th scope="col">Reader name</th>
                    <th scope="col">Takeout Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($takeout as $takeouts)
                    <tr>
                        <td>{{ $takeouts->book->name }}</td>
                        <td>{{ $takeouts->reader->name }}</td>
                        <td>{{ $takeouts->start_date }}</td>
                    </tr>
            </tbody>
            @endforeach
        </table>
    </br>
    <button class="btn btn-success btn-sm"><a href="/all-books-table"
            style="color:#fff;text-decoration:none;">Back</a></button>
        </div>
