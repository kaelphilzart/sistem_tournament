@extends('layouts.admin.template')

@section('content')
<div class="container-fluid bg-dasar">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-white mt-5 font-weight-bold">Data Peserta</h1>
    <a href="{{route('data-tur')}}" class="btn btn-danger my-3 text-end"><span><i class="fa-solid fa-backward mr-2"></i></span><b>BACK</b></a>
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
        <div class="col-sm-12 col-md-4 text-right">
                
        </div>
    </div> 
         <thead>
                    <tr class="table-dark">
                        <th>No</th>
                        <th>turnament</th>
                        <th>Nama Pendaftar</th>
                        <!-- <th>Action</th> -->
                        
                    </tr>
                </thead>
                @foreach($dataPeserta as $key => $data)

                <tbody>
                    <tr class="table-dark">
                       <td>{{  $key + 1 }}</td>
                        <td>{{ $data->nama_turnament }}</td>
                        <td>{{ $data->username }}</td>
                       
                    </tr>
                   @endforeach
                </tbody>
            </table>
            <div style="col-12 col-md-6">
            </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->


@endsection