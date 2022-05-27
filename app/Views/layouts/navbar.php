<nav class="navbar navbar-expand-lg bg-dark mb-5">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">KodePOS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= $home; ?> mx-2" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $kota_kab; ?> mx-2" href="/kota-kab">Kota/Kabupaten</a>
        </li>
      </ul>
    </div>
    <div class="justify-content-end">
      <a href="/logout" class="btn btn-outline-purple">Logout</a>
    </div>

  </div>
</nav