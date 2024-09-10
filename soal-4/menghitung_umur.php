<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menghitung umur</title>
</head>
<body>
    <h1>menghitung umur</h1>
    <form method="POST">
    <div>
    <label>masukkan tanggal lahir</label>
    <input type="date" name="tanggal">
    </div>
    <div>
        <button>submit</button>
    </div>
    </form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


$tanggal = $_POST['tanggal'];

$lahir = new DateTime($tanggal);
$currentdate = new DateTime();

$age = $currentdate->diff($lahir)->y;
$age1 = $currentdate->diff($lahir)->m;
$age2 = $currentdate->diff($lahir)->d;

echo "<p>Umur anda pasti: $age tahun $age1 bulan $age2 hari :v </p>";
}
?>
</body>
</html>