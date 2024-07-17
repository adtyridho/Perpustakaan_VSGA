<?php
include '../plugins/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM books WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $title = $row['title'];
        $author = $row['author'];
        $description = $row['description'];
        $file = '../uploads/' . $row['file']; // Sesuaikan ini dengan lokasi penyimpanan file

        // Tampilkan detail buku
        echo '<div class="container mt-5">';
        echo '<h1>' . $title . '</h1>';
        echo '<p>Penulis: ' . $author . '</p>';
        echo '<p>' . $description . '</p>';

        // Tampilkan buku sebagai PDF
        echo '<embed src="' . $file . '" type="application/pdf" width="100%" height="600px" />';
        echo '</div>';
    } else {
        echo "Buku tidak ditemukan.";
    }
} else {
    echo "Parameter ID tidak ditemukan.";
}
?>
