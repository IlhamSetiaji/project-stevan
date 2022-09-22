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
                    <div class="alert alert-info alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            {{ session('status') }}
                        </div>
                    </div>
                    @endif
                    <div class="section-header">
                        <h1>Home - Feature</h1>
                    </div>

                    <div class="section-body">
                        <!-- This is where your code starts -->
                        <div class="card-body p-0">
                            {{-- <a class="btn btn-primary" href="#" data-toggle="modal"
                                data-target="#addData">Tambah Hero</a></br></br> --}}
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Kepadatan Penduduk</th>
                                            <th>Luas Desa</th>
                                            <th>Kode Pos</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($features as $key => $f)
                                        <tr>
                                            <td class="text-center">
                                                {{ $key+1 }}
                                            </td>
                                            <td>
                                                {{ $f->jiwa }} Jiwa/km
                                            </td>
                                            <td>
                                                {{ $f->luas }} Kilometer Persegi
                                            </td>
                                            <td>
                                                {{ $f->pos }} (Darungan, Yosowilangun)
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#updateData{{ $f->id }}">
                                                        <button type="button" class="btn btn-warning">Edit</button>
                                                    </a>
                                                    {{-- <a href="#" data-toggle="modal"
                                                        data-target="#deleteData{{ $h->id }}">
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </a> --}}
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach    
                                    </table>
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
    @include('admin.modal.update-home-feature')
    @include('stisla.script')
</body>

</html>
