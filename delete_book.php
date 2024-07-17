<?php
include 'plugins/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM books WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: daftar_buku.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
