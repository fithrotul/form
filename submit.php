<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Terkirim</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">SUCCESS</h2>

        <?php
        require('koneksi.php'); // Gunakan require untuk memastikan file dimasukkan dengan benar
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $nim = $_POST['nim'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $message = $_POST['message'];
        
            // Membuat query untuk memasukkan data
            $sql = "INSERT INTO kontak (nama, kelas, nim, email, gender, message) VALUES ('$nama', '$kelas', '$nim', '$email', '$gender', '$message')";
        
            // Menjalankan query dan memeriksa apakah berhasil
            if ($conn->query($sql) === TRUE) {
                echo "<p class='text-center'>Data berhasil dikirim!</p>";
            } else {
                echo "<p class='text-center'>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
        
            // Menutup koneksi
            $conn->close();
        }
        ?>
        <a href="form.php" class="btn btn-primary">Kembali</a>
    </div>
</body>
</html>
