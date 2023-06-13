<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>App Buku Tamu</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="tamu/img/Logo_BPS.png" rel="icon">
    <link href="tamu/img/Logo_BPS.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="tamu/vendor/aos/aos.css" rel="stylesheet">
    <link href="tamu/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="tamu/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="tamu/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="tamu/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="tamu/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="./assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="tamu/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top  header-transparent ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="/">App BukuTamu</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#tamu">List Tamu</a></li>
                    {{-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> --}}
                    <li><a class="getstarted scrollto" href="{{ route('login') }}">Login Admin</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up">
                    <div>
                        <h1>Selamat Datang</h1>
                        <h2>Di Aplikasi Buku Tamu, Silahkan klik tombol dibawah untuk menambahkan Tamu</h2>
                        {{-- <button type="button" href="#" class="download-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Tamu Baru</button> --}}
                        <a href="#addtamu" class="download-btn">Tambah Tamu Baru</a>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img"
                    data-aos="fade-up">
                    <img src="tamu/img/Logo_BPS.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Tampil data tamu Section ======= -->
        <section id="tamu" class="gallery">
            <div class="gallery" data-aos="fade-up">        
                <div class="section-title">
                    <h2>List Data Tamu</h2>
                    <p>
                        Menampilkan Data Tamu Sesuai data yang sudah di inputkan, jika terdapat kesalahan data silahkan hubungi Admin.
                    </p>
                </div>
            </div>
            <div class="container-fluid" data-aos="fade-up">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover" id="table-row" cellspacing="0" width="100%">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Keperluan</th>
                                <th scope="col">Tujuan</th>
                                <th scope="col">Kontak</th>
                                <th scope="col">Hari/Tanggal</th>
                              </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Gallery Section -->

        <!-- ======= Details Section ======= -->
        <section id="details" class="details">
            <div class="container">
                <div class="row content">
                    <div class="col-md-4" data-aos="fade-right">
                        <img src="tamu/img/details-1.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-4" data-aos="fade-up">
                        <h3>Visi & Misi Instansi</h3>
                        <p class="fst-italic">
                            Visi
                        </p>
                        <p>
                            1.	Visi penyedia data statistik berkualitas untuk indonesia maju. Dengan visi baru ini, eksistensi BPS 
                            sebagai penyedia data dan informasi statistik menjadi semakin penting, karena memegang peran dan pengaruh 
                            sentral dalam penyediaan statistik berkualitas tidak hanya di Indonesia, melainkan juga di tingkat dunia. 
                            Dengan visi tersebut juga, semakin menguatkan peran BPS sebagai pembina data statistik.
                        </p>
                        <p class="fst-italic">
                            Misi
                        </p>
                        <p>
                            Misi BPS dirumuskan dengan memperhatikan fungsi dan kewenangan BPS, visi BPS serta melaksanakan Misi 
                            Presiden dan Wakil Presiden yang Ke-1 (Peningkatan Kualitas Manusia Indonesia), Ke-2 (Struktur Ekonomi 
                            yang Produktif, Mandiri, dan Berdaya Saing) dan yang Ke-3 Pembangunan yang Merata dan Berkeadilan, dengan 
                            uraian sebagai berikut:<br>
                            1. Menyediakan statistik berkualitas yang berstandar nasional dan internasional<br>
                            2. Membina K/L/D/I melalui Sistem Statistik Nasional yang berkesinambungan<br>
                            3. Mewujudkan pelayanan prima di bidang statistik untuk terwujudnya Sistem Statistik Nasional

                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Details Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Galeri Kami</h2>
                </div>
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="col-sm-4 mb-4">
                            <div class="col">
                                <div class="card card-post card-round">
                                    <img src="tamu/img/testimonials/arsip5.jpg" class="" alt="">
                                    <div class="card-body">
                                        <div class="separator-solid"></div>
                                        <h3 class="card-title">
                                            <a href="#">
                                                Galeri 1
                                            </a>
                                        </h3>
                                        <p class="card-text">Proses penyerahan pesert PKL Institut Sains dan Teknologi Annuqayah yang di dampingi oleh
                                            Dosen Pembimbing Lapangan (DPL) ke Instansi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-wrapper">
                            <div class="col-sm-4 mb-4">
                                <div class="col">
                                    <div class="card card-post card-round">
                                        <img src="tamu/img/testimonials/arsip3.jpg" class="" alt="">
                                        <div class="card-body">
                                            <div class="separator-solid"></div>
                                            <h3 class="card-title">
                                                <a href="#">
                                                    Galeri 2
                                                </a>
                                            </h3>
                                            <p class="card-text">Hari ke-2 proses penginputan survei yang dimulai dari jam 08.00 sampai 20.00 WIB 
                                                selama 1 bulan yang dilaksanakan di Hotel Kemuning.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-wrapper">
                                <div class="col-sm-4 mb-4">
                                    <div class="col">
                                        <div class="card card-post card-round">
                                            <img src="tamu/img/testimonials/arsip4.jpg" class="" alt="">
                                            <div class="card-body">
                                                <div class="separator-solid"></div>
                                                <h3 class="card-title">
                                                    <a href="#">
                                                        Galeri 3
                                                    </a>
                                                </h3>
                                                <p class="card-text">Seminar <i>Focus Gruop Discussion (FGD)</i> "Pamekasan Dalam Angka dan Pembinaan
                                                    Statistik Sektoral Kab. Pamekasan" yang dilaksanakan di Hotel Front One.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->


        <!-- ======= Tambah Tamu Section ======= -->
        <section id="addtamu" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tambah Tamu Baru</h2>
                    <p>
                        Silahkan input data tamu dengan benar !
                    </p>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 info">
                                <i class="bx bx-map"></i>
                                <h4>Alamat</h4>
                                <p>Jl. Bonorogo No.34A,<br>Tebana, Lawangan Daya, Kec. Pademawu, Kabupaten Pamekasan, Jawa Timur 69323</p>
                            </div>
                            <div class="col-lg-6 info">
                                <i class="bx bx-phone"></i>
                                <h4>Hubungi Kami</h4>
                                <p>(0324) 328834</p>
                            </div>
                            <div class="col-lg-6 info">
                                <i class="bx bx-envelope"></i>
                                <h4>Email Kami</h4>
                                <p>https://pamekasankab.bps.go.id</p>
                            </div>
                            <div class="col-lg-6 info">
                                <i class="bx bx-time-five"></i>
                                <h4>Jam Kerja</h4>
                                <p>Senin - Kamis : <br>08:00 AM - 16:00 PM<br>Jum'at : <br>08:00 AM - 16:30 PM</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <form action="{{ route('tamu.store') }}" method="post" role="form" class="php-email-form" data-aos="fade-up">
                            @csrf
                            <div class="form-group">
                                <input placeholder="Nama Tamu" type="text" name="nama" class="form-control" id="name" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea placeholder="Alamat Rumah" class="form-control" name="alamat" rows="5" required></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <textarea placeholder="Keperluan" class="form-control" name="keperluan" rows="3" required></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <select class="form-select" name="tujuan" aria-label="Default select example">
                                    <option selected disabled>--Pilih Tujuan---</option>
                                    @foreach ($devisi as $key => $item)
                                    <option value="{{ $key }}">{{ $item }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group mt-3">
                                <input placeholder="Kontak" type="text" class="form-control" name="kontak" id="subject" required>
                            </div>
                            <div class="text-center">
                          <button  type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>PKL IST 2023</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Website : <a href="https://pamekasankab.bps.go.id">BPS Pamekasan</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="tamu/vendor/aos/aos.js"></script>
    <script src="tamu/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="tamu/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="tamu/vendor/swiper/swiper-bundle.min.js"></script>
    {{-- <script src="tamu/vendor/php-email-form/validate.js"></script> --}}
    <script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    @include('sweetalert::alert')
    <!-- Template Main JS File -->
    <script src="tamu/js/main.js"></script>
    <script>
let table;
$(document).ready(function() {
    // Add Row
    table = $('#table-row').DataTable({
    pageLength: 7,
    responsive: true,
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: {
                url: '{{ route('tamu.data') }}',
            },
            columns:[
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'nama'},
                {data: 'alamat'},
                {data: 'keperluan'},
                {data: 'nama_devisi'},
                {data: 'kontak'},
                {data: 'hari'},
            ]
    });
});
    </script>

</body>

</html>
