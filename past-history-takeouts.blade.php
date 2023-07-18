@extends('book_tracker.layout')
@section('content')


    <div class="card">
        <div class="card-header text-center"><h3>Last Takeout History</h3></div>
            <table class="table table-borderd table-stripped">
            <thead>

                <tr>
                    @if ($history->isEmpty())
                        <p class="text-center text-danger">No Takeout Record Found To This Reader</p>
                    @endif
                    {{-- <th scope="col">Id</th> --}}
                    <th scope="col">Reader Name</th>
                    <th scope="col">Book Name</th>
                    <th scope="col">Takeout Date</th>
                    <th scope="col">Return date</th>
                    <th scope="col">Feedback</th>
                    {{-- <th scope="col">End Date</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($history as $historys)
                <tr>
                    {{-- <td>{{ $historys->id }}</td> --}}
                    <td>{{ $historys->reader->name ?? 'None'}}</td>
                    <td>{{ $historys->book->name ?? 'None' }}</td>
                    <td>{{ $historys->start_date }}</td>
                    <td>{{ $historys->end_date ?? 'None'}}</td>
                    {{-- @if($historys->end_date->is_null()){ --}}
                        {{-- <p>Book is not returned yet</p> --}}
                    {{-- } --}}
                    {{-- @endif --}}
                    <td>{{ $historys->feedback ?? 'None'}}</td>
                    {{-- @if($historys->feedback->is_null()){
                        <p>Reader is not given any feedback yet</p>
                    } --}}
                    {{-- @endif --}}
                </tr>
                </tbody>
                @endforeach

        </table>

    </div></br>
    <button class="btn btn-success btn-sm"><a href="/all-books-table" style="color:#fff;text-decoration:none;">Back</a></button>
