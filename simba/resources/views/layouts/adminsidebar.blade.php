<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">SI Lomba</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SIMBA</a>
          </div>
          <ul class="sidebar-menu">
          <li class="menu-header">Kategori</li>
                <li class="">
                  <a class="nav-link" href="{{ route('kategori.index') }}"><i class="fas fa-chevron-circle-right"></i> <span>Kategori</span></a>
                </li>
                <li class="">
                  <a class="nav-link" href="{{ route('subkategori.index') }}"><i class="fas fa-chevron-right"></i> <span>Sub Kategori</span></a>
                </li>
                <li class="menu-header">Event Lomba</li>
                <li class="">
                  <a class="nav-link" href="{{ route('cabangolahraga.index') }}"><i class="fas fa-running"></i> <span>Cabang Olahraga</span></a>
                </li>
              </li>
          </ul>
        </aside>
      </div>