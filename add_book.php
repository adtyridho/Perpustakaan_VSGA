<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'plugins/koneksi.php';

$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];

$image = $_FILES['image']['name'];
$imageTmpName = $_FILES['image']['tmp_name'];
$imageFolder = 'uploads/' . $image;

$pdf = $_FILES['file']['name'];
$pdfTmpName = $_FILES['file']['tmp_name'];
$pdfFolder = 'uploads/' . $pdf;

if (move_uploaded_file($imageTmpName, $imageFolder) && move_uploaded_file($pdfTmpName, $pdfFolder)) {
    $sql = "INSERT INTO books (title, author, description, image, file) VALUES ('$title', '$author', '$description', '$image', '$pdf')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Buku berhasil ditambahkan'); window.location.href='daftar_buku.php';</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.location.href='daftar_buku.php';</script>";
    }
} else {
    echo "<script>alert('Failed to upload image or PDF file'); window.location.href='daftar_buku.php';</script>";
}

$conn->close();
?>
