@extends('layouts.template')

@section('content')
<body style="background-color:#ffcf00 ;">
    

<div class="container py-4">
    <div class="card shadow-lg" style="background-color: black;">
        <div class="row no-gutters">
            <div class="col-md-4 py-4 px-2">
                <img src="../assets/img/logo-login.png" class="card-img px-3" style="object-fit: cover; height: 100%;" alt="...">
            </div>
            <div class="col-md-8">
            <h5 class="card-title text-center mt-4" style="color: #ffcf00;"><b>PROFILE MEMBER</b></h5>
                <div class="row">
                
                    <div class="col-md-6">
                    <div class="text-white mt-3">
                    <p><strong>Kode Member  :</strong> {{ $userMembership->kode_member }}</p>
                    <p><strong>Nama Depan :</strong> {{ $userMembership->nama_depan }}</p>
                    <p><strong>Nickname :</strong> {{ $userMembership->nickname }}</p>
                    <p><strong>Tempat Lahir :</strong> {{ $userMembership->tempat_lahir }}</p>
                    <p><strong>Email :</strong> {{ $userMembership->email }}</p>
                        </div> 
                    </div>
                    <div class="col-md-6">
                    <div class="text-white mt-3">
                    <p><strong>Id Discord :</strong> {{ $userMembership->id_discord }}</p>
                    <p><strong>Nama Belakang :</strong> {{ $userMembership->nama_belakang }}</p>
                    <p><strong>Kelamin : </strong><span id="jenis-kelamin"> {{ $userMembership->kelamin}}</span> </p>
                    <p><strong>Tanggal Lahir :</strong> {{ $userMembership->tanggal_lahir }}</p>
                    <p><strong>No HP :</strong> {{ $userMembership->no_hp}}</p>
                        </div>    
                </div>
                <!-- <div class="text-en">
                    <a href="" class="btn btn-warning ">Edit Profile</a>
                </div> -->
                </div>
                </div>
            </div>
        </div>
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
@endsection