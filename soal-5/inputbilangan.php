<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Bilangan</title>
</head>
<body>
    <h1>Menampilkan Bilangan</h1>
    <form method="POST" >
        <div>
            <label for="number">Masukkan angka dari 5 sampai 10:</label>
            <input type="number" name="number" min="5" max="10" >
        </div>
        <div>
            <label for="type">Pilih jenis bilangan:</label>
            <select id="type" name="type">
                <option value="odd">Ganjil</option>
                <option value="even">Genap</option>
            </select>
        </div>
        <div>
            <button type="submit">Tampilkan Bilangan</button>
        </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = intval($_POST['number']);
        $type = $_POST['type'];

        if ($number < 5 || $number > 10) {
            echo "<p>Bilangan harus antara 5 hingga 10 .</p>";
        } else {
            echo "<h2>Bilangan $type dari 1} hingga $number:</h2>";
            echo "<ul>";
            for ($i = 1; $i <= $number; $i++) {
                if (($type == 'odd' && $i % 2 != 0) || ($type == 'even' && $i % 2 == 0)) {
                    echo "<li>$i - Behemoth</li>";
                }
            }
            echo "</ul>";
        }
    }
    ?>
</body>
</html>
