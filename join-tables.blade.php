@extends('book_tracker.layout')
@section('content')
<center>
<div class="row" style="margin:20px;">
    <div class="col-12">
        <h3>Past History of Takeouts</h3></br>
        <button class="btn btn-primary btn-sm"><a href="/all-readers-table" style="color: #fff; text-decoration : none ;">Back</a></button>
        <button class="btn btn-primary btn-sm"><a href="/index" style="color: #fff; text-decoration : none ;">Home</a></button></br></br>
        <table class="table table-bordered table striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Book Id</th>
                    <th scope="col">Reader Id</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Feedback</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($takeouts as $takeout)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $takeout->book_id ?? 'None'}}</td>
                    <td>{{ $takeout->reader->name ?? 'None'}}</td>
                    <td>{{ $takeout->start_date ?? 'None' }}</td>
                    <td>{{ $takeout->end_date ?? 'None' }}</td>
                    <td>{{ $takeout->feedback ?? 'None' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</center>
