<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Volume Balok</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: #e9ecef;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Hitung Volume Balok</h2>
    <form method="post">
        <label for="panjang">Panjang:</label>
        <input type="number" id="panjang" name="panjang" step="any" required>
        
        <label for="lebar">Lebar:</label>
        <input type="number" id="lebar" name="lebar" step="any" required>
        
        <label for="tinggi">Tinggi:</label>
        <input type="number" id="tinggi" name="tinggi" step="any" required>
        
        <input type="submit" value="Hitung Volume">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $tinggi = $_POST['tinggi'];
        
        function hitungVolumeBalok($panjang, $lebar, $tinggi) {
            // Menghitung volume balok
            $volume = $panjang * $lebar * $tinggi;
            return $volume;
        }

        $volumeBalok = hitungVolumeBalok($panjang, $lebar, $tinggi);
        echo "<div class='result'>";
        echo "<h3>Hasil Volume:</h3>";
        echo "Volume balok adalah: " . $volumeBalok . " cubic units";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>