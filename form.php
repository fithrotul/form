<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
include('koneksi.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = ($_POST['name']);
    $kelas = ($_POST['kelas']);
    $nim = ($_POST['nim']);
    $email = ($_POST['email']);
    $gender = ($_POST['gender']);
    $message = ($_POST['message']);

}
?>

<div class="container mt-5">
    <h2>Contact Us</h2>
    <form action="submit.php" method="post">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" required>

        <label for="kelas">Kelas</label>
        <input type="text" id="kelas" name="kelas" required>

        <label for="nim">NIM</label>
        <input type="text" id="nim" name="nim" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <div class="dropdown">
            <label for="gender">Gender</label>
            <select id="gender" name="gender" required>
                <option value="" disabled selected>Select your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit" class="btn btn-success">Kirim</button>
        <a href="lihat_data.php" class="btn btn-primary">Tampilkan Data Terkirim</a>
    </form>
</div>
</body>
</html>
