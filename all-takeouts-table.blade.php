@extends('book_tracker.layout')
@section('content')
<center>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h3>Takeouts</h3>
                    </div>
                    <div class="card-body">

                        <a href="{{ url('create-takeout-form') }}" class="btn btn-success btn-sm" title="Add New Takeout" <i class="fa fa-plus"
                            aria-hidden="true"></i>Add New Takeout</a>
                        <a href="{{ url('index') }}" class="btn btn-success btn-sm" title="Home" <i class="fa fa-plus"
                            aria-hidden="true"></i>Home</a>
                        <br/>
                        <hr>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Book Id</th>
                                        <th>Reader Id</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Total No. of Days</th>
                                        <th>Feedback</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($takeouts as $takeout)
                                        <tr>
                                            {{-- <td>{{ $loop->iteration }}</td> --}}
                                            <td>{{ $takeout->id }}</td>
                                            <td>{{ $takeout->book_id }}</td>
                                            <td>{{ $takeout->reader_id }}</td>
                                            <td>{{ $takeout->start_date }}</td>
                                            <td>{{ $takeout->end_date }}</td>
                                            <td>{{ $takeout->numOfDays}}</td>
                                            <td>{{ $takeout->feedback }}</td>

                                            {{-- <td>{{ $takeout->start_date->diff($takeout->end_date) }}</td> --}}
                                            <td>
                                            <a href="{{ url('/book_tracker/' . $takeout->id . '/edit-takeouts') }}"
                                                title="Edit takeouts"><button value="View"
                                                    class="btn btn-primary btn-sm"><i class="fa fa-eye"
                                                        aria-hidden="true"></i>Edit takeouts</button></a>
                                            </td>
                                            {{-- <td>{{ $takeout->start_date->diff($takeout->end_date) }}</td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</center>
