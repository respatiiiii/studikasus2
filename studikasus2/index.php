<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Kasus 2 - Form Input PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f4f4f9;
        }
        .container {
            max-width: 500px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 0;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .radio-group {
            display: flex;
            gap: 15px;
        }
        button {
            background-color: #0fd1f8;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        button:hover {
            background-color: #04a8cd;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e7f3fe;
            border-left: 6px solid #2196F3;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Data Pengguna</h2>
    
    <!-- Form Input (Method POST) -->
    <form action="index.php" method="POST">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <div class="radio-group">
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
            </div>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="telepon">Nomor Telepon:</label>
            <input type="tel" id="telepon" name="telepon" required>
        </div>

        <button type="submit" name="submit">Submit</button>
    </form>

    <!-- Proses PHP untuk Menampilkan Hasil -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        // Mengambil data dari form
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $telepon = htmlspecialchars($_POST['telepon']);

        // Menampilkan data
        echo '<div class="result">';
        echo '<h3>Data yang Berhasil Dikirim:</h3>';
        echo '<p><strong>Nama:</strong> ' . $nama . '</p>';
        echo '<p><strong>Email:</strong> ' . $email . '</p>';
        echo '<p><strong>Jenis Kelamin:</strong> ' . $jenis_kelamin . '</p>';
        echo '<p><strong>Alamat:</strong> ' . $alamat . '</p>';
        echo '<p><strong>Nomor Telepon:</strong> ' . $telepon . '</p>';
        echo '</div>';
    }
    ?>
</div>

</body>
</html>