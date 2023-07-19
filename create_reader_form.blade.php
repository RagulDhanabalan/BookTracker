@extends('book_tracker/layout')
@section('content')
    <div class="container">
                <h4 class="text-center">READER FORM</h4><hr>
                <form action="{{ url('create-reader') }}" method="post">
                    {!! csrf_field() !!}
                    <label class="form-label">Name</label></br>
                    <input type="text" name="name" class="form-control form-control-sm">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                    </br>
                    <label class="form-label">Phone</label></br>
                    <input type="text" name="phone" class="form-control form-control-sm">
                    @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                    </br>

                    <input type="submit" value="Save" class="btn btn-success btn-sm">
                    <button class="btn btn-primary btn-sm"><a href="index"
                            style="color: #fff; text-decoration:none;">Return Home</a></button></br>
                </form>
        </div>
@stop
