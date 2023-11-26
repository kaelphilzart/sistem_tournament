@extends('layouts.template')

@section('content')

<body class="bg-dasar">

<div class="container py-4">
    <div class="row">
        <div class="col-md-6 col-12">
        <a href="{{ asset($data->foto) }}" target="_blank"> <img src="{{ asset($data->foto) }}" class="card-img mx-2 d-flex flex-col"
                            style="object-fit: cover;" width="auto" height="310"alt="..."></a>
        </div>
        <div class="col-md-6 col-12">
        <div class="card card-plain bg-kuning">
        <div class="card-header">
                  <h4 class="font-weight-bolder">Registrasi</h4>
                  <p class="mb-0">Registrasi Tournament</p>
                </div>
            <div class="card-body">
            <form role="form" method="POST" action="{{route('member.daftar-tur')}}">
                    @csrf
                    <div class="form-group">
                    <input type="hidden" class="form-control" id="id_turnament" name="id_turnament" value="{{$data->id_turnament}}">
                    <input type="hidden" class="form-control" id="id_user" name="id_user" value="{{Auth::user()->id_user}}">
                      <label class="form-label">Turnament</label>
                      <input type="text" class="form-control"  value="{{$data->nama_turnament}}" readonly>
                    </div>
                    <div class="form-group">
                      <label class="form-label">Pendaftar</label>
                      <input type="email" class="form-control" value="{{Auth::user()->username}}" readonly>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-dark mt-4 mb-0">Daftar</button>
                      <a href="{{route('turnament')}}" class="btn btn-danger mt-4 mb-0 ">Kembali</a>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
  
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

@endsection

