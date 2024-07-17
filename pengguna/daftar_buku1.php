
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NovelOnline | Daftar Buku</title>
    <link rel="icon" href="../dist/img/library.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/styles.css" />
    <link rel="stylesheet" href="../assets/fontawesome-free-6.3.0-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">


</head>

<body>
    <?php
    // Include database connection file
    require_once('../plugins/koneksi.php');
    ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../dist/img/library.png" alt="" width="50" height="40" />
            </a>
            <a class="navbar-brand" href="#">BacaOnline</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index1.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="daftar_buku1.php">Daftar Buku</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="Hubungi_kami1.php">Kontak Kami</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="../login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero">
        <img src="../dist/img/bg_library.jpg" alt="Library Image 1">
        <img src="../dist/img/bg_library2.jpg" alt="Library Image 2">
        
        <div class="content">
            <h1 class="text-white">Daftar Buku</h1>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row" id="daftar-buku">
            <?php
            $sql = "SELECT * FROM books";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '
                    <div class="col-md-4 mb-4">
                        <div class="card crop-img">
                            <img src="../uploads/' . $row["image"] . '" class="card-img-top" alt="' . $row["title"] . '" />
                            <div class="card-body">
                                <h5 class="card-title">' . $row["title"] . '</h5>
                                <h6 class="card-text">Penulis: ' . $row["author"] . '</h6>
                                <p class="card-text text-truncate">' . $row["description"] . '</p>
                                <a href="read_book.php?id=' . $row["id"] . '" class="btn btn-info">Baca</a>
                            </div>
                        </div>
                    </div>';
                }
            } else {
                echo "Tidak ada buku yang ditemukan.";
            }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-success text-white text-center p-3 mt-4">
        <p class="mb-0">Hak Cipta &copy; 2023 NovelOnline. All rights reserved.</p>
    </footer>
    <!-- !Footer -->

    <script src="assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/jquery/jquery-3.6.0.min.js"></script>
</body>

</html>
