<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <img id="header-img" src="{{ asset('assets/img/logolumajang.png') }}" alt="">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>DESA DARUNGAN</h1>
        </a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ url('/') }}" class="{{ $active == 'home' ?  'active' : '' }}">Home</a></li>
                <li><a href="{{ url('/profil') }}" class="{{ $active == 'profil' ?  'active' : '' }}">Profil</a></li>
                <li><a href="{{ url('struktur') }}" class="{{ $active == 'struktur' ?  'active' : '' }}">Struktur</a></li>
                <li><a href="{{ url('potensi') }}" class="{{ $active == 'potensi' ?  'active' : '' }}">Potensi</a></li>
                <li><a href="{{ url('artikel') }}" class="{{ $active == 'artikel' ?  'active' : '' }}">Artikel</a></li>
                <li><a href="{{ url('galeri') }}" class="{{ $active == 'galeri' ?  'active' : '' }}">Galeri</a></li>
                <li><a href="{{ url('kontak') }}" class="{{ $active == 'kontak' ?  'active' : '' }}">Kontak</a></li>
            </ul>
        </nav>
    </div>
</header>