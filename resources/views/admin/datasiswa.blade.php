<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- Bootstrap --}}
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <title>Data Siswa</title>
    </head>
    <body class="vh-100" >
        <style>
            body {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1920' height='1080' preserveAspectRatio='none' viewBox='0 0 1920 1080'%3e%3cg mask='url(%26quot%3b%23SvgjsMask21244%26quot%3b)' fill='none'%3e%3crect width='1920' height='1080' x='0' y='0' fill='rgba(255%2c 255%2c 255%2c 1)'%3e%3c/rect%3e%3crect width='60' height='60' clip-path='url(%26quot%3b%23SvgjsClipPath21245%26quot%3b)' x='1849.8' y='-9.33' fill='url(%26quot%3b%23SvgjsPattern21246%26quot%3b)' transform='rotate(253.35%2c 1879.8%2c 20.67)'%3e%3c/rect%3e%3ccircle r='134.46788196200924' cx='1130.49' cy='724.34' stroke='rgba(255%2c 0%2c 64%2c 1)' stroke-width='1.68' stroke-dasharray='4%2c 4'%3e%3c/circle%3e%3crect width='238.64' height='238.64' clip-path='url(%26quot%3b%23SvgjsClipPath21247%26quot%3b)' x='493.79' y='156.21' fill='url(%26quot%3b%23SvgjsPattern21248%26quot%3b)' transform='rotate(206.44%2c 613.11%2c 275.53)'%3e%3c/rect%3e%3crect width='168' height='168' clip-path='url(%26quot%3b%23SvgjsClipPath21249%26quot%3b)' x='1630.83' y='68.91' fill='url(%26quot%3b%23SvgjsPattern21250%26quot%3b)' transform='rotate(83.68%2c 1714.83%2c 152.91)'%3e%3c/rect%3e%3crect width='680.96' height='680.96' clip-path='url(%26quot%3b%23SvgjsClipPath21251%26quot%3b)' x='-322.58' y='238.13' fill='url(%26quot%3b%23SvgjsPattern21252%26quot%3b)' transform='rotate(312.42%2c 17.9%2c 578.61)'%3e%3c/rect%3e%3crect width='370.8' height='370.8' clip-path='url(%26quot%3b%23SvgjsClipPath21253%26quot%3b)' x='1577.48' y='519.96' fill='url(%26quot%3b%23SvgjsPattern21254%26quot%3b)' transform='rotate(279.12%2c 1762.88%2c 705.36)'%3e%3c/rect%3e%3ccircle r='90' cx='255.11' cy='872.86' fill='rgba(8%2c 175%2c 129%2c 1)'%3e%3c/circle%3e%3ccircle r='141.05922210403688' cx='1876.45' cy='387.57' stroke='rgba(35%2c 187%2c 203%2c 1)' stroke-width='1.86' stroke-dasharray='3%2c 2'%3e%3c/circle%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask21244'%3e%3crect width='1920' height='1080' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cpattern x='0' y='0' width='60' height='6' patternUnits='userSpaceOnUse' id='SvgjsPattern21246'%3e%3crect width='60' height='3' x='0' y='0' fill='rgba(8%2c 175%2c 129%2c 1)'%3e%3c/rect%3e%3crect width='60' height='3' x='0' y='3' fill='rgba(0%2c 0%2c 0%2c 0)'%3e%3c/rect%3e%3c/pattern%3e%3cclipPath id='SvgjsClipPath21245'%3e%3ccircle r='15' cx='1879.8' cy='20.67'%3e%3c/circle%3e%3c/clipPath%3e%3cpattern x='0' y='0' width='6.28' height='6.28' patternUnits='userSpaceOnUse' id='SvgjsPattern21248'%3e%3cpath d='M3.14 1L3.14 5.28M1 3.14L5.28 3.14' stroke='rgba(0%2c 243%2c 84%2c 1)' fill='none' stroke-width='1'%3e%3c/path%3e%3c/pattern%3e%3cclipPath id='SvgjsClipPath21247'%3e%3ccircle r='59.66' cx='613.11' cy='275.53'%3e%3c/circle%3e%3c/clipPath%3e%3cpattern x='0' y='0' width='6' height='6' patternUnits='userSpaceOnUse' id='SvgjsPattern21250'%3e%3cpath d='M0 6L3 0L6 6' stroke='rgba(169%2c 0%2c 178%2c 1)' fill='none'%3e%3c/path%3e%3c/pattern%3e%3cclipPath id='SvgjsClipPath21249'%3e%3ccircle r='42' cx='1714.83' cy='152.91'%3e%3c/circle%3e%3c/clipPath%3e%3cpattern x='0' y='0' width='6.08' height='6.08' patternUnits='userSpaceOnUse' id='SvgjsPattern21252'%3e%3cpath d='M0 6.08L3.04 0L6.08 6.08' stroke='rgba(252%2c 255%2c 13%2c 1)' fill='none'%3e%3c/path%3e%3c/pattern%3e%3cclipPath id='SvgjsClipPath21251'%3e%3ccircle r='170.24' cx='17.9' cy='578.61'%3e%3c/circle%3e%3c/clipPath%3e%3cpattern x='0' y='0' width='12.36' height='12.36' patternUnits='userSpaceOnUse' id='SvgjsPattern21254'%3e%3cpath d='M6.18 1L6.18 11.36M1 6.18L11.36 6.18' stroke='rgba(252%2c 255%2c 13%2c 1)' fill='none' stroke-width='1'%3e%3c/path%3e%3c/pattern%3e%3cclipPath id='SvgjsClipPath21253'%3e%3ccircle r='92.7' cx='1762.88' cy='705.36'%3e%3c/circle%3e%3c/clipPath%3e%3c/defs%3e%3c/svg%3e");            background-position: fixed;
                background-size: cover;
                background-position: fixed;
                left: 0;
                width: 100%;
                height: 100%;
                justify-content: center;
                align-items: center;
                background-repeat: no-repeat;
                margin: 0;
                padding: 0;
            }
        </style>
    <body>
        <div class="container-fluid p-0">
            {{-- Navbar --}}
            <nav class="navbar bg-body-secondary px-3" style="--bs-bg-opacity: .5;">
                <div class="container-fluid">
                    <h1 class="navbar-brand">Data Siswa</h1>
                    <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->username }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="/admin_profile">Profile</a></li>
                        <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                    </ul>
                    </div>
                </div>
            </nav>
            <main class="content">
                <div class="container-fluid pt-4 px-4 pb-4">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <a href="/dashboard" class="mb-0 text-decoration-none text-black"><i class="fa-solid fa-arrow-left me-2"></i>Kembali</a>
                        <form class=" d-flex " action="" method="GET"> {{-- Form Navbar --}}
                            <input class="form-control border-2 " type="search" name="keyword" value="{{ $keyword }}" placeholder="Cari" autocomplete="off">
                        </form>
                    </div>
                    <div class="col-12">
                        <div class="row g-4 text-left">
                        @forelse ($datasiswa as $dsiswa)            
                            <div class="col-md-3 ">
                                <div class="shadow-lg card ">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item ">Nama : {{$dsiswa->username}}</li>
                                        <li class="list-group-item ">Jenis Kelamin : {{$dsiswa->jenis_kelamin}} </li>
                                        <li class="list-group-item ">No Hp : {{$dsiswa->telefone}} </li>
                                        <li class="list-group-item fw-bold">Status : {{$dsiswa->status}}</li>
                                        <li class="list-group-item ">
                                            @if($dsiswa->status == 'nonaktif')
                                                        <div class="d-flex justify-content-between gap-2">
                                                            <a href="/activate/{{ $dsiswa->id }}" class="text-decoration-none  w-100">
                                                            <button type="submit" value="Aktif" class="btn btn-success w-100">Aktif</button></a>
                                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Hapus{{ $dsiswa->id }}">Hapus</button>
                                                        </div>
                                            @elseif($dsiswa->status == 'aktif')
                                                <a href="/deactivate/{{ $dsiswa->id }}" class="text-decoration-none">                                                
                                                    <button class="btn btn-secondary w-100">Non Aktif</button>
                                                </a>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- Confirmation Modal --}}
                            <div class="modal fade" id="Hapus{{ $dsiswa->id }}" tabindex="-1" aria-labelledby="HapusLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="HapusLabel">Hapus Data</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            Apakah anda yakin ingin menghapus data ini?<br>
                                            <b>{{ $dsiswa->username }}</b>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="/hapussiswa/{{ $dsiswa->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                                <h2 class="text-center">Data Kosong</h2>
                        @endforelse
                        </div>
                    </div>
                </div>
            </main>
        </div>
        {{-- Toast --}}
        @if (session()->has('notification'))
        <div class="position-fixed bottom-0 end-0 p-3 z-3">
            <div class="alert alert-success" role="alert">
                <i class="fa-solid fa-check me-2"></i>
                {{ session('notification') }}
                <button type="button" class="btn-close success" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif
    </body>
    {{-- Icon --}}
    <script src="https://kit.fontawesome.com/e814145206.js" crossorigin="anonymous"></script>
</html>