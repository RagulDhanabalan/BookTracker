@extends('book_tracker.layout')
@section('content')
    {{-- <center> --}}
        <div class="container">
            <h4 class="text-center">TAKEOUTS</h4>
            <div class="card-body text-center">
            <a href="{{ url('create-takeout-form') }}" class="btn btn-success btn-sm" title="Add New Takeout" <i
                class="fa fa-plus" aria-hidden="true"></i>Add New Takeout</a>
            <a href="{{ url('index') }}" class="btn btn-success btn-sm" title="Home" <i class="fa fa-plus"
                aria-hidden="true"></i>Home</a>
            </div>
            <hr>
            <div class="table-responsive">
                <table class="table table-stripped table-bordered align-middle table-hover">
                    <caption class="text-danger caption-top">List of All Takeouts</caption>
                    <thead class="table-dark">
                        <tr>
                            <th scope="row">Id</th>
                            <th scope="row">Book Name</th>
                            <th scope="row">Reader Name</th>
                            <th scope="row">Start Date</th>
                            <th scope="row">End Date</th>
                            <th scope="row">Total No. of Days</th>
                            <th scope="row">Feedback</th>
                            <th scope="row">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($takeouts as $takeout)
                            <tr>
                                {{-- <td>{{ $loop->iteration }}</td> --}}
                                <td scope="row">{{ $takeout->id }}</td>
                                {{-- <td>hi</td> --}}
                                <td scope="row">{{ $takeout->book->name ?? 'None' }}</td>
                                <td scope="row">{{ $takeout->reader->name ?? 'None' }}</td>
                                <td scope="row">{{ $takeout->start_date }}</td>
                                <td scope="row">{{ $takeout->end_date }}</td>
                                <td scope="row">{{ $takeout->numOfDays }}</td>
                                <td scope="row">{{ $takeout->feedback }}</td>
                                {{-- <td>{{ $takeout->start_date->diff($takeout->end_date) }}</td> --}}
                                <td>
                                    <a href="{{ url('/book_tracker/' . $takeout->id . '/edit-takeouts') }}"
                                        title="Edit takeouts"><button value="View" class="btn btn-primary btn-sm"><i
                                                class="fa fa-eye" aria-hidden="true"></i>Edit takeouts</button></a>
                                </td>
                                {{-- <td>{{ $takeout->start_date->diff($takeout->end_date) }}</td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    {{-- </center> --}}
