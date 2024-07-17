<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NovelOnline | Dashboard</title>
    <link rel="icon" href="dist/img/library.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/styles.css" />
    <!-- FontAwesome  -->
    <link rel="stylesheet" href="assets/fontawesome-free-6.3.0-web/css/all.min.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="dist/img/library.png" alt="" width="50" height="40" />
            </a>
            <a class="navbar-brand" href="#">NovelOnline</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#layanan">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="daftar_buku.php">Daftar Buku</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="Hubungi_kami.php">Kontak Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- !Navbar -->

    <!-- Banner -->
    <section class="hero">
        <div class="content text-center">
            <h1 class="fw-bold">NovelOnline</h1>
            <h2 class="fw">Nikmati Petualangan Tanpa Batas di Dunia Sastra!</h2>
            <a href="daftar_buku.php">Explore</a>
        </div>

        <div class="content text-center">
            <h4 class="fw-bold">Temukan ribuan cerita menarik dari berbagai genre di NovelOnline. Baik Anda pecinta romansa, penggemar fiksi ilmiah, atau pencari misteri.</h4>
            <h4 class="fw-bold">Mulailah perjalanan membaca Anda sekarang dan tenggelam dalam dunia imajinasi yang menakjubkan.</h4>
        </div>
    </section>
    <!-- !Banner -->

    <!-- Fasilitas -->
    <div class="container-fluid pt-5 pb-5 bg-light">
        <div class="container text-center">
            <h2 class="display-3" id="fasilitas">Buku Terbaru</h2>
            <p>Berikut merupakan buku-buku baru yang tersedia di novel online:</p>
            <div class="row pt-4 gx-4 gy-4">

                <!-- Buku-buku -->
                <div class="col-md-4 ">
                    <div class="card crop-img ">
                        <img src="images/bumi.jpg" class="card-img-top " width="200 " height="500 " />
                        <div class="card-body " >
                            <h5 class="card-title ">BUMI</h5>
                            <h6 class="card-text">Penulis: Tere Liye</h6>
                           <p class="card-text text-truncate">Novel terbitan tahun 2017 ini, mengangkat tema persahabatan, percintaan, kekeluargaan, dan rasa kehilangan. 
                            Dengan berlatarkan waktu di tahun 90-an dan 2000, novel ini mampu membius para pembacanya untuk menerobos ruang masa lalu 
                            dan kembali melihat peristiwa yang terjadi di tahun yang bersangkutan.</p>
                            <button class="card-title-btn">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            
            <!-- BUKU2 -->
                <div class="col-md-4 ">
                    <div class="card crop-img ">
                        <img src="images/bulan.jpg" class="card-img-top " width="200 " height="500 " />
                        <div class="card-body " >
                            <h5 class="card-title ">BULAN</h5>
                            <h6 class="card-text">Penulis: Tere Liye</h6>
                            <p class="card-text text-truncate">Novel terbitan tahun 2017 ini, mengangkat tema persahabatan, percintaan, kekeluargaan, dan rasa kehilangan. 
                            Dengan berlatarkan waktu di tahun 90-an dan 2000, novel ini mampu membius para pembacanya untuk menerobos ruang masa lalu 
                            dan kembali melihat peristiwa yang terjadi di tahun yang bersangkutan.</p>
                            <button class="card-title-btn">Selengkapnya</button>
                        </div>
                    </div>
                </div>


                <!-- BBUKU3 -->
                <div class="col-md-4 ">
                    <div class="card crop-img ">
                        <img src="images/bintang.jpg" class="card-img-top " width="200 " height="500 " />
                        <div class="card-body " >
                            <h5 class="card-title ">BINTANG</h5>
                            <h6 class="card-text">Penulis: Tere Liye</h6>
                            <p class="card-text text-truncate">Novel terbitan tahun 2017 ini, mengangkat tema persahabatan, percintaan, kekeluargaan, dan rasa kehilangan. 
                            Dengan berlatarkan waktu di tahun 90-an dan 2000, novel ini mampu membius para pembacanya untuk menerobos ruang masa lalu 
                            dan kembali melihat peristiwa yang terjadi di tahun yang bersangkutan.</p>
                            <button class="card-title-btn">Selengkapnya</button>
                        </div>
                    </div>
                </div>

                <!-- BBUKU4 -->
                <div class="col-md-4 ">
                    <div class="card crop-img ">
                        <img src="images/madilog.jpg" class="card-img-top " width="200 " height="500 " />
                        <div class="card-body " >
                            <h5 class="card-title ">MADILOG</h5>
                            <h6 class="card-text">Penulis: Tan Malaka</h6>
                            <p class="card-text text-truncate">Novel terbitan tahun 2017 ini, mengangkat tema persahabatan, percintaan, kekeluargaan, dan rasa kehilangan. 
                            Dengan berlatarkan waktu di tahun 90-an dan 2000, novel ini mampu membius para pembacanya untuk menerobos ruang masa lalu 
                            dan kembali melihat peristiwa yang terjadi di tahun yang bersangkutan.</p>
                            <button class="card-title-btn">Selengkapnya</button>
                        </div>
                    </div>
                </div>

                <!-- BBUKU5 -->
                <div class="col-md-4 ">
                    <div class="card crop-img ">
                        <img src="images/aksimasa.jpg" class="card-img-top " width="200 " height="500 " />
                        <div class="card-body " >
                            <h5 class="card-title ">AKSI MASA</h5>
                            <h6 class="card-text">Penulis: Tan Malaka</h6>
                            <p class="card-text text-truncate">Novel terbitan tahun 2017 ini, mengangkat tema persahabatan, percintaan, kekeluargaan, dan rasa kehilangan. 
                            Dengan berlatarkan waktu di tahun 90-an dan 2000, novel ini mampu membius para pembacanya untuk menerobos ruang masa lalu 
                            dan kembali melihat peristiwa yang terjadi di tahun yang bersangkutan.</p>
                            <button class="card-title-btn">Selengkapnya</button>
                        </div>
                    </div>
                </div>

                <!-- BBUKU5 -->
                <div class="col-md-4 ">
                    <div class="card crop-img ">
                        <img src="images/ekonomi.jpg" class="card-img-top " width="200 " height="500 " />
                        <div class="card-body " >
                            <h5 class="card-title ">PENGANTAR EKONOMI</h5>
                            <h6 class="card-text">Penulis: Henry Adam</h6>
                            <p class="card-text text-truncate">Novel terbitan tahun 2017 ini, mengangkat tema persahabatan, percintaan, kekeluargaan, dan rasa kehilangan. 
                            Dengan berlatarkan waktu di tahun 90-an dan 2000, novel ini mampu membius para pembacanya untuk menerobos ruang masa lalu 
                            dan kembali melihat peristiwa yang terjadi di tahun yang bersangkutan.</p>
                            <button class="card-title-btn">Selengkapnya</button>
                        </div>
                    </div>
                </div>

              


            </div>
        </div>
    </div>
    <!-- !Fasilitas -->

    <!-- Footer -->
    <footer class="bg-success text-white text-center p-3 mt-4">
        <p class="mb-0">Hak Cipta &copy; 2023 NovelOnline. All rights reserved.</p>
    </footer>
    <!-- !Footer -->

    <script src="assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
