<?php
include 'confiq.php'; // Koneksi ke database

// Query untuk mengambil data teman dari database
$query = "SELECT * FROM teman";
$result = mysqli_query($conn, $query);

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Daftar Teman</title>";
echo "<style>";
echo "
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0; /* Latar belakang abu-abu lembut */
        margin: 20px;
        padding: 0;
        color: #333;
    }
    h1 {
        text-align: center;
        color: #0056b3; /* Biru tua */
    }
    .add-link {
        margin-bottom: 10px;
        text-align: left;
        margin-left: 120px; /* Menggeser sedikit ke kanan */
    }
    .add-link a {
        text-decoration: none;
        padding: 10px 15px;
        background-color: #d4edda; /* Hijau lembut */
        color: #155724; /* Warna teks hijau tua */
        border-radius: 5px;
        font-size: 14px;
    }
    .add-link a:hover {
        background-color: #c3e6cb; /* Hijau lebih gelap saat hover */
    }
    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        background-color: white;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    table th, table td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ddd;
    }
    table th {
        background-color: #cce5ff; /* Biru lembut */
        color: #004085; /* Warna teks biru tua */
    }
    table tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    table tr:hover {
        background-color: #b8daff; /* Biru lebih gelap saat hover */
    }
    .action-links a {
        text-decoration: none;
        padding: 5px 10px;
        border-radius: 3px;
        font-size: 12px;
        margin-right: 5px;
    }
    .btn-edit {
        background-color: #0056b3; /* Biru gelap */
        color: white;
    }
    .btn-edit:hover {
        background-color: #003d80; /* Biru lebih gelap saat hover */
    }
    .btn-delete {
        background-color: #dc3545; /* Merah gelap */
        color: white;
    }
    .btn-delete:hover {
        background-color: #c82333; /* Merah lebih gelap saat hover */
    }
";
echo "</style>";
echo "</head>";
echo "<body>";

echo "<h1>Daftar Teman</h1>";

// Pindahkan link "Tambah Data" di atas tabel, sebelum ID
echo "<div class='add-link'><a href='tambah.php'>Tambah Data</a></div>";

echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nama</th>";
echo "<th>Aksi</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

// Loop untuk menampilkan data teman
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td class='action-links'>";
    echo "<a href='edit.php?id=" . $row['id'] . "' class='btn-edit'>Edit</a>";
    echo "<a href='hapus.php?id=" . $row['id'] . "' class='btn-delete'>Hapus</a>";
    echo "</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";

echo "</body>";
echo "</html>";

// Tutup koneksi database
mysqli_close($conn);
?>
