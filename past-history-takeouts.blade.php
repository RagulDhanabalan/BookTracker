@extends('book_tracker.layout')
@section('content')
    <div class="container">
        <h4 class="text-center">Last Takeout History</h4>
            <table class="table table-borderd table-stripped table-hover">
                <caption class="text-danger caption-top">Last Takeout Informations Of The Reader</caption>
            <thead>
                <tr class="table-dark">
                    @if ($history->isEmpty())
                        <p class="text-center text-danger">No Takeout Record Found To This Reader</p>
                    @endif
                    <th scope="col">Reader Name</th>
                    <th scope="col">Book Name</th>
                    <th scope="col">Takeout Date</th>
                    <th scope="col">Return date</th>
                    <th scope="col">Feedback</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($history as $historys)
                <tr>
                    <td>{{ $historys->reader->name ?? 'None' }}</td>
                    <td>{{ $historys->book->name ?? 'None' }}</td>
                    <td>{{ $historys->start_date ?? 'None' }}</td>
                    <td>{{ $historys->end_date ?? 'None' }}</td>
                    <td>{{ $historys->feedback ?? 'None' }}</td>
                </tr>
                </tbody>
                @endforeach
        </table>
    </br>
    <button class="btn btn-success btn-sm"><a href="/all-books-table" style="color:#fff;text-decoration:none;">Back</a></button>
</div>
