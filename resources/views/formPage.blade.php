@extends('layouts.navbar')
<style>

        .content {
            position: relative;
            height: 100vh;
            width: 100%;
            align-items: center;
            justify-content: center;
        }

        .content::before {
            content: "";
            width: 100%;
            height: auto;
            background-image: linear-gradient(-10deg, #000000 50%, transparent 50%), url("assets/img/Rectangle 39.png");
            background-size: auto;
            position: absolute;

            margin-top: -12%;
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
                        <h3 class="judul">Complete field with your data</h2>
                        <p class="sub">This is some description an some instruction to
                            fill the form below, Yes it is</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid pb-5" style="background-color:black;">
        <div class="container">
            <form action="{{ route('create-membership') }}" method="POST">
                @csrf
                <div class="row mb-5">
                    <div class="col-12 col-md-5 data-kiri mx-auto text-white">
                        <input type="text" id="nama_depan" name="nama_depan" class="form-control isi-text" placeholder="Nama Depan">
                    </div>
                    <div class="col-12 col-md-5 data-kanan mx-auto">
                        <input type="text" id="nama_belakang" name="nama_belakang" class="form-control isi-text"
                            placeholder="Nama Belakang">
                    </div>
                </div>
                <div class="row mb-2 ">
                    <div class="col-12 col-md-5 data-kiri mx-auto text-white">
                        <input type="text" id="nickname" name="nickname" class="form-control isi-text" placeholder="Nickname">
                    </div>
                    <div class="col-12 col-md-5 data-kanan mx-auto">
                        <div class="form-group isi-text">
                            <label>Jenis Kelamin:</label>
                            <div class="form-check">
                                <input type="radio" id="kelamin" name="kelamin" value="1"
                                    class="form-check-input">
                                <label for="laki-laki" class="form-check-label">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="kelamin" name="kelamin" value="2"
                                    class="form-check-input">
                                <label for="perempuan" class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-12 col-md-5 data-kiri mx-auto text-white">
                        <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control isi-text"
                            placeholder="Tempat Lahir">
                    </div>
                    <div class="col-12 col-md-5 data-kanan mx-auto">
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control isi-text"
                            placeholder="tanggal_lahir">
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-12 col-md-5 data-kiri mx-auto text-white">
                        <input type="email" id="email" name="email" class="form-control isi-text" placeholder="Email">
                    </div>
                    <div class="col-12 col-md-5 data-kanan mx-auto">
                        <input type="tel" id="no_hp" name="no_hp" class="form-control isi-text" placeholder="No HP"
                            pattern="[0-9]+" required>
                    </div>
                </div>
                <div class="row" style="margin-bottom:-15px;">
                    <div class="col-12 col-md-5 data-kiri mx-auto text-white">
                        <input type="text" id="id_discord" name="id_discord" class="form-control isi-text" placeholder="Id Discord">
                    </div>
                    <div class="col-12 col-md-5 data-kanan mx-auto text-white">
                        <button type="submit" class="btn btn-warning btn-sm "
                            style="border-radius: 0%; font-size: medium; font-weight: bold;">
                            <div class="px-3">
                                SUBMIT DATA
                            </div>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>

        // JavaScript
        const inputs = document.querySelectorAll('.form-control');

        inputs.forEach(input => {
            input.addEventListener('input', () => {
                input.classList.add('custom-filled');
            });

            input.addEventListener('blur', () => {
                if (input.value === '') {
                    input.classList.remove('custom-filled');
                }
            });
        });

    </script>
</body>
<footer>
  <!-- <div class="container-fluid">
  <div class="row ">
    <div class="col-12 text-center py-3" style="background-color: black;">
   
    </div>
  </div>
</div> -->
</footer>
    @endsection