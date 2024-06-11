<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Profile Siswa | Absen Siswa</title>
</head>
<body>
    <div class="container-fluid bg-white p-0">
        {{-- Navbar --}}
        <nav class="navbar bg-body-secondary px-3" style="--bs-bg-opacity: .5;">
            <div class="container-fluid">
                <h1 class="navbar-brand">Profile</h1>
                <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->username }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="d-flex align-items-center mt-4 ms-4 mb-2">
            <a href="/absen" class="mb-0 text-decoration-none text-black"><i class="fa-solid fa-arrow-left me-2"></i>Kembali</a>
        </div>
        {{-- Form --}}
        <div class="container-fluid">
            <form class="row g-3 justify-content-center m-auto" action="" method="POST">
            @csrf
            @method('PUT')
                <div class="col-md-3">
                    <label for="username" class="form-label">Username<span class="text-danger">*</span></label>
                    <input type="text" value="{{ $data_user->username }}" name="username" class="form-control border-2" id="username" autocomplete="off">
                    @error('username')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for="telefone" class="form-label">Nomor Telfon<span class="text-danger">*</span></label>
                    <input type="text" value="{{ $data_user->telefone }}" name="telefone" class="form-control border-2" id="telefone" autocomplete="off">
                    @error('telefone')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="col-md-2">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin<span class="text-danger">*</span></label>
                    <select name="jenis_kelamin" class="form-select border-2" id="jenis_kelamin" aria-label="Default select example">
                        <option value="{{ $data_user->jenis_kelamin }}" selected hidden>{{ $data_user->jenis_kelamin }}</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="col-md-8">
                    <label for="passwordOld" class="form-label">Password<span class="text-danger">*</span></label>
                    <input type="password" name="passwordOld" class="form-control border-2" id="passwordOld">
                    @error('passwordOld')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="col-md-8">
                    <label for="password" class="form-label">Password Baru</label>
                    <input type="password" name="password" class="form-control border-2" id="password">
                    @error('password')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="col-md-8">
                    <label for="passwordConfirm" class="form-label">Konfirmasi Password Baru</label>
                    <input type="password" name="passwordConfirm" class="form-control border-2" id="passwordConfirm">
                    @error('passwordConfirm')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary">Ganti</button>
                </div>
            </form>
        </div>
    </div>
    {{-- Alert --}}
    @if($errors->any())
        <div class="position-fixed bottom-0 end-0 p-3">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fa-solid fa-triangle-exclamation me-2"></i>
                Proses update gagal!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
</body>
{{-- Icon --}}
<script src="https://kit.fontawesome.com/e814145206.js" crossorigin="anonymous"></script>
</html>