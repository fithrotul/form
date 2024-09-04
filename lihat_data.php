<?php
include('koneksi.php');

$sql = "SELECT * FROM kontak";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Terkirim</title>
</head>
<body>
    <h2>Data Terkirim</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Pesan</th>
            <th>Aksi</th> <!-- Kolom untuk aksi (hapus) -->
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["nama"]."</td>
                        <td>".$row["kelas"]."</td>
                        <td>".$row["nim"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["gender"]."</td>
                        <td>".$row["message"]."</td>
                        <td>
                            <a href='hapus.php?id=".$row["id"]."' onclick=\"return confirm('Anda yakin ingin menghapus data ini?');\">Hapus</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>Tidak ada data</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
