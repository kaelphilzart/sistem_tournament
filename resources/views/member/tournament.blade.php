@extends('layouts.template')

@section('content')
<body style="background-color:#ffcf00 ;">
    

<div class="container py-4">
    <h4 class="text-center py-3"><b>EVENT FOR SONIC</b></h4>
    <div class="row">
        @foreach($dataTur as $key => $dataTur)
        <div class="col-md-6 mb-3">
            <div class="card shadow-lg" style="background-color: black;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                       <a href="{{ asset($dataTur->foto) }}" target="_blank"> <img src="{{ asset($dataTur->foto) }}" class="card-img py-2 mx-2"
                            style="object-fit: cover; height: 100%;" alt="..."></a>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="text-white mt-3">
                            <h5 class="card-title mt-4" style="color: white;">{{$dataTur->nama_turnament}}</h5>
                        
                                <p> Slot : {{$dataTur->slot}}/{{$dataTur->slot}}
                                    <br>
                                    Prize : {{$dataTur->prize}} Diamond
                                    <br>
                                    Play Off : {{$dataTur->mulai}} 
                                    <br>
                                    Close Register : {{$dataTur->batas_dftr}} 
                                </p>
                            </div>
                            <div class="text-en">
                                <a href="{{route('daftar', $dataTur->id_turnament)}}" class="btn btn-warning mb-3 mr-3"><b>Daftar</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

<script>
// Ambil elemen span yang berisi kode jenis kelamin
const jenisKelaminSpan = document.getElementById("jenis-kelamin");

// Fungsi untuk mengubah kode jenis kelamin menjadi string
function ubahKodeJenisKelamin(kode) {
    if (kode === 1) {
        return "Laki - Laki";
    } else if (kode === 2) {
        return "Perempuan";
    } else {
        return "Tidak Diketahui";
    }
}

// Mengambil kode jenis kelamin dari elemen span
const kodeJenisKelamin = parseInt(jenisKelaminSpan.textContent);

// Mengubah kode menjadi string
const jenisKelaminString = ubahKodeJenisKelamin(kodeJenisKelamin);

// Menampilkan hasil dalam elemen span
jenisKelaminSpan.textContent = jenisKelaminString;
</script>
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