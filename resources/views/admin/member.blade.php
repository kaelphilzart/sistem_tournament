@extends('layouts.admin.template')

@section('content')
<div class="container-fluid bg-dasar">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-white mt-5 font-weight-bold">Data User</h1>
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
                    <!-- <div class="dataTables_length" id="dataTable_length">
                        <label>Show 
                            <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> entries
                    </label>
                </div> -->
            </div>
            <div class="col-sm-12 col-md-4">
                <!-- <div id="dataTable_filter" class="dataTables_filter">
                    <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
                </label>
            </div> -->
        </div>
        <!-- <div class="col-sm-12 col-md-4 text-right">
                <div id="dataTable_filter" class="dataTables_filter">
                <a href="{{route('create')}}" class="text-white btn btn-warning btn-sm mb-0 mt-4 mb-2 " type="button">+&nbsp; Tambah User</a>
            </div>
        </div> -->
    </div> 
    <thead>
                    <tr class="table-dark">
                        <th>No</th>
                        <th>Kode Member</th>
                        <th>Nama Depan</th>
                        <th>Nama Belakang</th>
                        <th>Nickname</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>id_discord</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $key => $dataMember)
                    <tr class="table-dark">
                        <td>{{ $data->firstItem() + $key }}</td>
                        <td>{{ $dataMember->kode_member }}</td>
                        <td>{{ $dataMember->nama_depan }}</td>
                        <td>{{ $dataMember->nama_belakang }}</td>
                        <td>{{ $dataMember->nickname }}</td>
                        <td>{{ $dataMember->email }}</td>
                        <td>{{ $dataMember->no_hp }}</td>
                        <td>{{ $dataMember->id_discord }}</td>
                        <td>
                        <form action="{{route('member.hapus', $dataMember->id_member)}}" method="post">@csrf
                    <a href="{{route('member.edit', $dataMember->id_member)}}" class="btn btn-warning  px-4 text mb-1">Edit</a>
                    <button class="btn btn-danger px-3" onClick="return confirm('Yakin Hapus Data?')">Delete</button>
                    </form>
                        </td>
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