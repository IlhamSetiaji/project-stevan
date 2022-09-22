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
                        <h1>Profil - Content</h1>
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
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Gambar</th>
                                            <th>Video</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contents as $key => $h)
                                        <tr>
                                            <td class="text-center">
                                                {{ $key+1 }}
                                            </td>
                                            <td>
                                                {{ $h->title }}
                                            </td>
                                            <td>
                                                {{ $h->desc }}
                                            </td>
                                            <td>
                                                <img src="{{ asset($h->image) }}" alt=""
                                                    style="height: 315px; width:420px;">
                                            </td>
                                            <td>
                                                <iframe width="420" height="315"
                                                    src="{{ $h->video }}?autoplay=0&mute=1">
                                                </iframe>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#updateData{{ $h->id }}">
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
    @include('admin.modal.update-profile-content')
    @include('stisla.script')
</body>

</html>
