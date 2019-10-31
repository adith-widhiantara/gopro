@extends('base.bootstrap')

@section('title', 'Daftar')

@section('bootstrap')
<head>
  <link rel="stylesheet" href="css\register2.css">
</head>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a style="font-weight: bold; color: #2ecc71; font-size: 30px;" class="navbar-brand gopro quicksand" href="#">GOPRO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto tengah">
        <li class="nav-item">
          <a class="nav-link" href="#">Proyek Pendanaan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pertanyaan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Navbar -->

<!-- Isian -->
<div class="isian">
  <div class="container">
    <div class="row">
      <div class="col-3">
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="img\user.png" class="card-img user" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Selamat Datang</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="tigatombol">
          <a href="#" class="btn btn-white btn-xs" role="button" aria-pressed="true"><i class="fa fa-home" aria-hidden="true"></i>   Halaman Depan</a>
          <a href="#" class="btn btn-white btn-xs" role="button" aria-pressed="true"><i class="fa fa-file-text" aria-hidden="true"></i>   Riwayat Permodalan</a>
          <a href="#" class="btn btn-white btn-xs text-success" role="button" aria-pressed="true"><i class="fa fa-user-o" aria-hidden="true"></i>   Profilku</a>
        </div>
      </div>
      <div class="col-9">
        <h3>Profilku</h3>
        <div class="row">
          <div class="col-3">
            <div class="card">
              <img src="img\user.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Besar file maksimum 10 Megabytes.<br>Ekstensi file yang diperbolehkan .JPG .JPEG .PNG</p>
                <form>
                  <div class="form-group">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-9">
            <form>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="E.g : example@email.com">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Another label</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
              </div>
              <button type="button" class="btn btn-warning text-white daftar">Daftar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Isian -->
@endsection
