@extends('book_tracker/layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <h3 class="text-center">Create book form</h3><hr>
                <form action="{{ url('create-book') }}" method="post">
                    {!! csrf_field() !!}
                    <label>Name</label></br>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                    </br>
                    <label>Author</label></br>
                    <input type="text" name="author" class="form-control">
                    @if ($errors->has('author'))
                        <span class="text-danger">{{ $errors->first('author') }}</span>
                    @endif
                    </br>

                    <input type="submit" value="Save" class="btn btn-success btn-sm">
                    <button class="btn btn-primary btn-sm"><a href="index"
                            style="color: #fff; text-decoration:none;">Return Home</a></button></br>

                </form>

            </div>
        </div>
    </div>
@stop
