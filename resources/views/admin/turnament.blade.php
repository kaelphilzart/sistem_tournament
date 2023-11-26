@extends('layouts.admin.template')

@section('content')
<div class="container-fluid bg-dasar">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-white mt-5 font-weight-bold">Data Turnament</h1>
</div>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> -->

<!-- DataTales Example -->
<div class="">
    <!-- <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
    </div> -->
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-bordere " id="dataTable" width="100%" cellspacing="0">
            <div class="row">
                <div class="col-sm-12 col-md-4">    
                   
                <a href="{{route('data-peserta')}}" class="text-dark btn btn-warning btn-sm mb-0 mt-4 mb-2 " type="button" style="color:black;"> <strong>Peserta Turnament</strong></a>
           
            </div>
            <div class="col-sm-12 col-md-4">
             
        </div>
        <div class="col-sm-12 col-md-4 text-right">
                <div id="dataTable_filter" class="dataTables_filter">
                <a href="{{route('new-tur')}}" class="text-dark btn btn-warning btn-sm mb-0 mt-4 mb-2 " type="button">+&nbsp; New Turnament</a>
              
            </div>
        </div>
    </div> 
         <thead>
                    <tr class="table-dark">
                        <th>No</th>
                        <th>Turnament</th>
                        <th>Slot</th>
                        <th>Prize</th>
                        <th>Play Off</th>
                        <th>Tutup Daftar</th>
                        <th>Wallpaper</th>
                        <th>Aksi</th>  
                        <th>Team</th>                      
                    </tr>
                </thead>
                @foreach($data as $key => $dataTur)

                <tbody>
                    <tr class="table-dark">
                       <td>{{  $data->firstItem() + $key }}</td>
                        <td>{{ $dataTur->nama_turnament }}</td>
                        <td>{{ $dataTur->slot }}</td>
                        <td>{{ $dataTur->prize }}</td>
                        <td>{{ $dataTur->mulai }}</td>
                        <td>{{ $dataTur->batas_dftr }}</td>
                        <td><a href="{{ asset($dataTur->foto) }}" target="_blank"><img src="{{ asset($dataTur->foto) }}" alt="Gambar Turnamen" width="100" height="auto"></a></td>
                        <td>
                        <form action="{{route('admin.hapus-tur', $dataTur->id_turnament)}}" method="post">@csrf
                    <a href="{{route('admin.edit-tur', $dataTur->id_turnament)}}" class="btn btn-info mb-3 px-4">Edit</a>
                    <button class="btn btn-danger px-3" onClick="return confirm('Yakin Hapus Turnament?')">Delete</button>
                    </form>
                        </td>
                        <td><a href="{{route('admin.view-team', $dataTur->id_turnament)}}" class="btn btn-dark">View Team</a></td>
                 
                           </tr>
                   @endforeach
                </tbody>
            </table>
            <div style="col-12 col-md-6">
            {{ $data->links() }}
       
            </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->


@endsection