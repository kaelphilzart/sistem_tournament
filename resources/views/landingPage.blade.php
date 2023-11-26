@extends('layouts.navbar')
<style>
    .content{
    position: relative;
    height: 80vh;
    width: 100%;
    align-items: center;
    justify-content: center;
  }

  .content::before {
    content: "";
    background-image: url('assets/img/Rectangle\ 39.png');
    background-size: cover;
    position: absolute;
    top: 0px;
    right: 0px;
    bottom: 0px;
    left: 0px;
    filter: brightness(30%);
    z-index: -1;
  }
  
  
</style>
@section('content')

<section>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4 mx-auto">
          <h2 class="title">Be Part of <br> Our Big Family</h2>      
        </div>
      </div>
    </div>
    <div class="container">
    <div class="row">
      <div class="col-12 col-md-4 mx-auto isi mt-4">
        <p>it is a long established fact that a reader will be distracted by 
          the readable content of a page when looking at its layout. 
          The point of using Lorem ipsum is that it has a more-or-less normal distribution of letters</p>
          <div class="py-0 mt-5">
          <a href="{{ route('form') }}"type="button" class="btn btn-warning btn-sm px-4" style="border-radius: 0%; font-size: medium; font-weight: bold;">
          JOIN NOW
        </a>
        <a href="{{ route('masuk') }}"type="button" class="btn btn-warning btn-sm px-4" style="border-radius: 0%; font-size: medium; font-weight: bold;">
          LOGIN
        </a>
        
        </div>
      </div>
    </div>
  </div>
  </div>
 </section>
</body>
<footer>
  <div class="container-fluid">
  <div class="row ">
    <div class="col-12 text-center py-3" style="background-color: black;">
      <p class="text-white mt-2" style="font-size:large">Professionalism For Maximum E-sports</p>
    </div>
  </div>
</div>
</footer>
@endsection