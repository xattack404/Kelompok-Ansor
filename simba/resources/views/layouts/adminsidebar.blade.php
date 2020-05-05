<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ route('home')}}">SI Lomba</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home')}}">SIMBA</a>
          </div>
          <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
              <li class="">
                <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          <li class="menu-header">Data Master</li>
                <li class="">
                  <a class="nav-link" href="{{ route('kategori.index') }}"><i class="fas fa-chevron-circle-right"></i> <span>Kategori</span></a>
                </li>
                <li class="">
                  <a class="nav-link" href="{{ route('subkategori.index') }}"><i class="fas fa-chevron-right"></i> <span>Sub Kategori</span></a>
                </li>
                <li class="">
                  <a class="nav-link" href="{{ route('cabangolahraga.index') }}"><i class="fas fa-running"></i> <span>Cabang Olahraga</span></a>
                </li>
                <li class="">
                  <a class="nav-link" href="#"><i class="fas fa-users-cog"></i> <span>Manejemen Login</span></a>
                </li>
                <li class="menu-header">Transaksi</li>
                <li class="">
                  <a class="nav-link" href="#"><i class="fas fa-money-check-alt"></i> <span>Manejemen Pembayaran</span></a>
                </li>
                <li class="menu-header">Pendaftaran</li>
                <li class="">
                  <a class="nav-link" href="#"><i class="fas fa-user"></i> <span>Manejemen Atlet</span></a>
                </li>
                <li class="">
                  <a class="nav-link" href="#"><i class="fas fa-users"></i> <span>Manejemen Komunitas</span></a>
                </li>
              </li>
          </ul>
        </aside>
      </div>