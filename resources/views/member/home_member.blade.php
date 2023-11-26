@extends('layouts.template')

@section('content')

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
    filter: brightness(50%);
    z-index: -1;
  }
  .link{
   color: black;
  }
  
  
</style>
@section('content')

<section>
  <div class="content">
  </div>
 </section>
 <div class="container-fluid pb-5" style="background-color:#ffcf00 ;">
 <div class="atas">
  <div class="col-12 shadow-sm" style="display: block;background-color: black;height: 10%;">
    <h4 class="text-white text-center">
        Selamat Datang Di Membership ONIC E-Sport</h4>
  </div>
 </div>

 <div class="container">
    <div class="row py-4 my -3">
        <div class="col-md-6 ">
        <img src="/assets/img/home1.jpg" class="img-thumbnail" alt="..." style="border: 2px black">
        </div>
        <div class="col-md-6 test-justify">
            <h2><b>SOBAT ONIC</b></h2>
            <h4>Selamat datang {{Auth::user()->username}}</h4>
            <p>Kami Onic Membuat platform khusus buat para SONIC agar para fans bisa berkumpul di satum tempat
                dan merasakan mabar mobile legend sesama SONIC, jadi kami disini menyediakan server discord.
                untuk join silakan   <br>
            <a href="https://discord.com/invite/8uhhCGNd" class="link" target="_blank">Klik disini</a></p>
        </div>
    </div>
 </div>
    </div>
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