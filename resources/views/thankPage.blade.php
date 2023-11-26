@extends('layouts.navbar')
<style>
   .content {
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
      filter: brightness(10%);
      z-index: -1;
    }
    .utama {
    margin-top: 6rem;
    position: relative;
    color: #ffffff;
    font-size: xx-large;
    line-height: 1.0;
    text-align: center;
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  }
</style>

@section('content')
<section>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4 mx-auto">
          <h2 class="utama">THANK YOU</h2>
          <p class="sub">for submitting your data</p>      
        </div>
      </div>
    </div>
    <div class="container">
    <div class="row">
      <div class="col-12 col-md-4 mx-auto isi mt-4">
        <p>We ensure your privacy, we will use your data only for internal ONIC necessary.
        </p>
        <p>
            Our team will reviwe your submitted data first, then if your data was valid and
             has been approved you will be official members of ONIC E-Sport Community Fans
        </p>
          <a href="{{route('masuk')}}" class="btn btn-warning">Login</a>
          <a href="{{route('landingPage')}}" class="btn btn-danger">Home</a>
      </div>
    </div>
  </div>
  </div>
 </section>
</body>
<footer>
    <div class="container-fluid">
  <div class="row ">
    <div class="col-12 text-center pt-0" style="background-color: #ffcf00;">
      <p class="text-black mt-1 mb-0" style="font-size: large; font-weight:500;">Stay connect to our social media</p>
     <div clas="logo-footer">
      <img src="assets/img/1.png" alt="" width="40px" height="auto" class="mx-2 mb-1">   
      <img src="assets/img/2 (1).png" alt="" width="40px" height="auto" class="mx-2 mb-1">  
      <img src="assets/img/3.png" alt="" width="40px" height="auto" class="mx-2 mb-1">  
      <img src="assets/img/4.png" alt="" width="40px" height="auto" class="mx-2 mb-1">  
    </div>
    </div>
  </div>
</div>
</footer>
@endsection