@extends('book_tracker.layout')
@section('content')
    {{-- <center> --}}
        <div class="container">
            <h4 class="text-center">READERS</h4>
            <div class="card-body text-center">
            <a href="{{ url('create-reader-form') }}" class="btn btn-success btn-sm" title="Add new reader" <i
                class="fa fa-plus" aria-hidden="true"></i> Add New Reader</a>
            <a href="{{ url('index') }}" class="btn btn-success btn-sm" title="Home" <i class="fa fa-plus"
                aria-hidden="true"></i>Home</a>
            </div>
            <hr />
            <div class="table-responsive">
                <table class="table table-stripped table-bordered align-middle table-hover">
                    <caption class="text-danger caption-top">List of All Readers</caption>
                    <thead class="table-dark">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($readers as $reader)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $reader->name }}</td>
                                <td>{{ $reader->phone }}</td>
                                <td class="text-center">
                                    <a href="{{ url('/book_tracker/' . $reader->id . '/view-reader') }}"
                                        title="View Reader"><button value="View" class="btn btn-primary btn-sm"><i
                                                class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                    <a href="{{ url('/book_tracker/' . $reader->id . '/history-of-takeouts') }}"
                                        title="History of takeouts"><button value="View" class="btn btn-primary btn-sm"><i
                                                class="fa fa-eye" aria-hidden="true"></i>History of Takeouts</button></a>
                                    <a href="{{ url('/book_tracker/' . $reader->id . '/edit-reader') }}"
                                        title="Edit Reader"><button class="btn btn-primary btn-sm"><i
                                                class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                    <form method="POST"
                                        action="{{ url('/book_tracker/' . $reader->id . '/destroy-reader') }}"
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
    {{-- </center> --}}
