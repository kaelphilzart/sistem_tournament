<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- Material Kit CSS -->
  <link href="/assets/img" rel="stylesheet" />

  <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body >
<nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: black; border-bottom: 2px solid #ffcf00; ">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../assets/img/logo-login.png" alt="" width="10%" height="auto" class="d-inline-block align-text-top">
                  </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto  mb-lg-0" style="font-weight: bold;">
                    <li class="nav-item">
                        <a class="nav-link active text-navbar text-white" aria-current="page" href="{{route('home-member')}}">HOME</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active text-navbar text-white" href="{{route('profile')}}">PROFILE</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active text-navbar text-white" href="{{route('turnament')}}">EVENT</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active text-navbar text-white" href="{{route('team')}}">TEAM</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active text-navbar text-white" href="{{route('logout-member')}}">LOGOUT</a>
                      </li>
                </ul>
               
              </div>
            </div>
          </nav>
          @if(session()->has('success'))
    <div x-data="{ show: true}"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="position-fixed bg-success rounded right-3 text-sm py-2 px-4">
      <p class="m-0">{{ session('success')}}</p>
    </div>
  @endif
  @if (session('error'))
  <div x-data="{ show: true}"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="position-fixed bg-danger rounded right-3 text-white py-2 px-4">
      <p class="m-0">{{ session('error')}}</p>
    </div>
@endif
@yield('content')
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>


    <script>
  window.addEventListener('scroll', function () {
    var navbar = document.querySelector('.transparent-navbar');
    if (window.scrollY > 0) {
      navbar.style.backgroundColor = 'black'; // Atur warna latar belakang menjadi hitam saat digulir ke bawah
    } else {
      navbar.style.backgroundColor = 'transparent'; // Kembalikan latar belakang menjadi transparan di atas
    }
  });
</script>

    
</body>

</html>