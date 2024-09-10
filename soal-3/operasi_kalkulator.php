<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator</title>
</head>
<body>
    <form method="POST">
        <div>
            <h1>kalkulator</h1>
            <label> masukkan angka pertama: </label>
            <input type="number" name="num1">
        </div>
        <div>
            <label>masukkan angka kedua: </label>
            <input type="number" name="num2">
        </div>
        <div>
            <label>pilih perjumlahan: </label> <br>
            <input type="radio"  name="hi" value="plus">tambah
            <input type="radio" name="hi" value="minus">kurang
            <input type="radio" name="hi" value="multiplied">kali
            <input type="radio" name="hi" value="divided">bagi
        </div>
        <div>
            <button>submit</button>
        </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $hi = $_POST['hi'];

    switch ($hi) {
        case 'plus':
            $hasil = $num1 + $num2;
            break;
        case 'minus':
            $hasil = $num1 - $num2;
            break;
        case 'multiplied':
            $hasil = $num1 * $num2;
            break;
        case 'divided':
            $hasil = $num1 / $num2;
            if ($num2 != 0) {
                $hasil = $num1 / $num2;
            } else {
                $hasil = '._.';
            }
            break;
        default:
            $hasil = 'Error $%#@%^&*!#@$%'; 
    }

    echo "<p>jawaban: $hasil</p>";
    }
    ?>
</body>
</html>