<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'plugins/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NovelOnline | Daftar Buku</title>
    <link rel="icon" href="dist/img/library.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/styles.css" />
    <link rel="stylesheet" href="assets/fontawesome-free-6.3.0-web/css/all.min.css">
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">


</head>

<body>
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
                        <a class="nav-link" href="Hubungi_kami.php">Kontak Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero">
        <img src="dist/img/bg_library.jpg" alt="Library Image 1">
        <img src="dist/img/bg_library2.jpg" alt="Library Image 2">
        <img src="dist/img/bg_library5.jpg" alt="Library Image 3">
        <img src="dist/img/bg_library3.jpg" alt="Library Image 4">
        <div class="content">
            <button class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#tambahBukuModal">Tambah Buku</button>
        </div>
    </div>

    <div class="container mt-5">
        <h1>Daftar Buku</h1>
        <div class="row" id="daftar-buku">
            <?php
            $sql = "SELECT * FROM books";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '
                    <div class="col-md-4 mb-4">
                        <div class="card crop-img">
                            <img src="uploads/' . $row["image"] . '" class="card-img-top" alt="' . $row["title"] . '" />
                            <div class="card-body">
                                <h5 class="card-title">' . $row["title"] . '</h5>
                                <h6 class="card-text">Penulis: ' . $row["author"] . '</h6>
                                <p class="card-text text-truncate">' . $row["description"] . '</p>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editBukuModal" data-id="' . $row["id"] . '" data-title="' . $row["title"] . '" data-author="' . $row["author"] . '" data-description="' . $row["description"] . '">Edit</button>
                                <a href="delete_book.php?id=' . $row["id"] . '" class="btn btn-danger">Delete</a>
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

    <!-- Modal Tambah Buku -->
    <div class="modal fade" id="tambahBukuModal" tabindex="-1" aria-labelledby="tambahBukuModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahBukuModalLabel">Tambah Buku</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formTambahBuku" method="post" action="add_book.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="judulBuku" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control" id="judulBuku" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="penulisBuku" class="form-label">Penulis</label>
                            <input type="text" class="form-control" id="penulisBuku" name="author" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsiBuku" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsiBuku" name="description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="gambarBuku" class="form-label">Gambar Buku</label>
                            <input type="file" class="form-control" id="gambarBuku" name="image" required>
                        </div>
                        <div class="mb-3">
                            <label for="fileBuku" class="form-label">File Buku (PDF)</label>
                            <input type="file" class="form-control" id="fileBuku" name="file" required>
                        </div>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Buku -->
    <div class="modal fade" id="editBukuModal" tabindex="-1" aria-labelledby="editBukuModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editBukuModalLabel">Edit Buku</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formEditBuku" method="post" action="edit_book.php" enctype="multipart/form-data">
                        <input type="hidden" id="editIdBuku" name="id">
                        <div class="mb-3">
                            <label for="editJudulBuku" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control" id="editJudulBuku" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="editPenulisBuku" class="form-label">Penulis</label>
                            <input type="text" class="form-control" id="editPenulisBuku" name="author" required>
                        </div>
                        <div class="mb-3">
                            <label for="editDeskripsiBuku" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="editDeskripsiBuku" name="description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editGambarBuku" class="form-label">Gambar Buku</label>
                            <input type="file" class="form-control" id="editGambarBuku" name="image">
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-success text-white text-center p-3 mt-4">
        <p class="mb-0">Hak Cipta &copy; 2023 NovelOnline. All rights reserved.</p>
    </footer>
    <!-- !Footer -->

    <script src="assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>

    <script src="assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/jquery/jquery-3.6.0.min.js"></script>
    <script>
        $('#editBukuModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var title = button.data('title')
            var author = button.data('author')
            var description = button.data('description')
            var modal = $(this)
            modal.find('#editIdBuku').val(id)
            modal.find('#editJudulBuku').val(title)
            modal.find('#editPenulisBuku').val(author)
            modal.find('#editDeskripsiBuku').val(description)
        });
    </script>
</body>

</html>
