@extends('book_tracker.layout')
@section('content')


    <div class="card">
        <div class="card-header">Book Last Takeout Info</div>
            <table class="table table-borderd table-stripped">
            <thead>

                <tr>
                    <th scope="col">Book name</th>
                    <th scope="col">Reader name</th>
                    <th scope="col">Takeout Date</th>
                    {{-- <th scope="col">Return Date</th> --}}
                    {{-- <th scope="col">End Date</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($past_takeouts as $takeouts)
                <tr>
                    <td>{{ $takeouts->book->name }}</td>
                    <td>{{ $takeouts->reader->name }}</td>
                    <td>{{ $takeouts->start_date }}</td>
                    {{-- <td>{{ $takeouts->end_date }}</td> --}}
                </tr>
                </tbody>
                @endforeach

        </table>

    </div></br>
    <button class="btn btn-success btn-sm"><a href="/all-books-table" style="color:#fff;text-decoration:none;">Back</a></button>
