@extends('layouts.template')

@section('content')
<body style="background-color:#ffcf00 ;">
    

<div class="container py-4">
    <h4 class="text-center py-3"><b>Your Team</b></h4>
    <div class="row">
        @foreach($data as  $dataTeam)
        <div class="col-md-6 mb-3">
            <div class="card shadow-lg" style="background-color: black;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                       <a href="{{ asset($dataTeam->foto) }}" target="_blank"> <img src="{{ asset($dataTeam->foto) }}" class="card-img py-2 mx-2"
                            style="object-fit: cover; height: 100%;" alt="..."></a>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="text-white mt-3 mb-3" >
                            <h5 class="card-title " style="color: #ffcf00;">{{$dataTeam->nama_turnament}}</h5>
                            <p><b>Team : {{$dataTeam->nama_team}}</b></p>
                            Player 1: {{ $dataTeam->player1->username ?? 'Tidak ada pemain' }}
                <br>
                Player 2: {{ $dataTeam->player2->username ?? 'Tidak ada pemain' }}
                <br>
                Player 3: {{ $dataTeam->player3->username ?? 'Tidak ada pemain' }}
                <br>
                Player 4: {{ $dataTeam->player4->username ?? 'Tidak ada pemain' }}
                <br>
                Player 5: {{ $dataTeam->player5->username ?? 'Tidak ada pemain' }}
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

@endsection