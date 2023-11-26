@extends('layouts.admin.template')

@section('content')

<div class="container bg-dasar pb-5 " style="color:white;" >
    <div class="row">
    <div class="col-md-8 offset-md-2">
    <h4 class="pt-5"><b>Update Turnament</b></h4>
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
        <form action="{{route('admin.update-tur', $data->id_turnament)}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Turnament<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_turnament" id="nama_turnament" value="{{$data->nama_turnament}}">
            </div>
            <div class="form-group">
                <label>Slot <span class="text-danger">*</span></label>
                <input class="form-control" type="number" name="slot" id="slot" value="{{$data->slot}}">
            </div>
            <div class="form-group">
                <label>Prize <span class="text-danger">*</span></label>
                <input class="form-control" type="number" name="prize" id="prize" value="{{$data->prize}}">
            </div>
            <div class="mb-3">
                <input type="datetime-local" class="form-control" name="mulai" id="mulai" value="{{$data->mulai}}">
                @error('mulai')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <input type="datetime-local" class="form-control" name="batas_dftr" id="batas_dftr" value="{{$data->batas_dftr}}">
                @error('batas_dftr')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
            <label>Wallpaper <span class="text-danger">*</span></label>
           
                <input type="file" class="form-control" name="foto" id="foto" ">
                @error('foto')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-dark">Update</button>
                <a href="{{route('data-tur')}}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
</div>
@endsection