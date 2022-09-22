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
                        <div class="container">
                            <form action="{{ url('barang/create') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="form-label">Kode Barang</label>
                                    <input type="text" class="form-control" id="name" name="kode_barang">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label">Nama Barang</label>
                                    <input type="text" class="form-control" id="name" name="nama_barang">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label">Tahun Perolehan</label>
                                    <input type="number" min="1900" max="2100" class="form-control"
                                        id="name" name="tahun_perolehan">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label">NUP</label>
                                    <input type="text" class="form-control" id="name" name="nup">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label">Merk/Type</label>
                                    <input type="text" class="form-control" id="name" name="merk">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label">Kuantitas</label>
                                    <input type="number" min="1" class="form-control" id="name"
                                        name="kuantitas">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label">Harga Satuan Barang</label>
                                    <input type="number" min="0" class="form-control" id="name"
                                        name="harga_satuan_barang">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label">Harga</label>
                                    <input type="number" min="0" class="form-control" id="name"
                                        name="harga">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label">Kondisi</label>
                                    <select name="kondisi" id="" class="select2">
                                        <option value="B">B</option>
                                        <option value="R">RR</option>
                                        <option value="RB">RB</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label">Penggunaan</label>
                                    <select name="penggunaan" id="" class="select2">
                                        <option value="Sendiri">Sendiri</option>
                                        <option value="Pihak Ketiga">Pihak Ketiga</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label">Ruangan</label>
                                    <input type="text" class="form-control" id="name" name="ruangan">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label">Keterangan</label>
                                    <input type="text" class="form-control" id="name" name="keterangan">
                                </div>
                                <div class="form-group">
                                    <label>Gambar Dokumentasi</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <button type="submit" class="btn btn-info">Input Barang</button>
                            </form>
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
