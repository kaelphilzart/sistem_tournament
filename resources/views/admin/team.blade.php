@extends('layouts.admin.template')

@section('content')

<div class="container py-4 bg-dasar">

    <a href="{{route('data-tur')}}" class="btn btn-danger my-3"><span><i class="fa-solid fa-backward mr-2"></i></span><b>BACK</b></a>

    <div class="card">
    <div class="card-header pb-0">
        <div class="card-title text-center">
            <h3><b>Buat Team</b></h3>
        </div>
        <form class="cmxform" method="POST" action="{{ route('create-team') }}">
    @csrf
    <input type="hidden" class="form-control" id="id_turnament" name="id_turnament" value="{{$data->id_turnament}}">
                @error('id_turnament')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                @enderror
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <input type="text" class="form-control" id="nama_team" name="nama_team" placeholder="Nama Team">
                @error('nama_team')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        @for ($i = 1; $i <= 5; $i++)
            <div class="col-md-6">
                <div class="form-floating mb-2">
                    <select class="form-select" name="id_pendaftar{{ $i }}" id="id_pendaftar{{ $i }}">
                        @foreach($pendaftar as $player)
                            <option value="{{ $player->id_user }}">{{ $player->username }}</option>
                        @endforeach
                    </select>
                    @error('id_pendaftar' . $i)
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                    @enderror
                    <label class="floatingselect ml-2">Player {{ $i }}</label>
                </div>
            </div>
        @endfor
    </div>

    <button class="btn btn-info mb-3 px-3" type="button" id="regenerate">regenerate</button>
    <button class="btn btn-dark mb-3" type="submit">Create Team</button>
</form>

    </div>
</div>
    <h4 class="text-center py-3 text-white"><b>Daftar Team Pada Turnament : {{$data->nama_turnament}}</b></h4>

    <div class="row">
        @foreach($teams as $dataTeam)
        <div class="col-md-4 mb-3">
            <div class="card shadow-lg" >
                <div class="row no-gutters">
                <h5 class="card-title mt-4" >
                               <b>Team  : {{$dataTeam->nama_team}}</b>
                               </h5>
                               <p>
                Player 1: {{ $dataTeam->player1->username ?? 'Tidak ada pemain' }}
                <br>
                Player 2: {{ $dataTeam->player2->username ?? 'Tidak ada pemain' }}
                <br>
                Player 3: {{ $dataTeam->player3->username ?? 'Tidak ada pemain' }}
                <br>
                Player 4: {{ $dataTeam->player4->username ?? 'Tidak ada pemain' }}
                <br>
                Player 5: {{ $dataTeam->player5->username ?? 'Tidak ada pemain' }}
            </p>
            <form action="{{route('admin.hapus-team', $dataTeam->id_team)}}" method="post">@csrf
                    <button class="btn btn-danger px-3 mb-3" onClick="return confirm('Yakin Hapus Team?')">Hapus Team</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fungsi untuk mengisi input pemain secara acak tanpa nama yang sama
        function fillRandomPlayers() {
            var players = @json($pendaftar);
            var selectedPlayers = [];
            
            // Cek apakah jumlah pemain yang tersedia cukup untuk membentuk satu tim (harus lebih dari 5)
            if (players.length < 5) {
                alert('Pendaftar masih kurang untuk membentuk satu tim.');
                return;
            }

            for (var i = 1; i <= 5; i++) {
                var playerSelect = document.getElementById('id_pendaftar' + i);
                if (players.length > 0) {
                    var randomIndex;

                    do {
                        randomIndex = Math.floor(Math.random() * players.length);
                    } while (selectedPlayers.includes(randomIndex));

                    selectedPlayers.push(randomIndex);
                    playerSelect.selectedIndex = randomIndex;
                }
            }
        }

        fillRandomPlayers();

        document.getElementById('regenerate').addEventListener('click', function () {
            fillRandomPlayers();
        });
    });
</script>




@endsection


