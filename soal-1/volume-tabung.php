    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>menghitung tabung</title>
    </head>
    <body>
        <form method="POST" action="">
            <div>
                <label>masukkan jari jari alas tabung: </label> <br>
                <input type="number" id="jari-jari" name="angka1" placeholder="masukkkan angka">
            </div>
            <div>
                <label>masukkan jari jari tinggi tabung: </label> <br>
                <input type="number" id="tinggi" name="angka2" placeholder="masukkan angka">
            </div>
            <div style="margin-bottom: 1rem;">
                <label>pilih phi: </label> <br>
                <input type="radio" name="phi" value="3.14" >3.14 <br>
                <input type="radio" name="phi" value='22/7' >22/7 
            </div>
            <div>
                <button>submit</button>
            </div>
        </form>
    <?php
    $jari_jari = $_POST['angka1'];
    $tinggi = $_POST['angka2'];
    $phi = $_POST['phi'];

    $volume = $phi * ($jari_jari * $jari_jari) * $tinggi;

    echo "<p>hasil dari volume tabung dari jari jari $jari_jari dan tinggi $tinggi adalah : ".  $volume . "</p>";

    ?>
    </body>
    </html>