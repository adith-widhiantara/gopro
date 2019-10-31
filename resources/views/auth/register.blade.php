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
            <form action="index.html" method="post">

              <div class="form-group">
                <label for="namalengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="namalengkap" placeholder="Aditya S. Widhiantara" name="namalengkap">
              </div>

              <div class="form-group">
                <label for="tangallahir">Tanggal Lahir</label>
                <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" name="tangallahir"/>
                  <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <p>Jenis Kelamin</p>
                <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="jeniskelamin" class="custom-control-input" value="Pria"><span class="custom-control-label">Pria</span>
                </label>
                <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="jeniskelamin" class="custom-control-input" value="Wanita"><span class="custom-control-label">Wanita</span>
                </label>
              </div>

              <div class="form-group">
                <label for="Status">Status</label>
                <select id="Status" class="form-control">
                  <option selected>Pilih status pernikahan</option>
                  <option value="Belum Menikah">Belum Menikah</option>
                  <option value="Sudah Menikah">Sudah Menikah</option>
                </select>
              </div>

              <div class="form-group">
                <label for="Username">Username</label>
                <input type="text" class="form-control" id="Username" placeholder="adithwidhiantara" name="Username">
              </div>

              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control email-inputmask" id="email-mask" placeholder="mail@example.com" name="email">
              </div>

              <div class="form-group">
                <label>Nomor Kontak</label>
                <input type="text" class="form-control phone-inputmask" id="phone-mask" placeholder="" name="kontak">
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="" name="password">
              </div>

              <div class="form-group">
                <label>PIN</label>
                <input type="text" class="form-control PIN-inputmask" id="PIN" placeholder="" name="PIN">
              </div>

              <button type="submit" class="btn btn-warning text-white daftar">Daftar</button>
              <a href="#" class="btn btn-outline-warning daftar" style="margin-right: 10px;">Batal</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Isian -->

<!-- Footer -->
<div class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
      </div>
      <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="text-md-right footer-links d-none d-sm-block">
              <a href="javascript: void(0);">About</a>
              <a href="javascript: void(0);">Support</a>
              <a href="javascript: void(0);">Contact Us</a>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- End Footer -->
@endsection
