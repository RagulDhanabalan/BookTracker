@extends('book_tracker.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h3>All Takeouts Table list</h3>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('index') }}" class="btn btn-success btn-sm" title="Home" <i class="fa fa-plus"
                            aria-hidden="true"></i>Home</a>
                        <a href="{{ url('create-takeout-form') }}" class="btn btn-success btn-sm" title="Add New Takeout" <i class="fa fa-plus"
                            aria-hidden="true"></i>Add New Takeout</a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Book Id</th>
                                        <th>Reader Id</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
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
                                            <td>{{ $takeout->feedback }}</td>
                                            <td>
                                            <a href="{{ url('/book_tracker/' . $takeout->id . '/edit-takeouts') }}"
                                                title="Edit takeouts"><button value="View"
                                                    class="btn btn-primary btn-sm"><i class="fa fa-eye"
                                                        aria-hidden="true"></i>Edit takeouts</button></a>
                                            </td>
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
