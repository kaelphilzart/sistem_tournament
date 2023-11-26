@extends('layouts.admin.template')

@section('content')

<Style>
    
  body{
    background-color: #212121 !important;
  }
</Style>
<body>
    

<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text mt-5 font-weight-bold">Dashboard</h1>
</div>

<!-- Content Row -->
<div class="row">

    <!-- new membership -->
    <div class="col-xl-4 col-md-6 mb-4 ">
        <div class="card shadow  bg-hitam py-1 isi-kotak">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs text-white text-uppercase mb-1">
                            NEW MEMBERSHIP</div>
                        <div class="text-sm mb-0 font-weight-bold text-white mb-2">2</div>
                        <!-- <div class="text-xs  text-white">
                         <span class="text-redx mr-1"> 1.10%</span>   
                        Today</div> -->
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- total membership -->
    <div class="col-xl-4 col-md-6 mb-4 ">
        <div class="card shadow  bg-hitam py-1 isi-kotak">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs text-white text-uppercase mb-1">
                            TOTAL MEMBERSHIP</div>
                        <div class="text-sm mb-0 font-weight-bold text-white mb-2">3</div>
                        <!-- <div class="text-xs  text-white">
                         <span class="text-redx mr-1"> 1.10%</span>   
                        Since yesterday</div> -->
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- data admin -->
    <div class="col-xl-4 col-md-6 mb-4 ">
        <div class="card shadow  bg-hitam py-1 isi-kotak">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs text-white text-uppercase mb-1">
                            DATA ADMIN</div>
                        <div class="text-sm mb-0 font-weight-bold text-white mb-2">6</div>
                        <!-- <div class="text-xs  text-white">
                         <span class="text-redx mr-1"> 1.10%</span>   
                        Since yesterday</div> -->
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->

<!-- Content Row -->


</div>
</body>
@endsection