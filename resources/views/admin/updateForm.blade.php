@extends('layouts.admin.template')

@section('content')

<div class="container">
    <div class="row">
    <div class="col-md-8 offset-md-2">
        <h4>Edit User</h4>
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
        <form action="{{route('admin.update', $data->id_user)}}" method="POST">
            @csrf
            <div class="form-group">
                <label>username<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="username" id="username" value="{{$data->username}}">
            </div>
            <div class="form-group">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" id="password" value="{{$data->password}}" readonly>
            </div>
            <div class="form-group">
            <br>
            <div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('data-admin')}}" class="btn btn-success">Kembali</a>
            </div>
        </form>
    </div>
</div>
</div>

@endsection