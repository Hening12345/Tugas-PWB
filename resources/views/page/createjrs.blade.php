<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Wiki Solo Leveling</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/1.jpg" rel="icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">Solo Leveling</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="{{ url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="{{ url('/about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="{{ url('/synopsis')}}">Synopsis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="{{ url('/character')}}">Character</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="{{ url('/mahasiswa')}}">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="{{ url('/jurusan')}}">Jurusan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="{{ url('/siswa')}}">Siswa</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/main.png)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

<div class="container">
  <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h1 class="title-a">
              Form Tambah Data Jurusan
            </h1>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
            <form method="post" action="/jurusan">
              @csrf
  <div class="form-group">
    <label for="nama_jurusan">Nama Jurusan :</label>
    <input type="text" class="form-control @error('nama_jurusan') is-invalid @enderror" id="nama_jurusan" placeholder="Masukkan Nama Jurusan" name="nama_jurusan" value="{{ old('nama_jurusan') }}">
    @error ('nama_jurusan')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Tambah Data!</button>
</form>
</div>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

 <!-- JavaScript Libraries -->
 <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>

 


