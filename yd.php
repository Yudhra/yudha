<!DOCTYPE html>
<html>
<head>
    <title>Gambar KLS RPL 2</title>
    <style>
        /* Style untuk halaman HTML */
        .ojanimg, .egaimg, .poponimg, .andikaimg {
            width: 300px;
            height: 300px;
            border: 2px solid #333; /* Menambah bingkai pada gambar */
            border-radius: 10px;
            margin: 10px;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: grey;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        /* Style untuk formulir rekomendasi lagu */
        form {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Gambar KLS RPL 2</h1>

    <form method="get">
        <label for="orang">Pilih Orangnya: </label>
        <select name="orang" id="orang">
            <option value="ojan">Ojan</option>
            <option value="bahagia">ega</option>
            <option value="sedih">popon</option>
            <option value="energik">andika</option>
        </select><br>

        <input type="submit" value="Tampilkan Gambar">
    </form>

    <center><?php
    if (isset($_GET['orang'])) {
        $orang = $_GET['orang'];

        echo '<table>';
        if ($orang == "ojan") {
            echo '<tr><td style="text-align: center;"><img src="../foto/ojan.jpeg" alt="Ojan" class="ojanimg"></td></tr>';
        } elseif ($orang == "bahagia") {
            echo '<tr><td style="text-align: center;"><img src="../foto/ega.jpeg" alt="Orang Bahagia" class="egaimg"></td></tr>';
        } elseif ($orang == "sedih") {
            echo '<tr><td style="text-align: center;"><img src="../foto/popon.jpeg" alt="Orang Sedih" class="poponimg"></td></tr>';
        } elseif ($orang == "energik") {
            echo '<tr><td style="text-align: center;"><img src="../foto/andika.jpeg" alt="Orang Energik" class="andikaimg"></td></tr>';
        }
        echo '</table>';
    } else {
        echo "Pilih orang untuk menampilkan gambar.";
    }
    ?></center>
</body>
</html>
