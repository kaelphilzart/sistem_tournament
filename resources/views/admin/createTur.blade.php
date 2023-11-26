@extends('layouts.admin.template')

@section('content')

<div class="container bg-dasar pb-5" style="color:white;">
    <div class="row">
    <div class="col-md-8 offset-md-2">
        <h4 class="pt-4"><b>New Turnament</b></h4>
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
        <form role="form text-left" action="{{route('create-tur')}}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Nama Turnament<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_turnament" id="nama_turnament" value="{{ old('username') }}">
            </div>
            <div class="form-group">
                <label>slot <span class="text-danger">*</span></label>
                <input class="form-control" type="number" name="slot" id="slot" value="{{ old('password') }}">
            </div>
            <div class="form-group">
                <label>Prize <span class="text-danger">*</span></label>
                <input class="form-control" type="number" name="prize" id="prize" value="{{ old('password') }}">
            </div>
            <div class="mb-3">
                <input type="datetime-local" class="form-control" name="mulai" id="mulai">
                @error('mulai')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <input type="datetime-local" class="form-control" name="batas_dftr" id="batas_dftr">
                @error('batas_dftr')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
            <label>Wallpaper <span class="text-danger">*</span></label>
                <input type="file" class="form-control" name="foto" id="foto">
                @error('foto')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-dark">Create</button>
                <a href="{{route('data-tur')}}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
</div>
@endsection