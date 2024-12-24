<?php
include 'config.php';

$id = $_GET['id']; // Ambil ID dari URL
$query = "SELECT * FROM teman WHERE id = $id"; // Ambil data teman berdasarkan ID
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result); // Ambil data teman ke dalam array asosiatif

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Jika ada request POST
    $nama = $_POST['nama']; // Ambil nama dari form
    $query = "UPDATE teman SET nama = '$nama' WHERE id = $id"; // Query untuk update data
    mysqli_query($conn, $query); // Eksekusi query
    header("Location: index.php"); // Redirect ke index.php setelah berhasil
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Teman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fef8e6; /* Latar belakang krem lembut */
            margin: 20px;
            padding: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #2c7a7b; /* Hijau tua */
        }

        form {
            width: 40%;
            margin: 30px auto;
            padding: 20px;
            background-color: #e6fffa; /* Hijau pucat */
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        form button {
            width: 100%;
            padding: 10px;
            background-color: #2c7a7b; /* Hijau gelap */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        form button:hover {
            background-color: #225e5e; /* Hijau lebih gelap saat hover */
        }
    </style>
</head>
<body>

<h1>Edit Data Teman</h1>
<form method="POST">
    Nama: <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required>
    <button type="submit">Simpan</button>
</form>

</body>
</html>
