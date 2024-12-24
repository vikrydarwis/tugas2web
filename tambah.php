<?php
include 'confiq.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $query = "INSERT INTO teman (nama) VALUES ('$nama')";
    mysqli_query($conn, $query);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Teman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4; /* Latar belakang abu-abu muda */
            margin: 20px;
            padding: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #007bff; /* Biru */
        }

        form {
            width: 40%;
            margin: 30px auto;
            padding: 20px;
            background-color: #e3f2fd; /* Biru muda */
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        form input[type="text"] {
            width: 100%; /* Agar panjangnya sama dengan tombol */
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box; /* Agar padding dan border termasuk dalam perhitungan lebar */
        }

        form button {
            width: 100%; /* Lebar tombol juga diatur 100% */
            padding: 10px;
            background-color: #007bff; /* Biru */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        form button:hover {
            background-color: #0056b3; /* Biru lebih gelap saat hover */
        }

    </style>
</head>
<body>

<h1>Tambah Data </h1>
<form method="POST">
    Nama: <input type="text" name="nama" required>
    <button type="submit">Simpan</button>
</form>

</body>
</html>
