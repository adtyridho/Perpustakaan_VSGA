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
    <title>NovelOnline | Hubungi Kami</title>
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
            <a class="navbar-brand" href="#">BacaOnline</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="daftar_buku.php">Daftar Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hubungi_kamu.php">Kontak Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- !Navbar -->

    

    <!-- Tentang -->
    <div class="container-fluid pt-5 pb-5">
        <div class="container">
            <h2 class="display-3 text-center" id="tentang">Tentang</h2>
            <p class="text-center">Perpustakaan Online</p>
            <div class="clearfix pt-5">
                <img src="dist/img/perpusonline.jpg" class="col-md-6 float-md-end mb-3 crop-img bg-perpus" width="400" height="300" />
                <p>Pada dasarnya, Perpustakaan adalah sebuah tempat di mana seseorang bisa menemukan dan meminjam berbagai jenis buku dan media lainnya, seperti majalah, jurnal, koran, dan DVD. Perpustakaan umumnya memiliki koleksi buku yang luas dan beragam, dari berbagai genre dan topik seperti fiksi, non-fiksi, sejarah, sains, teknologi, dan banyak lagi.</p>
                <p>Selain sebagai tempat untuk meminjam buku, perpustakaan Mutiara Ilmu juga berfungsi sebagai pusat informasi dan sumber daya untuk pendidikan dan penelitian. Di dalam perpustakaan, terdapat meja dan kursi untuk membaca dan belajar, serta komputer dan akses internet untuk mencari informasi online.</p>
                <p>Perpustakaan online merupakan sumber daya yang sangat berharga bagi para pembaca. Dengan memiliki akses ke perpustakaan, siapapun dapat meningkatkan pengetahuan dan pemahaman tentang dunia, meningkatkan keterampilan membaca, menemukan inspirasi, serta mengeksplorasi minat dan bakat mereka.</p>
            </div>
        </div>
    </div>
    <!-- !Tentang -->

    <!-- Client -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="p-5 bg-light rounded">
                <div class="row g-4">
                    <div class="col-12">
                    </div>
                    <div class="col-lg-12">
                        <div class="h-100 rounded">
                            <iframe class="rounded w-100" style="height: 400px"
                                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3953.8767114242137!2d109.67092799999999!3d-7.696377999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwNDEnNDcuMCJTIDEwOcKwNDAnMTUuMyJF!5e0!3m2!1sid!2sid!4v1716430376634!5m2!1sid!2sid"
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex p-4 rounded mb-4 bg-white">
                            <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                            <div>
                                <h4>Alamat</h4>
                                <p class="mb-2">Jl. Panglima Sudirman No. 203 Bojonegoro, Jawa Timur</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex p-4 rounded bg-white">
                            <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                            <div>
                                <h4>Telepon</h4>
                                <p class="mb-2">+62 838-9876-9897</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- !Client -->

    <!-- Contact -->
    <div class="container-fluid pt-5 pb-5 kontak">
        <div class="container">
            <h2 class="display-3 text-center" id="contact">Kontak Kami</h2>
            <p class="text-center">Saran, komentar dan penilaian yang dapat membantu kami</p>
            <div class="alert alert-success alert-dismissible fade show d-none" role="alert">
                <strong>Terima kasih!</strong> Saran Anda adalah motivasi bagi kami.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <form action="" name="myForm">
                <div class="row pb-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-lg mb-3" placeholder="Nama" name="nama" id="nama" />
                        <input type="email" class="form-control form-control-lg mb-3" placeholder="Email" name="email" id="email" />
                        <input type="number" class="form-control form-control-lg" placeholder="No Handphone" name="nohp" id="nohp" />
                    </div>
                    <div class="col-md-6">
                        <textarea placeholder="Komentar" id="" class="form-control form-control-lg mt-2" cols="30" rows="5" name="komentar" id="komentar"></textarea>
                    </div>
                    <div class="col-md-3 mt-4">
                        <button type="submit" id="" class="form-control btn btn-success btn-kirim">Kirim</button>
                        <button class="btn btn-success btn-loading d-none" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- !Contact -->
    <div class="container text-center pt-5 pb-5">All Right Aditya &copy; 2024</div>
    <!-- SpreadSheet -->
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbztSbRv6xypfSBKyWvjoOMUQl2rZH1ktkLFaFs6nXx_G9vcVKyQ4W5ujbpjjHTwUUuMpA/exec'
        const form = document.forms['myForm'];
        const btnKirim = document.querySelector('.btn-kirim');
        const btnLoading = document.querySelector('.btn-loading');
        const myAlert = document.querySelector('.alert');

        form.addEventListener('submit', e => {
            e.preventDefault()
            // Ketika tombol submit diklik
            // Tampilkan tombol loading hilangkan tombol kirim
            btnLoading.classList.toggle('d-none');
            btnKirim.classList.toggle('d-none');

            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    btnLoading.classList.toggle('d-none');
                    btnKirim.classList.toggle('d-none');
                    myAlert.classList.toggle('d-none');
                    form.reset();
                    console.log('Success!', response)
                }) 
                .catch((error => console.error('Error!', error.message)))
        });
    </script>
    <!-- Bootstrap JS -->
    <script src="assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="assets/Poppins-Regular.ttf"></script>
</body>

</html>
