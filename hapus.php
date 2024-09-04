<?php
include('koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data berdasarkan ID
    $sql = "DELETE FROM kontak WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();

    // Redirect ke halaman utama setelah penghapusan
    header("Location: form.php"); // Ganti dengan nama halaman utama Anda
    exit();
} else {
    echo "ID tidak ditemukan.";
}
?>
