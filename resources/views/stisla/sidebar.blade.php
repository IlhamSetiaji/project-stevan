<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">Darungan</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">KKN</a>
        </div>
        <ul class="sidebar-menu">
            <li><a class="nav-link @if (Request::is('/home')) active @endif" href="{{ url('home') }}"><i
                        class="fas fa-columns"></i> <span>Dashboard</span></a></li>
            <li><a class="nav-link @if (Request::is('/barang/create')) active @endif" href="{{ url('barang/create') }}"><i
                        class="fas fa-columns"></i> <span>Input Barang</span></a></li>
        </ul>
    </aside>
</div>
