<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu</title>
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
            background: #28a745;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background: #218838;
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
    <h2>Konversi Suhu</h2>
    <form method="post">
        <label for="celcius">Masukkan Suhu dalam Celcius:</label>
        <input type="number" id="celcius" name="celcius" step="any" required>
        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celcius = $_POST['celcius'];
        
        fqlcius) {
            $reamur = (4 / 5) * $celcius;
            $fahrenheit = (9 / 5) * $celcius + 32;
            $kelvin = $celcius + 273;
            return [
                'Reamur' => $reamur,
                'Fahrenheit' => $fahrenheit,
                'Kelvin' => $kelvin
            ];
        }

        $hasilKonversi = konversiSuhu($celcius);
        echo "<div class='result'>";
        echo "<h3>Hasil Konversi:</h3>";
        echo "Suhu dalam Reamur: " . $hasilKonversi['Reamur'] . "°R<br>";
        echo "Suhu dalam Fahrenheit: " . $hasilKonversi['Fahrenheit'] . "°F<br>";
        echo "Suhu dalam Kelvin: " . $hasilKonversi['Kelvin'] . " K<br>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>