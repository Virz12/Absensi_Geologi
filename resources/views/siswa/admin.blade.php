<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/styleBase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleIndex.css') }}">
    
    <!-- ICON -->
    <script src="https://kit.fontawesome.com/a1fe272ba9.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ asset('image/favicon-16x16.png') }}" type="image/x-icon" ?v={{ time() }}>
    <title>Data Kehadiran</title>
</head>

<body>
    @include('sweetalert::alert')
    <div class="header">
        <div class="container nav">
            <img src="{{ asset('image/brand.png') }}" alt="Logo">
            <h1>DATA KEHADIRAN</h1>
            <form action="{{ route('siswa.admin') }}" method="GET">
                <button type="submit" class="btnSearch" id="search"><i class="fa-solid fa-magnifying-glass" style="color: #c41700"></i></button>
                <div class="search">
                    <button type="submit" class="btnSearch"><i class="fa-solid fa-magnifying-glass" style="color: #c41700"></i></button>
                    <input type="text" placeholder="Masukan Keywords..." name="keyword" value="{{ $keyword }}" autocomplete="off">
                </div>
            </form>
            <a href=""><img src="{{ asset('image/log-out.svg') }}" alt="Log Out"></a>
        </div>
    </div>
    <main>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Opsi Kehadiran</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->Nama }}</td>
                        <td class="tanggal">{{ $data->Tanggal }}</td>
                        <td>{{ $data->OpsiKehadiran }}</td>
                        <td>-</td>
                        <td>
                            <a href=""><button>Tambah Komentar</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $siswa->appends(['keyword' => $keyword])->links('vendor.pagination.default') }}
        </div>
    </main>
    <footer>
        <span>Copyright © SMKN 2 BANDUNG</span>
    </footer>
    <script>
        // Mengubah huruf T menjadi spasi
        const x = document.getElementsByClassName("tanggal");
        Array.from(x).forEach(tanggal => {
            tanggal.innerHTML = tanggal.innerText.replace("T", " ");
        });


        const search = document.getElementById("search");
        const mediaWidth = window.matchMedia('(max-width: 700px)');
        const searchInput = document.querySelector(".search");
        
        if (mediaWidth.matches) {
            search.setAttribute('type', 'button');

            search.addEventListener('click', () => {
                searchInput.classList.toggle('block');
            });
        } else {
            search.style.display='none';
        }

    </script>
</body>
</html>