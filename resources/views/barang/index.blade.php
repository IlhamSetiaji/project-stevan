<!DOCTYPE html>
<html lang="en">

<head>
    @include('stisla.head')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            @include('stisla.navbar')
            @include('stisla.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-warning alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span>&times;</span>
                                    </button>
                                    {{ $error }}
                                </div>
                            </div>
                        @endforeach
                    @endif
                    @if (session('status'))
                        <div class="alert alert-warning alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>&times;</span>
                                </button>
                                {{ session('status') }}
                            </div>
                        </div>
                    @endif
                    <div class="section-header">
                        <h1>Admin Page</h1>
                    </div>
                    <div class="section-body">
                        <h2 class="section-title">Hi, {{ auth()->user()->name }}</h2>
                        <p class="section-lead">
                            Welcome to admin page
                        </p>
                        <div class="card-body p-0">
                            {{-- <a class="btn btn-primary" href="#" data-toggle="modal"
                                data-target="#modalAddData">Tambah Jurusan</a></br></br> --}}
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                Kode Barang
                                            </th>
                                            <th>Nama Barang</th>
                                            <th>Tahun Perolehan</th>
                                            <th>NUP</th>
                                            <th>Merk</th>
                                            <th>Kuantitas</th>
                                            <th>Harga Satuan Barang</th>
                                            <th>Harga</th>
                                            <th>Kondisi</th>
                                            <th>Penggunaan</th>
                                            <th>Ruangan</th>
                                            <th>Keterangan</th>
                                            <th>Dokumentasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($barang as $b)
                                            <tr>
                                                <td class="text-center">
                                                    {{ $b->kode_barang }}
                                                </td>
                                                <td>
                                                    {{ $b->nama_barang }}
                                                </td>
                                                <td>
                                                    {{ $b->tahun_perolehan }}
                                                </td>
                                                <td>
                                                    {{ $b->nup }}
                                                </td>
                                                <td>
                                                    {{ $b->merk }}
                                                </td>
                                                <td>
                                                    {{ $b->kuantitas }}
                                                </td>
                                                <td>
                                                    {{ $b->harga_satuan_barang }}
                                                </td>
                                                <td>
                                                    {{ $b->harga }}
                                                </td>
                                                <td>
                                                    {{ $b->kondisi }}
                                                </td>
                                                <td>
                                                    {{ $b->penggunaan }}
                                                </td>
                                                <td>
                                                    {{ $b->ruangan }}
                                                </td>
                                                <td>
                                                    {{ $b->keterangan }}
                                                </td>
                                                <td>
                                                    <img src="{{ asset($b->dokumentasi) }}" alt=""
                                                        width="300" height="200">
                                                </td>
                                            </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                            <!-- This is where your code ends -->
                        </div>

                        <!-- This is where your code ends -->
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                @include('stisla.footer')
            </footer>
        </div>
    </div>

    @include('stisla.script')
</body>

</html>
