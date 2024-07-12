<!-- /*
* Template Name: Learner
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="{{asset('assets/images/logo-sttnf.jpg')}}">
  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />
  <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/fonts/flaticon/font/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <title>Akademik Kampus</title>
</head>

<body>
  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>
  <nav class="site-nav mb-5">
    <div class="pb-2 top-bar mb-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-lg-9">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> <span class="d-none d-lg-inline-block">Have a questions?</span></a> 
            <a href="#" class="small mr-3"><span class="icon-phone mr-2"></span> <span class="d-none d-lg-inline-block">021 - 786 3191</span></a> 
            <a href="#" class="small mr-3"><span class="icon-envelope mr-2"></span> <span class="d-none d-lg-inline-block">info@nurulfikri.ac.id</span></a> 
          </div>
          <div class="col-6 col-lg-3 text-right">
            <a href="{{ route('login') }}" class="small mr-3">
              <span class="icon-lock"></span>
              Log In
            </a>
            <a href="{{ route('register') }}" class="small">
              <span class="icon-person"></span>
              Register
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="sticky-nav js-sticky-header">
      <div class="container position-relative">
        <div class="site-navigation text-center">
          <a href="index.html" class="logo menu-absolute m-0">Akademik Kampus<span class="text-primary">.</span></a>

          <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
          <li><a href="#home" class="smoothScroll">Home</a></li>
            <li><a href="#prodi">Program Studi</a></li>
            <li><a href="#dosen">Dosen</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <a href="#" class="btn-book btn btn-secondary btn-sm menu-absolute">Enroll Now</a>
          <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>
        </div>
      </div>
    </div>
  </nav>
  
  <section id="home" class="slider" data-stellar-background-ratio="0.5">
  <div class="untree_co-hero overlay" style="background-image: url({{asset('assets/images/banernf.jpg')}})">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="row justify-content-center ">
            <div class="col-lg-6 text-center ">
              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Selamat datang di Sistem Akademik Kampus STT Terpadu Nurul Fikri</h1>
              <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-secondary">Explore courses</a></p>
            </div>
          </div>
        </div>
      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </div> <!-- /.untree_co-hero -->
</section>

<section id="prodi" class="slider" data-stellar-background-ratio="0.5">
  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-center mb-3">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">Peminatan Program Studi</h2>
        </div>
      </div>
      <div class="row align-items-stretch">
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
            <i class="uil uil-pen"></i>
            </div>
            <div>
              <h3>Sistem Informasi</h3>
              <span>Desain Komunikasi Visual (DKV)</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
            <i class="uil uil-calculator"></i>
            </div>
            <div>
              <h3>Sistem Informasi</h3>
              <span>E-Business</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
            <i class="uil uil-book-open"></i>
            </div>
            <div>
              <h3>Sistem Informasi</h3>
              <span>Enterprise</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-bag"></i>
            </div>
            <div>
              <h3>Bisnis Digital</h3>
              <span>Digital Marketing</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
            <i class="uil uil-history"></i>
            </div>
            <div>
              <h3>Teknik Informatika</h3>
              <span>Software Engineering</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
            <i class="uil uil-atom"></i>
            </div>
            <div>
              <h3>Teknik Informatika</h3>
              <span>Network Engineering</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
            <i class="uil uil-chart-pie"></i>
            </div>
            <div>
              <h3>Teknik Informatika</h3>
              <span>Data Engineering</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-circle-layer"></i>
            </div>
            <div>
              <h3>Teknik Informatika</h3>
              <span>Cyber Security</span>
            </div>
          </a>
        </div>
      </div>
</section>

<section id="dosen" class="slider" data-stellar-background-ratio="0.5">
  <div class="untree_co-section bg-light">
    <div class="container"> 
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">Daftar Profil Dosen</h2>
          <p>Dosen-dosen ini memiliki latar belakang akademis yang kuat dan pengalaman luas dalam 
            pengajaran dan penelitian di bidangnya masing-masing. Kontribusi dalam pengembangan ilmu
            pengetahuan melalui proyek penelitian dan publikasi terkemuka menunjukkan dedikasinya
            terhadap keunggulan akademik. </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="custom-media">
            <div class="text-center">
              <a href="#"><img src="{{asset('assets/images/pakrojul.png')}}" alt="Image" class="img-fluid"></a>
            </div>
            <div class="custom-media-body">
              <div class="d-flex justify-content-between pb-3">
              </div>
              <h3>Dr. Sirojul Munir S.Si., M.Kom</h3>
              <p class="mb-4">0414047101</p>
              <p class="mb-4">Teknik Informatika</p>
              <p class="mb-4">Pemrograman Web</p>
              <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                <div><a href="#">Learn More</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="custom-media">
            <div class="text-center">
              <a href="#"><img src="{{asset('assets/images/rio.jpg')}}" alt="Image" class="img-fluid"></a>
            </div>
            <div class="custom-media-body">
              <div class="d-flex justify-content-between pb-3">
              </div>
              <h3>Ahmad Rio Adriansyah, S.Si., M.Si.</h3>
              <p class="mb-4">0413128601</p>
              <p class="mb-4">Teknik Informatika</p>
              <p class="mb-4">Statistika dan Probabilitas</p>
              <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                <div><a href="#">Learn More</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="custom-media">
            <div class="text-center">
              <a href="#"><img src="{{asset('assets/images/nasrul.jpg')}}" alt="Image" class="img-fluid"></a>
            </div>
            <div class="custom-media-body">
              <div class="d-flex justify-content-between pb-3">
              </div>
              <h3>Nasrul, S.Pd.I., S.Kom., M.Kom.</h3>
              <p class="mb-4">0410108006</p>
              <p class="mb-4">Sistem Informasi</p>
              <p class="mb-4">Basis Data</p>
              <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                <div><a href="#">Learn More</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <div class="untree_co-section pt-0 bg-img overlay" style="background-image: url({{asset('assets/images/banernf.jpg')}})">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-7">
          <h2 class="text-white mb-3" data-aos="fade-up" data-aos-delay="0">Pendidikan untuk masa depan</h2>
          <p class="text-white h5 mb-4" data-aos="fade-up" data-aos-delay="100">Pendidikan adalah kunci untuk masa depan yang sukses. Dengan belajar yang baik, 
                                                                                kita bisa membangun keterampilan dan pengetahuan yang penting untuk menangani 
                                                                                tantangan global, menciptakan karier yang berarti, dan memberi dampak positif pada masyarakat.</p>
          <p><a href="#" class="btn btn-secondary" data-aos="fade-up" data-aos-delay="200">Enroll Now</a></p>
        </div>
      </div>
    </div>  
  </div> <!-- /.untree_co-section -->

  <section id="about" class="slider" data-stellar-background-ratio="0.5">
  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5 mb-5">
          <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0">About Us</h2>
          <p data-aos="fade-up" data-aos-delay="100">STT Nurul Fikri adalah perguruan tinggi yang fokus pada pendidikan teknologi informasi.
                                                       Kami menawarkan program pendidikan yang berkualitas dengan kurikulum yang relevan dan tenaga 
                                                       pengajar yang ahli di bidangnya. Kami juga menyediakan fasilitas modern dan lingkungan belajar 
                                                       yang mendukung untuk membantu mahasiswa mencapai potensi maksimal mereka. Melalui berbagai kegiatan
                                                       praktikum dan magang, kami memastikan mahasiswa siap menghadapi dunia kerja.</p>
         
          <div class="row count-numbers mb-5">
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
              <span class="counter d-block"><span data-number="12023">0</span><span>+</span></span>
              <span class="caption-2">No. Students</span>
            </div>
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <span class="counter d-block"><span data-number="49">0</span><span></span></span>
              <span class="caption-2">No. Lecturers</span>
            </div>
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <span class="counter d-block"><span data-number="12">0</span><span></span></span>
              <span class="caption-2">No. Awards</span>
            </div>
          </div>

          <p data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="btn btn-primary mr-1">Admission</a>
            <a href="#" class="btn btn-outline-primary">Learn More</a>
          </p>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="bg-1"></div>
          <a href="https://vimeo.com/342333493" data-fancybox class="video-wrap">
            <span class="play-wrap"><span class="icon-play"></span></span>
            <img src="{{asset('assets/images/balhio-3.png')}}" alt="Image" class="img-fluid rounded">
          </a>
        </div>
      </div>
    </div>
</section>

<section id="contact" class="slider" data-stellar-background-ratio="0.5">
  <div class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 mr-auto">
          <div class="widget">
            <h3>About Us<span class="text-primary">.</span> </h3>
            <p>STT Nurul Fikri adalah perguruan tinggi yang fokus pada pendidikan teknologi informasi.
              Kami menawarkan program pendidikan yang berkualitas dengan kurikulum yang relevan dan tenaga pengajar
              yang ahli di bidangnya.</p>
          </div> <!-- /.widget -->
          <div class="widget">
            <h3>Connect</h3>
            <ul class="list-unstyled social">
              <li><a href="#"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-pinterest"></span></a></li>
              <li><a href="#"><span class="icon-dribbble"></span></a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

        <div class="col-lg-2 ml-auto">
          <div class="widget">
            <h3>Projects</h3>
            <ul class="list-unstyled float-left links">
              <li><a href="#">Web Design</a></li>
              <li><a href="#">HTML5</a></li>
              <li><a href="#">CSS3</a></li>
              <li><a href="#">jQuery</a></li>
              <li><a href="#">Bootstrap</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->



        <div class="col-lg-3">
          <div class="widget">
            <h3>Contact</h3>
            <address>STT Terpadu Nurul Fikri </address>
            <ul class="list-unstyled links mb-4">
              <li><a href="tel://0217863191">021 - 786 3191</a></li>
              <li><a href="info@nurulfikri.ac.id">info@nurulfikri.ac.id</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

      </div> <!-- /.row -->

      <div class="row mt-5">
        <div class="col-12 text-center">
          <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a>  Distributed By <a href="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
          </section>
    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('assets/js/aos.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>

  </body>

  </html>