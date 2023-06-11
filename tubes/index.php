<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <title>Welcome to Wonderful Indonesia</title>
</head>

<body>
  <!--Bagian Atas-->
  <nav>
    <div class="top">
      <!-- Tanggal -->
      <div class="tanggal container-fluid">
        <script language="JavaScript">
          var tanggallengkap = new String();
          var namahari = "MINGGU SENIN SELASA RABU KAMIS JUMAT SABTU";
          namahari = namahari.split(" ");
          var namabulan = "JANUARI FEBRUARI MARET APRIL MEI JUNI JULI AGUSTUS SEPTEMBER OKTOBER NOVEMBER DESEMBER";
          namabulan = namabulan.split(" ");
          var tgl = new Date();
          var hari = tgl.getDay();
          var tanggal = tgl.getDate();
          var bulan = tgl.getMonth();
          var tahun = tgl.getFullYear();
          tanggallengkap = namahari[hari] + ", " + tanggal + " " + namabulan[bulan] + " " + tahun;
        </script>
        <script language="JavaScript">
          document.write(tanggallengkap);
        </script>
      </div>
    </div>
    <div class="main">
      <div class="container">
        <img src="img/burungGaruda-removebg-preview.png" alt="#" />
        <h5>REDAKSI INDONESIA</h5>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">BERANDA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#berita">BERITA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pembangunan">PEMBANGUNAN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#layanan">LAYANAN</a>
          </li>
        </ul>
      </div>
      <p><a href="login.php">Login</a> Untuk Mengakses Berita.</p>
    </div>
  </nav>
  <!-- Bagian Atas-->

  <!-- Carousel-->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/masjid.jpg" class="d-block w-100 h-70" alt="..." />
        <div class="carousel-caption d-none d-sm-block">
          <h2>Marhaban Ya Ramadhan</h2>
          <p>Selamat Menunaikan Ibadah Puasa</p>
          <a class="btn btn-primary" href="#" role="button">Kunjungi</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/candi2.jpg" class="d-block w-100 h-70" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h2>Candi Borobudur</h2>
          <p>Salah satu keajaiban dunia yang menjadi daya tarik wisatawan.</p>
          <a class="btn btn-primary" href="#" role="button">Kunjungi</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/bali.jpg" class="d-block w-100 h-70" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h2>Eksotisme "The Island of Thousand Temples"</h2>
          <p>Pulau Bali yang menjadi salah satu destinasi menarik mancanegara.</p>
          <a class="btn btn-primary" href="#" role="button">Kunjungi</a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="pembatas"></div>
  <!-- Akhir Carousel -->

  <!-- Berita -->
  <div class="isi">
    <h2 id="berita">Berita</h2>
    <div class="container">
      <div class="row row-cols-4">
        <div class="col-lg-3 col-md-6 col-sm-9 mb-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-9 mb-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-9 mb-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-9 mb-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Berita -->

  <!-- Pembangunan -->
  <div class="isi2">
    <h2 id="pembangunan">Pembangunan</h2>
    <div class="container">
      <div class="row row-cols-4">
        <div class="col-lg-3 col-md-6 col-sm-9 mb-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-9 mb-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-9 mb-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-9 mb-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Pembangunan -->

  <!-- Layanan -->
  <div class="isi3">
    <h2 id="layanan">Layanan</h2>
    <div class="container">
      <div class="row row-cols-4">
        <div class="col-lg-3 col-md-6 col-sm-9 mb-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-9 mb-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-9 mb-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-9 mb-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Layanan -->

  <!-- Footer -->
  <div class="footer">
    <div class="footer-container">
      <div class="alamat">
        <p>Alamat:</p>
        <p>Jl.Kantor Pos Arjawinangun NO.627 Kabupaten Cirebon, Jawa Barat, Indonesia</p>
      </div>
      <div class="email">
        <p>Email:</p>
        <p>redaksi1indonesia@mail.go.id</p>
      </div>
    </div>
  </div>
  <div class="footer2">
    <div class="footer2-container">
      <p>Web Republik Indonesia 2023</p>
    </div>
  </div>
</body>

</html>