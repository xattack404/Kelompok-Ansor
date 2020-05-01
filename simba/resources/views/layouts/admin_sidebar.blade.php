<!-- navbar -->
<nav id="nav">
    <div class="toggle-nav">
        <a href="#nav"><i class="fas fa-bars white" aria-hidden="true"></i></a>
    </div>
</nav>
<!-- sidebar -->
<div class="sidebar" id="sidebar">
    <div class="toggle-side">
        <a href="#sidebar"><i class="fas fa-times white" aria-hidden="true"></i></a>
    </div>
    <div class="profile-admin">
        <img id="profil" src="{{ asset('assets_admin/ico/logo.jpg') }}" alt="profil">
        <p id="about">Super admin</p>
    </div>
    <div class="menu">
        <ul>
            <li class="aktif"><a href="index.php" >dashboard</a></li>
            <li><a href="{{ route('kategori.index') }}" >Kategori</a></li>
            <li><a href="{{ route('subkategori.index') }}" >Sub Kategori</a></li>
            <li><a href="lomba.php" >lomba</a></li>
            <li><a href="transaksi.php" >transaksi</a></li>
        
            <li><a href="laporan.php" >laporan</a></li>
            <li><a href="adminpanel.php" >admin panel</a></li>
        </ul>
        
<script type="text/javascript">
    $(document).on('click', 'ul li a', function(){
        $(this).addClass('aktif').siblings(.removeClass('aktif'))
    })
</script>
    </div>
    <div class="logout">
        <a href=""><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>
</div>