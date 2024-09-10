<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Jarak</title>
</head>
<body>
    <form method="post" action="">
        <div>
            <label>Masukkan jarak (km):</label> <br>
            <input type="number" name="km" placeholder="Masukkan angka">
        </div>
        <div style="margin-bottom: 1rem;">
            <label>Konversi ke:</label>
            <select name="konversi">
                <option value="km">Km</option>
                <option value="m">m</option>
                <option value="cm">cm</option>
                <option value="mm">mm</option>
            </select>
        </div>
        <div> 
            <button type="submit">Submit</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $km = $_POST['km'];
        $konversi = $_POST['konversi'];

        if ($konversi == 'km') {
            $hasil = $km;
            $satuan = 'kilometer';
        } elseif ($konversi == 'm') {
            $hasil = $km * 1000;
            $satuan = 'meter';
        } elseif ($konversi == 'cm') {
            $hasil = $km * 10000;
            $satuan = 'sentimeter';
        } elseif ($konversi == 'mm') {
            $hasil = $km * 100000;
            $satuan = 'milimeter';
        } else {
            $hasil = 0;
            $satuan = '';
        }

        echo "<p>Hasil konversi dari $km kilometer ke $satuan adalah $hasil $satuan .</p>";
    }
    ?>
</body>
</html>
