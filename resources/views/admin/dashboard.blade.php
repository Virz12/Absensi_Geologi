<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        {{-- Bootstrap --}}
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <title>Dashboard</title>
    </head>
    <body>
        <div class="container-fluid bg-white p-0">
            {{-- Navbar --}}
            <nav class="navbar bg-body-secondary px-3" style="--bs-bg-opacity: .5;">
                <div class="container-fluid">
                    <h1 class="navbar-brand">Data Kehadiran</h1>
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
                <div class="container-fluid pt-3 px-3 pb-4 ">
                    <div class="col-12">
                        <div class="shadow-lg card text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <a href="/datasiswa" class="text-decoration-none fs-4"><button class="btn btn-sm btn-primary p-2 fs-6">Data Siswa <i class="fa-solid fa-folder"></i></button></a>
                                <form class=" d-flex  m-3"> {{-- Form Navbar --}}
                                    <input class="form-control border-1" type="search" placeholder="Search">
                                </form>
                            </div>
                            {{-- Table Absen --}}
                            <div class="table-responsive pb-2">
                                <table  class="table-hover table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Masuk</th>
                                            <th scope="col">Pulang</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ( $absen as $dabsen )
                                            <tr class="align-middle">
                                                <td>{{ $dabsen->hari }} <br> {{ $dabsen->tanggal }}</td>
                                                <td>{{ $dabsen->username }}</td>
                                                <td>
                                                    @if ( $dabsen->waktu_masuk == false )
                                                        -
                                                    @else                                                                                    
                                                        {{ $dabsen->waktu_masuk }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ( $dabsen->waktu_pulang == false )
                                                        -
                                                    @else
                                                        {{ $dabsen->waktu_pulang }}
                                                    @endif
                                                </td>
                                                <td>{{ $dabsen->status_kehadiran }}</td>
                                            </tr>
                                            @empty
                                            <h2>Data Kososng</h2>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div>{!! $absen->links() !!}</div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid pt-3 px-3 pb-4 ">
                    <div class="col-12">
                        <div class="shadow-lg card text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap">
                                <h5 class="mb-0 w-auto">Chart Kehadiran Tahun {{ $tahun }}</h5>
                                <form action="" method="GET" class="d-flex mt-2 mt-sm-0">
                                    @csrf
                                    <select name="bulan" class="form-select me-2" onchange="form.submit()">
                                        <option value="{{ $bulanSekarang }}" selected hidden>{{ $bulanSekarang }}</option>
                                        @if ($dataBulan->isEmpty())
                                        @else
                                            @forelse($dataBulan as $bulan)
                                                <option value="{{ $bulan }}">{{ $bulan }}</option>
                                            @empty
                                                <option value="{{ $bulan }}">{{ $bulan }}</option>
                                            @endforelse
                                        @endif
                                    </select>
                                    <select name="tahun" class="form-select" onchange="form.submit()">
                                        <option value="{{ $tahun }}" selected hidden>{{ $tahun }}</option>
                                        @if ($dataTahun->isEmpty())
                                        @else
                                            @forelse($dataTahun as $tahun)
                                                <option value="{{ $tahun }}">{{ $tahun }}</option>
                                            @empty
                                                <option value="{{ $tahun }}">{{ $tahun }}</option>
                                            @endforelse
                                        @endif
                                    </select>
                                </form>
                            </div>
                            {{-- Chart --}}
                            <div class="w-100">
                                {!! $chartAbsen->render() !!}
                            </div>
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