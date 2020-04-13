<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pangkat</title>

  <!-- Font Awesome Icons -->
  <link href="{{asset('tmp/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="{{asset('tmp/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="{{asset('tmp/css/creative.min.css')}}" rel="stylesheet">

  <style type="text/css">
    .card{
      border:none;
      box-shadow: 2px 2px 6px rgba(0, 0, 0, .4);
    }

    section#lapor{
      background:rgba(255,255,255,.75);
    }

    .page-section{
      padding: 65px 0;
    }

    textarea{
      border:none !important;
    }
  </style>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Pangkat</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#page-top">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#lapor">Lapor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#laporansaya">Laporan Saya</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">PENGADUAN MASYARAKAT</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Pelaporan Pengaduan Masyarakat (PANGKAT) adalah layanan penyampaian semua pengaduan online masyarakat Indonesia</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#lapor">Yuk Lapor!</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Services Section -->
  <section class="page-section" id="lapor">
    <div class="container">
      <h2 class="text-center mt-0 mb-3">Lapor</h2>
      <div class="row justify-content-center">
        <div class="col-10">
          <div class="card">
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                <!-- <label class="control-label" for="isi_laporan">Isi Laporan</label> -->
                <div>
                    <input type="text" name="judul" id="judul" class="form-control" placeholder="Judul...">
                </div>
                <textarea class="form-control mb-3" name="isi_laporan" id="isi_laporan" placeholder="Ketik laporan anda disini..." rows="10"></textarea>
                </div>
                <div class="form-group">
                <label class="control-label" for="foto">Foto</label>
                <input type="file" class="form-control" onchange="previewFile()" name="foto" id="foto" style="height: 45px" />
                </div>
                <div>
                  <img src="" alt="Image preview..." height="200" id="img">
                </div>
                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary">Lapor</button>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Call to Action Section -->


  <!-- Contact Section -->
  <section class="page-section" id="laporansaya">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Laporan Saya</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+1 (202) 555-0149</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Start Bootstrap</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('tmp/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('tmp/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

</body>

</html>
