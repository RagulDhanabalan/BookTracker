@extends('book_tracker/layout')
@section('content')

    <div class="container">
        <h4 class="text-center">BOOK FORM</h4>
        <hr>
        <form action="{{ url('create-book') }}" method="post">
            {!! csrf_field() !!}
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control form-control-sm" />
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
            </br>
            <label class="form-label">Author</label>
            <input type="text" name="author" class="form-control form-control-sm" />
            @if ($errors->has('author'))
                <span class="text-danger">{{ $errors->first('author') }}</span>
            @endif
            </br>

            <input type="submit" value="Save" class="btn btn-success btn-sm">
            <button class="btn btn-primary btn-sm"><a href="index" style="color: #fff; text-decoration:none;">Return
                    Home</a></button></br>

        </form>

    </div>

@stop
