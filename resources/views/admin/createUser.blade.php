@extends('layouts.admin.template')

@section('content')

<div class="container">
    <div class="row">
    <div class="col-md-8 offset-md-2">
        <h4>Create User</h4>
        <br>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        <form action="{{route('create-user')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>username<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="username" id="username" value="{{ old('username') }}">
            </div>
            <div class="form-group">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" id="password" value="{{ old('password') }}">
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{route('data-admin')}}" class="btn btn-success">Kembali</a>
            </div>
        </form>
    </div>
</div>
</div>
@endsection