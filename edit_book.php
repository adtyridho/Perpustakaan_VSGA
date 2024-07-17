<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'plugins/koneksi.php';

$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];

$image = $_FILES['image']['name'];
$imageTmpName = $_FILES['image']['tmp_name'];
$imageFolder = 'uploads/' . $image;

$pdf = $_FILES['file']['name'];
$pdfTmpName = $_FILES['file']['tmp_name'];
$pdfFolder = 'uploads/' . $pdf;

$sql = "UPDATE books SET title='$title', author='$author', description='$description'";

// Jika ada gambar baru yang diunggah
if (!empty($image)) {
    if (move_uploaded_file($imageTmpName, $imageFolder)) {
        $sql .= ", image='$image'";
    } else {
        echo "<script>alert('Failed to upload image'); window.location.href='daftar_buku.php';</script>";
        exit();
    }
}

// Jika ada file PDF baru yang diunggah
if (!empty($pdf)) {
    if (move_uploaded_file($pdfTmpName, $pdfFolder)) {
        $sql .= ", file='$pdf'";
    } else {
        echo "<script>alert('Failed to upload PDF file'); window.location.href='daftar_buku.php';</script>";
        exit();
    }
}

$sql .= " WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Buku berhasil diperbarui'); window.location.href='daftar_buku.php';</script>";
} else {
    echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.location.href='daftar_buku.php';</script>";
}

$conn->close();
?>
