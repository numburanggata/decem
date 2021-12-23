<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">

  <a class="navbar-brand" href="#">
    <img src="itsa.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    ITSA
  </a>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/layanan">Layanan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/profil">Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/artikel">Artikel</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dokumen
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('soppage') }}">SOP</a>
          <a class="dropdown-item" href="{{ url('juknispage') }}">Petunjuk Teknis</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ url('risalahpage') }}">Risalah</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/kontak">Kontak</a>
      </li>
    </ul>
  </div>
</nav>
