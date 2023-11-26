@extends('layouts.admin.template')

@section('content')

<div class="container">
    <div class="row">
    <div class="col-md-8 offset-md-2">
        <h4>Edit Member</h4>
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
        <form action="{{route('member.update', $data->id_member)}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Kode Member<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="kode_member" id="kode_member" value="{{$data->kode_member}}">
            </div>
            <div class="form-group">
                <label>nama_depan <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_depan" id="nama_depan" value="{{$data->nama_depan}}">
            </div>
            <div class="form-group">
                <label>nama_belakang <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_belakang" id="nama_belakang" value="{{$data->nama_belakang}}">
            </div>
            <div class="form-group">
                <label>nickname<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nickname" id="nickname" value="{{$data->nickname}}">
            </div>
            <!-- <div class="form-group">
                <label>kelamin<span class="text-danger">*</span></label>
                <div class="form-check">
                                <input type="radio" id="kelamin" name="kelamin" value="{{$data->kelamin}}"
                                    class="form-check-input">
                                <label for="laki-laki" class="form-check-label">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="kelamin" name="kelamin" value="{{$data->nama_kelamin}}"
                                    class="form-check-input">
                                <label for="perempuan" class="form-check-label">Perempuan</label>
                            </div>
            </div> -->
            <div class="form-group">
                <label>tempat_lahir <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" value="{{$data->tempat_lahir}}">
            </div>
            <div class="form-group">
                <label>tanggal_lahir<span class="text-danger">*</span></label>
                <input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{$data->tanggal_lahir}}">
            </div>
            <div class="form-group">
                <label>email<span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email" id="email" value="{{$data->email}}">
            </div>
            <div class="form-group">
                <label>no_hp<span class="text-danger">*</span></label>
                <input class="form-control" type="tel" name="no_hp" id="no_hp" value="{{$data->no_hp}}">
            </div>
            <div class="form-group">
                <label>id-discord <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="id_discord" id="id_discord" value="{{$data->id_discord}}">
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('data-member')}}" class="btn btn-success">Kembali</a>
            </div>
        </form>
    </div>
</div>
</div>
@endsection